<?php
$page_title   = 'Get a Free Quote | True-Line Installs';
$page_desc    = 'Build your free, no-obligation quote request online. Tell us about your metal fabrication job in Melbourne, VIC and we will be in touch within one business day.';
$current_page = 'quote';
require_once 'includes/head.php';
require_once 'includes/header.php';

$banner = [
    'title'    => 'Get A<br>Free Quote',
    'tag'      => 'Quote',
    'overline' => 'Tell Us About<br>Your Project',
    'image'    => 4,
];
require 'includes/partials/page-banner.php';
?>

<section class="quote">
  <div class="container">
    <form class="quote__grid" id="quote-form" name="quote" method="post" action="api/send-mail.php" data-netlify="true" netlify-honeypot="company_website" novalidate>
          <input type="hidden" name="form-name" value="quote" />
          <p class="form-honeypot" aria-hidden="true"><label>Leave this empty <input type="text" name="company_website" tabindex="-1" autocomplete="off" /></label></p>

      <div class="quote__form-col">

        <div class="quote__section">
          <div class="quote__section-label"><span>1</span> What do you need done?</div>
          <div class="quote__services">

            <input type="radio" name="service" id="service-fabrication" class="quote__service-input" value="Fabrication & Installation" required />
            <label for="service-fabrication" class="quote__service-card">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M20.71 5.63l-2.34-2.34a1 1 0 0 0-1.41 0L15.5 4.75l3.75 3.75 1.46-1.46a1 1 0 0 0 0-1.41zM2 21.5V17.75l10.44-10.44 3.75 3.75L5.75 21.5H2z"/></svg>
              <span>Fabrication &amp; Installation</span>
            </label>

            <input type="radio" name="service" id="service-cutting" class="quote__service-input" value="Cutting & Forming" />
            <label for="service-cutting" class="quote__service-card">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M3 21l4-1 11-11-3-3L4 17l-1 4z"/><path d="M16 4l3 3 2-2-3-3-2 2z"/></svg>
              <span>Cutting &amp; Forming</span>
            </label>

            <input type="radio" name="service" id="service-finishing" class="quote__service-input" value="Finishing" />
            <label for="service-finishing" class="quote__service-card">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
              <span>Finishing</span>
            </label>

            <input type="radio" name="service" id="service-other" class="quote__service-input" value="Other / Not Sure" />
            <label for="service-other" class="quote__service-card">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 17h-2v-2h2v2zm2.07-7.75-.9.92C13.45 12.9 13 13.5 13 15h-2v-.5c0-1.1.45-1.7 1.17-2.42l1.24-1.26c.37-.36.59-.86.59-1.32 0-1.1-.9-2-2-2s-2 .9-2 2H8c0-2.21 1.79-4 4-4s4 1.79 4 4c0 .88-.36 1.68-.93 2.25z"/></svg>
              <span>Other / Not Sure</span>
            </label>

          </div>
        </div>

        <div class="quote__section">
          <div class="quote__section-label"><span>2</span> Describe the job</div>
          <div class="quote__field">
            <label for="scope">Project Details</label>
            <textarea id="scope" name="scope" placeholder="Tell us what you need done, rough size of the job, materials in mind, timeframe…" rows="5" required></textarea>
          </div>
        </div>

        <div class="quote__section">
          <div class="quote__section-label"><span>3</span> Where &amp; when</div>
          <div class="quote__field">
            <label for="quote-suburb">Suburb / Location</label>
            <input type="text" id="quote-suburb" name="suburb" placeholder="e.g. Frankston VIC" required />
          </div>
          <div class="quote__field">
            <label>Timeline</label>
            <div class="quote__pills">
              <input type="radio" name="timeline" id="timeline-asap" class="quote__pill-input" value="ASAP" />
              <label for="timeline-asap" class="quote__pill">ASAP</label>

              <input type="radio" name="timeline" id="timeline-month" class="quote__pill-input" value="Within a month" />
              <label for="timeline-month" class="quote__pill">Within a month</label>

              <input type="radio" name="timeline" id="timeline-exploring" class="quote__pill-input" value="Just exploring" />
              <label for="timeline-exploring" class="quote__pill">Just exploring</label>
            </div>
          </div>
          <div class="quote__field">
            <label for="budget">Estimated Budget</label>
            <select id="budget" name="budget">
              <option value="" selected>Not sure yet</option>
              <option value="Under $2,000">Under $2,000</option>
              <option value="$2,000 – $5,000">$2,000 – $5,000</option>
              <option value="$5,000 – $15,000">$5,000 – $15,000</option>
              <option value="$15,000+">$15,000+</option>
            </select>
          </div>
        </div>

        <div class="quote__section">
          <div class="quote__section-label"><span>4</span> Your contact details</div>
          <div class="quote__row">
            <div class="quote__field">
              <label for="quote-first-name">First Name</label>
              <input type="text" id="quote-first-name" name="first_name" placeholder="John" required />
            </div>
            <div class="quote__field">
              <label for="quote-last-name">Last Name</label>
              <input type="text" id="quote-last-name" name="last_name" placeholder="Smith" required />
            </div>
          </div>
          <div class="quote__row">
            <div class="quote__field">
              <label for="quote-phone">Phone Number</label>
              <input type="tel" id="quote-phone" name="phone" placeholder="04xx xxx xxx" required />
            </div>
            <div class="quote__field">
              <label for="quote-email">Email Address</label>
              <input type="email" id="quote-email" name="email" placeholder="john@example.com" />
            </div>
          </div>
        </div>

        <button type="submit" class="quote__submit">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="icon-md"><path d="M2.01 21L23 12 2.01 3 2 10l15 2-15 2z"/></svg>
          Submit My Quote Request
        </button>
        <p class="form-status" role="status" aria-live="polite"></p>

      </div>

      <aside class="quote__summary">
        <div class="quote__summary-head">
          <span class="quote__summary-icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M9 2a1 1 0 0 0-1 1v1H6a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-2V3a1 1 0 0 0-1-1H9zm0 2h6v2H9V4zM7.5 11h9v1.5h-9V11zm0 4h9v1.5h-9V15zm0-8h5v1.5h-5V7z"/></svg>
          </span>
          <div>
            <h3 class="quote__summary-title">Your Quote Summary</h3>
            <p class="quote__summary-sub">Updates live as you go</p>
          </div>
        </div>

        <div class="quote__summary-progress">
          <div class="quote__summary-progress-track">
            <div class="quote__summary-progress-bar" id="summary-progress-bar"></div>
          </div>
          <span class="quote__summary-progress-label" id="summary-progress-label">0 of 5 completed</span>
        </div>

        <div class="quote__summary-rows">
          <div class="quote__summary-row">
            <span class="quote__summary-label">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><rect x="3" y="3" width="8" height="8" rx="1.5"/><rect x="13" y="3" width="8" height="8" rx="1.5"/><rect x="3" y="13" width="8" height="8" rx="1.5"/><rect x="13" y="13" width="8" height="8" rx="1.5"/></svg>
              Service
            </span>
            <span class="quote__summary-value" id="summary-service">Not selected yet</span>
          </div>
          <div class="quote__summary-row">
            <span class="quote__summary-label">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M7 2h10l5 5v13a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2zm9 1.5V8h4.5L16 3.5zM8 13h8v1.5H8V13zm0 3.5h8V18H8v-1.5zM8 10h5v1.5H8V10z"/></svg>
              Project
            </span>
            <span class="quote__summary-value" id="summary-scope">Not described yet</span>
          </div>
          <div class="quote__summary-row">
            <span class="quote__summary-label">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
              Location
            </span>
            <span class="quote__summary-value" id="summary-location">Not entered yet</span>
          </div>
          <div class="quote__summary-row">
            <span class="quote__summary-label">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2a10 10 0 1 0 0 20 10 10 0 0 0 0-20zm.75 5v5.4l4.2 2.5-.75 1.27-5.2-3.1V7h1.75z"/></svg>
              Timeline
            </span>
            <span class="quote__summary-value" id="summary-timeline">Not selected yet</span>
          </div>
          <div class="quote__summary-row">
            <span class="quote__summary-label">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M12 1a1 1 0 0 1 1 1v1.06c2.51.34 4.5 1.85 4.5 3.94h-2c0-1.06-1.07-2-2.5-2.27V9.9c2.4.5 4.5 1.6 4.5 4.1 0 2.1-1.99 3.6-4.5 3.94V19a1 1 0 1 1-2 0v-1.06c-2.51-.34-4.5-1.85-4.5-3.94h2c0 1.06 1.07 2 2.5 2.27v-4.23c-2.4-.5-4.5-1.6-4.5-4.1 0-2.1 1.99-3.6 4.5-3.94V2a1 1 0 0 1 1-1z"/></svg>
              Budget
            </span>
            <span class="quote__summary-value" id="summary-budget">Not sure yet</span>
          </div>
        </div>

        <div class="quote__next-steps">
          <div class="quote__next-title">What happens next</div>
          <div class="quote__next-list">
            <div class="quote__next-item"><span>1</span> We review your request the same business day.</div>
            <div class="quote__next-item"><span>2</span> We call or email to confirm details &amp; arrange a site visit if needed.</div>
            <div class="quote__next-item"><span>3</span> You receive a clear, no-obligation written quote.</div>
          </div>
        </div>

        <div class="quote__summary-trust">
          <div class="quote__trust-item">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.2 4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4z"/></svg>
            100% Free
          </div>
          <div class="quote__trust-item">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.2 4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4z"/></svg>
            No Obligation
          </div>
          <div class="quote__trust-item">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.2 4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4z"/></svg>
            Same-Day Reply
          </div>
        </div>
      </aside>

    </form>
  </div>
</section>

<?php require_once 'includes/footer.php'; ?>
<?php require_once 'includes/scripts.php'; ?>
