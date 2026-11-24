<?php require_once 'includes/header.php'; ?>

<!-- Page Banner -->
<section class="page-banner">
    <div class="container">
        <h1 class="banner-title">Get a Free Quote</h1>
        <ul class="breadcrumb">
            <li><a href="./">Home</a></li>
            <li class="separator">›</li>
            <li class="active">Free Quote</li>
        </ul>
    </div>
</section>

<!-- Quote Page -->
<div class="quote-page">
    <div class="container">
        <div class="quote-page-inner">

            <!-- Sidebar -->
            <div class="quote-sidebar" data-animate="left">
                <div class="sidebar-box">
                    <h3>Why Get a Quote?</h3>
                    <p>
                        Our quotes are completely free, written, and detailed. We assess your project properly before
                        committing to any price — so you know exactly what you're getting with no surprises.
                    </p>
                    <p>
                        We respond to all quote requests within 24 hours. Our team is available <?= $hours_short ?>.
                    </p>

                    <div class="sidebar-contact">
                        <a href="<?= $phone_link ?>">
                            <i class="fa-solid fa-phone"></i> <?= $phone ?>
                        </a>
                        <a href="<?= $email_link ?>">
                            <i class="fa-solid fa-envelope"></i> <?= $email ?>
                        </a>
                        <a href="#">
                            <i class="fa-solid fa-location-dot"></i> <?= $address ?>
                        </a>
                    </div>

                    <div class="srv-tags">
                        <?php foreach ($services as $srv): ?>
                            <span><?= $srv['name'] ?></span>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

            <!-- Form -->
            <div class="quote-form-wrap" data-animate="right">
                <div class="form-heading">
                    <h2>Request Your Free Quote</h2>
                    <p>Fill in the details below and one of our trade specialists will be in touch within 24 hours.</p>
                </div>

                <form action="#" method="POST" id="quote-form" novalidate>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="q-name">Full Name *</label>
                            <input type="text" id="q-name" name="name" placeholder="Your full name" required>
                        </div>
                        <div class="form-group">
                            <label for="q-phone">Phone Number *</label>
                            <input type="tel" id="q-phone" name="phone" placeholder="04XX XXX XXX" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="q-email">Email Address *</label>
                        <input type="email" id="q-email" name="email" placeholder="your@email.com.au" required>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="q-service">Service Required *</label>
                            <select id="q-service" name="service" required>
                                <option value="" disabled selected>Select a service</option>
                                <?php foreach ($services as $srv): ?>
                                    <option value="<?= $srv['slug'] ?>"><?= $srv['name'] ?></option>
                                <?php endforeach; ?>
                                <option value="multiple">Multiple Services</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="q-suburb">Suburb / Location *</label>
                            <input type="text" id="q-suburb" name="suburb" placeholder="Your suburb" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="q-timeline">Project Timeline</label>
                        <select id="q-timeline" name="timeline">
                            <option value="" disabled selected>When do you need it done?</option>
                            <option value="asap">As soon as possible</option>
                            <option value="2weeks">Within 2 weeks</option>
                            <option value="month">Within a month</option>
                            <option value="flexible">I'm flexible</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="q-details">Project Details *</label>
                        <textarea id="q-details" name="details"
                            placeholder="Please describe your project — size, scope, current condition, and any specific requirements..."
                            required></textarea>
                    </div>

                    <button type="submit" class="btn-primary form-submit">
                        <i class="fa-solid fa-paper-plane"></i> Submit Quote Request
                    </button>

                    <p style="margin-top:14px; font-size:13px; color:#5A5A5A; text-align:center;">
                        By submitting, you agree to be contacted by <?= $company_name ?> regarding your enquiry. We
                        respect your privacy.
                    </p>
                </form>
            </div>

        </div>
    </div>
</div>

<?php require_once 'includes/footer.php'; ?>