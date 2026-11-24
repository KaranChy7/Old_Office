<?php
$page = 'request a quote';
$page_title = "Free Quote | Metal Doors, Gates & Fences Melbourne";
include 'includes/header.php'; ?>

<div class="breadcrumb">
    <div class="container">
        <div class="breadcrumb-wrapper">
            <h1>Get a Free Quote</h1>
        </div>
    </div>
</div>

<section class="section-quote">
    <div class="container">
        <div class="quote-wrapper">
            <div class="content">
                <h3>Why Choose <?= $company; ?>?</h3>
                <p class="desc"> Our highly experienced team builds every door, gate, fence and metalwork piece to
                    measure for homes and businesses within 100km of Campbellfield. Tell us what you need, add photos or
                    rough sizes if you have them, and we will come back to you with a clear, no-obligation quote.
                </p>
            </div>
            <div class="form-container">
                <div class="form-title">
                    <h3> GET A FREE QUOTE:</h3>
                </div>
                <form class="quote-form" method="POST"
                    action="https://api.surojd.com.np/api/email/submit/YzN7vdat3WOxaBxk7fahKQlkZz2NP4"
                    enctype="multipart/form-data" id="quoteForm">

                    <div class="form-group half-width">
                        <label for="firstName">First Name:</label>
                        <input type="text" id="firstName" name="First Name" class="form-input" required />
                    </div>
                    <div class="form-group half-width">
                        <label for="lastName">Last Name:</label>
                        <input type="text" id="lastName" name="Last Name" class="form-input" required />
                    </div>
                    <div class="form-group half-width">
                        <label for="quoteEmail">Email:</label>
                        <input type="email" id="quoteEmail" name="Email" class="form-input" required />
                    </div>
                    <div class="form-group half-width">
                        <label for="quotePhone">Phone:</label>
                        <input type="tel" id="quotePhone" name="Phone Number" class="form-input" required />
                    </div>

                    <div class="form-group full-width">
                        <label for="quoteService">Select Any Services</label>
                        <select id="quoteService" name="Service" class="form-input">
                            <option value="">Select</option>
                            <option value="Commercial Metalwork">Commercial Metalwork</option>
                            <option value="Residential Metalwork">Residential Metalwork</option>
                            <option value="Metal Doors">Metal Doors</option>
                            <option value="Fences">Fences</option>
                            <option value="Gates">Gates</option>
                            <option value="Doors">Doors</option>
                        </select>
                    </div>

                    <div class="form-group full-width">
                        <label for="projectAddress">Project Address:</label>
                        <input type="text" id="projectAddress" name="Project Address" class="form-input" />
                    </div>

                    <div class="form-group full-width">
                        <label for="otherDetails">Other Details</label>
                        <textarea id="otherDetails" name="Other Details" class="form-input" rows="5"></textarea>
                    </div>

                    <div class="form-group full-width">
                        <button type="submit" class="btn btn-primary btn-custom-large">Submit</button>
                    </div>

                    <input name="to" type="hidden" value="<?= $email; ?>">
                    <input name="successMessage" type="hidden" value="Your Message Has Been Delivered.">
                </form>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>