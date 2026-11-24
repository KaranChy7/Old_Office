<?php
    $page = 'page-thanks';
    $title = 'Thank You';
    $description = 'Thanks for contacting Hortsol. Your enquiry has been sent.';
    $noindex = true;
    include 'includes/header.php'; 
?>
<div class="thanks">
    <div class="icon">
        <img src="images/thank-you.png" alt="">
    </div>
    <div class="container">
        <div class="message">
            <h1 class="h2">Thanks, your enquiry has been sent</h1>
            <p>We&rsquo;ve received your details and will review your request, then get back to you by phone or
                email.</p>
            <p>If it&rsquo;s urgent, call us on <a href="tel:<?= $phone ?>"><?= $phone ?></a>.</p>
            <a href="./" class="redirect"><i class="fas fa-reply"></i>
                <span class="h5">Back to the homepage</span>
            </a>
        </div>
    </div>
</div>
<?php
    include 'includes/footer.php'; 
?>
