<?php
$page = 'quote';
require_once 'includes/header.php';
?>

<section class="page-hero page-hero--short">
    <div class="page-hero__bg">
        <img src="images/image-11.jpg" alt="Book a camper" loading="eager">
    </div>
    <div class="container">
        <div class="page-hero__content">
            <div class="breadcrumb">
                <a href="index.php">Home</a>
                <span class="breadcrumb__sep">/</span>
                <span class="breadcrumb__current">Get a Quote</span>
            </div>
            <h2 class="page-hero__title">Book Your <em>Adventure</em></h2>
        </div>
    </div>
</section>

<section class="section section--black" id="quote">
    <div class="container">
        <div class="section-head">
            <div class="section-eyebrow section-eyebrow--center">Let's Get Started</div>
            <h2 class="section-title section-title--sm">Request a <span
                    class="text-gold">Quote</span>
            </h2>
            <p class="body-text section-head__text">Fill out the form below and we'll get back
                to
                you with availability and pricing within a few hours.</p>
        </div>

        <div class="quote-form">
            <form id="quoteForm" novalidate>

                <!-- Vehicle Selection -->
                <div class="quote-form__section">
                    <div class="quote-form__section-title">01. Select Service</div>
                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label" for="q_service">Service Type</label>
                            <select id="q_service" name="service" class="form-control" required>
                                <option value="">Choose a service…</option>
                                <option value="hire_buzz"
                                    <?php echo (isset($_GET['vehicle']) && $_GET['vehicle'] === 'buzz') ? 'selected' : ''; ?>>
                                    Camper Hire — VW ID. Buzz (from $349/day)</option>
                                <option value="hire_mini"
                                    <?php echo (isset($_GET['vehicle']) && $_GET['vehicle'] === 'mini') ? 'selected' : ''; ?>>
                                    Camper Hire — Mini Countryman (from $199/day)</option>
                                <option value="fitout"
                                    <?php echo (isset($_GET['type']) && $_GET['type'] === 'fitout') ? 'selected' : ''; ?>>
                                    Custom Fit-Out</option>
                            </select>
                        </div>
                        <div class="form-group" id="datesGroup">
                            <label class="form-label" for="q_dates">Pickup Date</label>
                            <input type="date" id="q_dates" name="pickup_date" class="form-control">
                        </div>
                    </div>
                    <div class="form-row" id="returnGroup">
                        <div class="form-group">
                            <label class="form-label" for="q_return">Return Date</label>
                            <input type="date" id="q_return" name="return_date" class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="q_guests">Number of Guests</label>
                            <select id="q_guests" name="guests" class="form-control">
                                <option value="1">1 person</option>
                                <option value="2" selected>2 people</option>
                                <option value="3">3 people</option>
                                <option value="4">4 people</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Personal Info -->
                <div class="quote-form__section">
                    <div class="quote-form__section-title">02. Your Details</div>
                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label" for="q_fname">First Name</label>
                            <input type="text" id="q_fname" name="first_name" class="form-control" placeholder="John"
                                required>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="q_lname">Last Name</label>
                            <input type="text" id="q_lname" name="last_name" class="form-control" placeholder="Smith"
                                required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label" for="q_email">Email</label>
                            <input type="email" id="q_email" name="email" class="form-control"
                                placeholder="you@example.com" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="q_phone">Phone</label>
                            <input type="tel" id="q_phone" name="phone" class="form-control" placeholder="04XX XXX XXX">
                        </div>
                    </div>
                </div>

                <!-- Message -->
                <div class="quote-form__section">
                    <div class="quote-form__section-title">03. Extra Details</div>
                    <div class="form-group">
                        <label class="form-label" for="q_message">Tell us about your trip / fit-out plans</label>
                        <textarea id="q_message" name="message" class="form-control"
                            placeholder="Where are you headed? Any special requirements?"></textarea>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" id="q_terms" name="terms" required>
                        <label class="form-check__label" for="q_terms">
                            I agree to the <a href="#">terms and conditions</a> and understand
                            this is an
                            enquiry, not a confirmed booking.
                        </label>
                    </div>
                </div>

                <div class="form-success" id="quoteSuccess">
                    <i class="ri-check-circle-line"></i> Quote request received! We'll be in touch within 4 hours.
                </div>

                <button type="submit" class="btn btn--gold btn--block btn--lg">
                    <i class="ri-send-plane-line"></i> Submit Enquiry
                </button>

            </form>
        </div>
    </div>
</section>

<?php require_once 'includes/footer.php'; ?>