<section class="section-quote">
    <div class="container">
        <div class="section-quote-wrap">
            <div class="quote-intro">
                <span class="eyebrow">Free, No-Obligation Quote</span>
                <h2>Tell us about your property</h2>
                <p class="lead">Share a few details about the job and we&rsquo;ll put together a quote that fits
                    your property and schedule.</p>

                <h3 class="steps-title">What happens next?</h3>
                <ol class="quote-steps">
                    <li>
                        <span class="step-num">1</span>
                        <div>
                            <h4>Send your request</h4>
                            <p>Tell us what you need, when you need it, and add photos if you have them.</p>
                        </div>
                    </li>
                    <li>
                        <span class="step-num">2</span>
                        <div>
                            <h4>We review &amp; get in touch</h4>
                            <p>We&rsquo;ll look over your details and contact you to ask any questions or arrange a
                                site visit if needed.</p>
                        </div>
                    </li>
                    <li>
                        <span class="step-num">3</span>
                        <div>
                            <h4>Receive your quote</h4>
                            <p>You&rsquo;ll get a clear quote for the work, with no obligation to go ahead.</p>
                        </div>
                    </li>
                </ol>

                <ul class="quote-contact">
                    <li>
                        <i class="fas fa-phone-alt"></i>
                        <a href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a>
                    </li>
                    <li>
                        <i class="fas fa-envelope"></i>
                        <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>
                    </li>
                    <li>
                        <i class="fas fa-clock"></i>
                        <span><?php echo $work_hrs; ?>, <?php echo $work_day; ?></span>
                    </li>
                </ul>

                <?php if($page == 'page-quote'){ ?>
                <div class="map">
                    <iframe src="<?= $map ?>" frameborder="0" loading="lazy" title="Service area map"></iframe>
                </div>
                <?php } ?>
            </div>

            <div class="quote-card">
                <form role="form" method="post" class="quote-form" data-quote="full" data-one-contact
                    enctype="multipart/form-data" action="https://formsubmit.co/<?php echo $email;?>">

                    <div class="form-step">
                        <h3 class="step-heading"><span>1</span> Your details</h3>
                        <div class="field-grid">
                            <div class="field">
                                <label for="first-name">First name</label>
                                <input type="text" id="first-name" name="First Name" class="form-input"
                                    autocomplete="given-name" required="" aria-required="true">
                            </div>
                            <div class="field">
                                <label for="last-name">Last name</label>
                                <input type="text" id="last-name" name="Last Name" class="form-input"
                                    autocomplete="family-name" required="" aria-required="true">
                            </div>
                            <div class="field">
                                <label for="email">Email</label>
                                <input type="email" id="email" name="email" class="form-input" autocomplete="email">
                            </div>
                            <div class="field">
                                <label for="phone">Phone</label>
                                <input type="tel" id="phone" name="phone" class="form-input" autocomplete="tel">
                            </div>
                            <p class="contact-hint field full">Phone or email &ndash; please give us at least one so we
                                can reply.</p>
                            <div class="field full">
                                <label for="suburb">Property suburb</label>
                                <input type="text" id="suburb" name="Property Suburb" class="form-input" required=""
                                    aria-required="true">
                            </div>
                        </div>
                    </div>

                    <div class="form-step">
                        <h3 class="step-heading"><span>2</span> About the job</h3>

                        <fieldset class="field">
                            <legend>Services required <small>Select all that apply</small></legend>
                            <div class="chip-group">
                                <label class="chip">
                                    <input type="checkbox" name="Services[]" value="Lawn Mowing">
                                    <span>Lawn Mowing</span>
                                </label>
                                <label class="chip">
                                    <input type="checkbox" name="Services[]" value="Acreage Maintenance">
                                    <span>Acreage Maintenance</span>
                                </label>
                                <label class="chip">
                                    <input type="checkbox" name="Services[]" value="Garden Maintenance">
                                    <span>Garden Maintenance</span>
                                </label>
                                <label class="chip">
                                    <input type="checkbox" name="Services[]" value="Landscaping">
                                    <span>Landscaping</span>
                                </label>
                                <label class="chip">
                                    <input type="checkbox" name="Services[]" value="Weed Management">
                                    <span>Weed Management</span>
                                </label>
                                <label class="chip">
                                    <input type="checkbox" name="Services[]" value="Lawn Health &amp; Renovation">
                                    <span>Lawn Health & Renovation</span>
                                </label>
                                <label class="chip">
                                    <input type="checkbox" name="Services[]" value="Turf Installation">
                                    <span>Turf Installation</span>
                                </label>
                                <label class="chip">
                                    <input type="checkbox" name="Services[]" value="Property Clean-Ups">
                                    <span>Property Clean-Ups</span>
                                </label>
                                <label class="chip">
                                    <input type="checkbox" name="Services[]" value="Exterior Maintenance">
                                    <span>Exterior Maintenance</span>
                                </label>
                            </div>
                        </fieldset>

                        <fieldset class="field">
                            <legend>One-off or ongoing?</legend>
                            <div class="segmented">
                                <label>
                                    <input type="radio" name="Service Type" value="One-off service" required="">
                                    <span><i class="fas fa-calendar-day"></i> One-off</span>
                                </label>
                                <label>
                                    <input type="radio" name="Service Type" value="Ongoing / regular service">
                                    <span><i class="fas fa-rotate"></i> Ongoing</span>
                                </label>
                                <label>
                                    <input type="radio" name="Service Type" value="Not sure yet">
                                    <span><i class="fas fa-circle-question"></i> Not sure</span>
                                </label>
                            </div>
                        </fieldset>

                        <div class="field-grid">
                            <div class="field full">
                                <label for="timing">Preferred timing</label>
                                <select id="timing" name="Preferred Timing" class="form-input" required=""
                                    aria-required="true">
                                    <option value="" selected disabled>Select timing</option>
                                    <option value="As soon as possible">As soon as possible</option>
                                    <option value="Within the next week">Within the next week</option>
                                    <option value="Within 2-4 weeks">Within 2&ndash;4 weeks</option>
                                    <option value="In 1-3 months">In 1&ndash;3 months</option>
                                    <option value="Flexible">I&rsquo;m flexible</option>
                                </select>
                            </div>
                            <div class="field full">
                                <label for="details">Other details <small>Optional</small></label>
                                <textarea id="details" name="services_required" class="form-input message"
                                    placeholder="Property size, access, specific jobs, preferred days, etc."></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="form-step">
                        <h3 class="step-heading"><span>3</span> Photos <small>Optional</small></h3>
                        <p class="step-hint">Photos help us quote accurately. Up to 3 images, 10MB total.</p>
                        <div class="file-inputs">
                            <input type="file" name="attachment" class="form-input file" accept="image/*"
                                aria-label="Photo 1">
                            <input type="file" name="attachment_2" class="form-input file" accept="image/*"
                                aria-label="Photo 2">
                            <input type="file" name="attachment_3" class="form-input file" accept="image/*"
                                aria-label="Photo 3">
                        </div>
                    </div>

                    <div class="form-submit">
                        <button type="submit" class="submit-btn">
                            Request My Quote <i class="fas fa-arrow-right"></i>
                        </button>
                        <p>No obligation. We&rsquo;ll review your request and be in touch.</p>
                        <p class="form-privacy"><i class="fas fa-lock"></i> We only use your details to reply to your
                            enquiry. Your message is sent to <?= $co ?> by email through our form provider, FormSubmit.
                        </p>
                    </div>

                    <input type="text" name="_honey" style="display:none">
                    <input type="hidden" name="_template" value="table">
                    <input type="hidden" name="_subject" value="New quote request (full form)">
                    <input type="hidden" name="_next" value="<?= $site_url ? $site_url . '/thanks' : '' ?>">
                </form>
            </div>
        </div>
    </div>
</section>