<?php
// ═══════════════════════════════════════
//   FORM HANDLER — contact + quote forms
//   POST (urlencoded) → JSON { ok, message }
// ═══════════════════════════════════════
header('Content-Type: application/json; charset=utf-8');

const TL_MAIL_TO   = 'info@trulineinstalls.com.au';
const TL_MAIL_FROM = 'website@trulineinstalls.com.au';

function respond(bool $ok, string $message, int $status = 200): void
{
    http_response_code($status);
    echo json_encode(['ok' => $ok, 'message' => $message]);
    exit;
}

function field(string $key, int $max = 2000): string
{
    $value = trim((string) ($_POST[$key] ?? ''));
    $value = str_replace(["\r", "\0"], '', $value);
    return mb_substr($value, 0, $max);
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    respond(false, 'Method not allowed.', 405);
}

// Honeypot — real visitors never fill this in.
if (field('company_website') !== '') {
    respond(true, 'Thanks — we\'ll be in touch shortly.');
}

$form = field('form-name', 20) === 'quote' ? 'quote' : 'contact';

$labels = $form === 'quote'
    ? ['service' => 'Service', 'scope' => 'Project details', 'suburb' => 'Suburb / location', 'timeline' => 'Timeline', 'budget' => 'Budget']
    : ['service' => 'Service', 'message' => 'Message'];
$labels = ['first_name' => 'First name', 'last_name' => 'Last name', 'phone' => 'Phone', 'email' => 'Email'] + $labels;

$required = $form === 'quote'
    ? ['first_name', 'last_name', 'phone', 'service', 'scope', 'suburb']
    : ['first_name', 'last_name', 'phone', 'message'];

$data = [];
foreach ($labels as $key => $label) {
    $data[$key] = field($key, $key === 'scope' || $key === 'message' ? 5000 : 200);
}

foreach ($required as $key) {
    if ($data[$key] === '') {
        respond(false, 'Please fill in ' . strtolower($labels[$key]) . '.', 422);
    }
}

if ($data['email'] !== '' && !filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
    respond(false, 'Please enter a valid email address.', 422);
}

if (!preg_match('/^[0-9 +()-]{8,20}$/', $data['phone'])) {
    respond(false, 'Please enter a valid phone number.', 422);
}

$name    = $data['first_name'] . ' ' . $data['last_name'];
$subject = ($form === 'quote' ? 'New quote request' : 'New website enquiry') . ' — ' . $name;

$body = ($form === 'quote' ? "Quote request" : "Contact enquiry") . " from trulineinstalls.com.au\n\n";
foreach ($labels as $key => $label) {
    if ($data[$key] !== '') {
        $body .= $label . ': ' . $data[$key] . "\n";
    }
}

$headers = [
    'From: Tru-Line Installs Website <' . TL_MAIL_FROM . '>',
    'Content-Type: text/plain; charset=UTF-8',
];
if ($data['email'] !== '') {
    $headers[] = 'Reply-To: ' . $name . ' <' . $data['email'] . '>';
}

$sent = @mail(TL_MAIL_TO, '=?UTF-8?B?' . base64_encode($subject) . '?=', $body, implode("\r\n", $headers));

if (!$sent) {
    respond(false, 'Sorry, your message couldn\'t be sent right now. Please call 0478 314 984 or email ' . TL_MAIL_TO . '.', 500);
}

respond(true, $form === 'quote'
    ? 'Thanks ' . $data['first_name'] . ' — your quote request is in. We\'ll be in touch within one business day.'
    : 'Thanks ' . $data['first_name'] . ' — your message has been sent. We\'ll get back to you shortly.');
