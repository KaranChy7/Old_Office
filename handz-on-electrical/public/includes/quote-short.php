<?php
     
    $quote_slot = isset($quote_slot) ? $quote_slot : '';
    $qid = $quote_slot ? 'q-' . $quote_slot . '-' : 'q-';
?>
<section class="section-quote quote-short<?= $quote_slot ? ' quote-slot-' . $quote_slot : '' ?>">
    <div class="container">
        <div class="section-quote-wrap">
            <div class="quote-intro">
                <span class="eyebrow">Free, No-Obligation Quote</span>
                <h2>Get a quick quote</h2>
                <p class="lead">Tell us what you need and we&rsquo;ll review your request, then get in touch to
                    arrange your quote.</p>

                <ul class="quote-contact">
                    <li>
                        <i class="fas fa-phone-alt"></i>
                        <a href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a>
                    </li>
                    <li>
                        <i class="fas fa-clock"></i>
                        <span><?php echo $work_hrs; ?> ( Mon - Fri )</span>
                    </li>
                    <li>
                        <i class="fas fa-clock"></i>
                        <span>Saturday: 5 am – 1 pm </span>

                    </li>
                    <li>
                        <i class="fas fa-clock"></i>

                        <span>Sunday Closed </span>
                    </li>
                </ul>
            </div>

            <div class="quote-card">
                <form role="form" method="post" class="quote-form" data-quote="short" data-one-contact
                    action="https://formsubmit.co/<?php echo $email;?>">
                    <div class="field-grid">
                        <div class="field">
                            <label for="<?= $qid ?>name">Full name</label>
                            <input type="text" id="<?= $qid ?>name" name="Full Name" class="form-input"
                                autocomplete="name" required="" aria-required="true">
                        </div>
                        <div class="field">
                            <label for="<?= $qid ?>phone">Phone</label>
                            <input type="tel" id="<?= $qid ?>phone" name="phone" class="form-input" autocomplete="tel">
                        </div>
                        <div class="field">
                            <label for="<?= $qid ?>email">Email</label>
                            <input type="email" id="<?= $qid ?>email" name="email" class="form-input"
                                autocomplete="email">
                        </div>
                        <div class="field">
                            <label for="<?= $qid ?>suburb">Property suburb</label>
                            <input type="text" id="<?= $qid ?>suburb" name="Property Suburb" class="form-input"
                                required="" aria-required="true">
                        </div>
                    </div>
                    <p class="contact-hint">Phone or email &ndash; please give us at least one so we can reply.</p>

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
                                <span>Lawn Health &amp; Renovation</span>
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

                    <div class="field-grid">
                        <div class="field">
                            <label for="<?= $qid ?>type">One-off or ongoing?</label>
                            <select id="<?= $qid ?>type" name="Service Type" class="form-input" required=""
                                aria-required="true">
                                <option value="" selected disabled>Select one</option>
                                <option value="One-off service">One-off service</option>
                                <option value="Ongoing / regular service">Ongoing / regular service</option>
                                <option value="Not sure yet">Not sure yet</option>
                            </select>
                        </div>
                        <div class="field">
                            <label for="<?= $qid ?>timing">Preferred timing</label>
                            <select id="<?= $qid ?>timing" name="Preferred Timing" class="form-input" required=""
                                aria-required="true">
                                <option value="" selected disabled>Select timing</option>
                                <option value="As soon as possible">As soon as possible</option>
                                <option value="Within the next week">Within the next week</option>
                                <option value="Within 2-4 weeks">Within 2&ndash;4 weeks</option>
                                <option value="In 1-3 months">In 1&ndash;3 months</option>
                                <option value="Flexible">I&rsquo;m flexible</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-submit">
                        <button type="submit" class="submit-btn">
                            Request My Quote <i class="fas fa-arrow-right"></i>
                        </button>
                        <p>Want to add photos or more details? <a href="page-quote">Use our full quote form</a> &ndash;
                            what you&rsquo;ve entered comes with you.</p>
                        <p class="form-privacy"><i class="fas fa-lock"></i> We only use your details to reply to your
                            enquiry. Your message is sent to <?= $co ?> by email through our form provider, FormSubmit.
                        </p>
                    </div>

                    <input type="text" name="_honey" style="display:none">
                    <input type="hidden" name="_template" value="table">
                    <input type="hidden" name="_subject" value="New quick quote request">
                    <input type="hidden" name="_next" value="<?= $site_url ? $site_url . '/thanks' : '' ?>">
                </form>
            </div>
        </div>
    </div>
</section>