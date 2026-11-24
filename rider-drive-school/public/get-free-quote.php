<?php
$page_title = "Get a Free Quote — AP Heating & Cooling Systems";
$current_page = '';
$hero_title = 'Get a <span>Free</span> Quote';
$hero_subtitle = 'Tell us about your heating or cooling needs and we\'ll get back to you with a no-obligation quote within 24 hours.';
$hero_breadcrumb = 'Free Quote';
require_once 'includes/header.php';
require_once 'includes/config.php';
?>

<?php include 'includes/page-hero.php'; ?>

<section class="quote-main">
  <div class="container">
    <div class="quote-grid">

      <div>
        <div class="step-tracker">
          <div class="step-dot active" id="dot-1">
            <div class="step-circle">1</div>
            <div class="step-label">Your Info</div>
          </div>
          <div class="step-dot" id="dot-2">
            <div class="step-circle">2</div>
            <div class="step-label">Project Details</div>
          </div>
          <div class="step-dot" id="dot-3">
            <div class="step-circle">3</div>
            <div class="step-label">Confirm</div>
          </div>
        </div>

        <form id="quoteForm" class="form" method="POST"
          action="https://api.surojd.com.np/api/email/submit/I8N9fwkLjFR8ZaCtqkY5GEcj7S9Ely"
          enctype="multipart/form-data">

          <!-- Hidden fields for API -->
          <input name="to" type="hidden" value="<?= $email; ?>">
          <input name="successMessage" type="hidden" value="Your Message Has Been Delivered.">

          <div class="quote-form-wrap">
            <h2>Request Your Free Quote</h2>
            <p>No cost. No obligation. Just honest answers and a fair estimate.</p>

            <!-- Step 1 -->
            <div class="step-panel active" id="panel-1">
              <div class="form-row">
                <div class="form-group">
                  <label>First Name</label>
                  <input type="text" id="q-fname" name="First Name" placeholder="John" required />
                </div>
                <div class="form-group">
                  <label>Last Name</label>
                  <input type="text" id="q-lname" name="Last Name" placeholder="Smith" required />
                </div>
              </div>
              <div class="form-group">
                <label>Email Address</label>
                <input type="email" id="q-email" name="Email" placeholder="john@example.com" required />
              </div>
              <div class="form-group">
                <label>Phone Number</label>
                <input type="tel" id="q-phone" name="Phone Number" placeholder="408-555-0100" required />
              </div>
              <div class="form-group">
                <label>Business/Site Address</label>
                <input type="text" id="q-address" name="Business Address" placeholder="Suburb, SA" required />
              </div>
              <div class="form-nav">
                <span class="step-count">Step 1 of 3</span>
                <button type="button" class="btn btn-primary" onclick="nextStep(1)">
                  <span>Next Step →</span>
                </button>
              </div>
            </div>

            <!-- Step 2 -->
            <div class="step-panel" id="panel-2">
              <div class="form-group">
                <label>Services Needed (select all that apply)</label>
                <div class="service-checks">
                  <?php foreach (['Air Conditioner Supply & Installation', 'Servicing & Maintenance', 'Breakdowns & Repairs', 'Cooling Services', 'Heating Services', 'Commercial Air Conditioning', 'Industrial Air Conditioning'] as $s): ?>
                    <label class="service-check">
                      <input type="checkbox" name="Services[]" value="<?= $s; ?>" />
                      <span><?= $s; ?></span>
                    </label>
                  <?php endforeach; ?>
                </div>
              </div>

              <div class="form-group">
                <label>Project Size</label>
                <div class="budget-options">
                  <?php foreach (['Small Job (Under $10k)', 'Medium Project ($10k–$50k)', 'Large Project ($50k+)', 'Ongoing/Commercial Contract', 'Not Sure'] as $b): ?>
                    <label class="budget-radio">
                      <input type="radio" name="Project Size" value="<?= $b; ?>" />
                      <span class="budget-label"><?= $b; ?></span>
                    </label>
                  <?php endforeach; ?>
                </div>
              </div>

              <div class="form-group">
                <label>Timeline</label>
                <select name="Timeline">
                  <option value="">When do you want to start?</option>
                  <option>ASAP</option>
                  <option>1–3 Months</option>
                  <option>3–6 Months</option>
                  <option>6+ Months</option>
                  <option>Just Planning</option>
                </select>
              </div>

              <div class="form-nav">
                <button type="button" class="btn-back" onclick="prevStep(2)">← Back</button>
                <span class="step-count">Step 2 of 3</span>
                <button type="button" class="btn btn-primary" onclick="nextStep(2)">
                  <span>Next Step →</span>
                </button>
              </div>
            </div>

            <!-- Step 3 -->
            <div class="step-panel" id="panel-3">
              <div class="form-group">
                <label>Describe Your Project</label>
                <textarea name="Project Description" rows="5"
                  placeholder="Tell us about your project, any design details, and when you'd like to start..."></textarea>
              </div>

              <div class="form-group">
                <label>How did you hear about us?</label>
                <select name="Referral Source">
                  <option value="">Select...</option>
                  <option>Google</option>
                  <option>Yelp</option>
                  <option>Referral</option>
                  <option>Social Media</option>
                  <option>Local Trade Directory</option>
                  <option>Other</option>
                </select>
              </div>

              <div class="form-nav">
                <button type="button" class="btn-back" onclick="prevStep(3)">← Back</button>
                <span class="step-count">Step 3 of 3</span>
                <button type="submit" class="btn btn-primary"><span>Submit Request</span></button>
              </div>
            </div>

            <!-- Success -->
            <div class="quote-success" id="quoteSuccess">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round">
                <path d="M22 11.08V12a10 10 0 11-5.93-9.14" />
                <polyline points="22 4 12 14.01 9 11.01" />
              </svg>
              <h3>Quote Request Received!</h3>
              <p>We'll review your details and contact you within one business day to schedule your first
                job.</p>
              <a href="index.php" class="btn btn-primary"><span>Back to Home</span></a>
            </div>
          </div>
        </form>
      </div>

      <div class="quote-sidebar">
        <div class="sidebar-card">
          <h3>Our Promise to You</h3>
          <div class="sidebar-promise">
            <div class="promise-item"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round">
                <polyline points="20 6 9 17 4 12" />
              </svg>
              <p>100% free, no-obligation quote — always.</p>
            </div>
            <div class="promise-item"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round">
                <polyline points="20 6 9 17 4 12" />
              </svg>
              <p>Response within one business day.</p>
            </div>
            <div class="promise-item"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round">
                <polyline points="20 6 9 17 4 12" />
              </svg>
              <p>Detailed, itemized quote — no vague numbers.</p>
            </div>
            <div class="promise-item"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round">
                <polyline points="20 6 9 17 4 12" />
              </svg>
              <p>Your information is never shared or sold.</p>
            </div>
          </div>
        </div>
        <div class="sidebar-card sidebar-phone">
          <p>Prefer to talk directly?</p>
          <a href="tel:<?= $phone_raw; ?>"><?= $phone; ?></a>
          <span>Available <?= $hours2; ?> — Phone Lines 24/7</span>
        </div>
      </div>

    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>