<?php
// Free quote form handler. Emails the enquiry to the company and redirects back.
// Kept outside public/*.php so the gulp php→html build skips it.

$to       = 'atlanticpaintingau@gmail.com';
$redirect = '../index.php';

function back(string $redirect, string $status): void
{
    header('Location: ' . $redirect . '?quote=' . $status . '#contact', true, 303);
    exit;
}

// Strip line breaks so values can't inject extra mail headers
function clean(?string $value, int $max = 200): string
{
    $value = trim(str_replace(["\r", "\n"], ' ', (string) $value));
    return mb_substr($value, 0, $max);
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    back($redirect, 'error');
}

// Honeypot filled → silently treat as sent
if (!empty($_POST['website'])) {
    back($redirect, 'sent');
}

$name    = clean($_POST['name'] ?? '');
$phone   = clean($_POST['phone'] ?? '', 40);
$email   = clean($_POST['email'] ?? '');
$suburb  = clean($_POST['suburb'] ?? '');
$colour  = clean($_POST['colour'] ?? '');
$message = mb_substr(trim((string) ($_POST['message'] ?? '')), 0, 3000);
$paint   = array_map('clean', array_filter((array) ($_POST['paint'] ?? []), 'is_string'));

if ($name === '' || $phone === '' || ($email !== '' && !filter_var($email, FILTER_VALIDATE_EMAIL))) {
    back($redirect, 'invalid');
}

$body = "New free quote request from the website\n\n"
    . "Name:    $name\n"
    . "Phone:   $phone\n"
    . "Email:   " . ($email ?: '-') . "\n"
    . "Suburb:  " . ($suburb ?: '-') . "\n"
    . "Painting: " . ($paint ? implode(', ', $paint) : '-') . "\n"
    . "Colours: " . ($colour ?: '-') . "\n\n"
    . "Message:\n" . ($message ?: '-') . "\n";

$headers = ['From: Atlantic Painting Website <no-reply@atlanticpainting.com.au>'];
if ($email !== '') {
    $headers[] = 'Reply-To: ' . $email;
}
$headers[] = 'Content-Type: text/plain; charset=UTF-8';

$sent = @mail($to, 'Free quote request: ' . $name, $body, implode("\r\n", $headers));

back($redirect, $sent ? 'sent' : 'error');
