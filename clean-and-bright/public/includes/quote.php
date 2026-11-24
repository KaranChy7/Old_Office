<div class="quote section">
    <div class="container">
        <div class="main-title">
            <h4>Ready to Get Started?</h4>
            <p>We are ready to work on a job of any complexity, whether it's commercial or residential.</p>
        </div>
        <div class="quote-wrapper">
            <div class="form-quote">
                <form method="POST" class="form"
                    action="https://api.surojd.com.np/api/email/submit/VzuBN8n9wre0EUGtx1kBf2F2PmfCAf"
                    enctype="multipart/form-data">
                    <div class="form-group half-width">
                        <input id="firstName" type="text" class="form-input" placeholder="your Name" name="First Name">
                    </div>
                    <div class="form-group half-width">
                        <input id="emailName" type="email" class="form-input" placeholder="Email" name="Email">
                    </div>
                    <div class="form-group half-width">
                        <input id="reason" type="text" class="form-input" placeholder="Reason for Contacting"
                            name="Reason for Contacting">
                    </div>
                    <div class="form-group half-width">
                        <input id="phoneNo" type="tel" class="form-input" placeholder="Phone" name="Phone">
                    </div>

                    <?php if ($page == 'quote') { ?>
                        <div class="form-group">
                            <select name="Option Select" id="selectOption" class="form-input">
                                <option value="" selected disabled>Select Any One Services</option>
                                <option value="Domestic Air Conditioning">Domestic Air Conditioning</option>
                                <option value="Commercial Air Conditioning">Commercial Air Conditioning</option>
                                <option value="Ducted Air Conditioning">Ducted Air Conditioning</option>
                                <option value="Cool Room & Freezer Refrigeration">Cool Room &amp; Freezer Refrigeration</option>
                                <option value="Evaporative Cooling">Evaporative Cooling</option>
                                <option value="Gas Reclaim & Decommissioning">Gas Reclaim &amp; Decommissioning</option>
                            </select>
                        </div>
                    <?php } ?>
                    <div class="form-group">
                        <textarea name="Message" id="fullMessage" class="form-input message" placeholder="Message"
                            rows="5"></textarea>
                    </div>
                    <div class="form-group button-group">
                        <button class="btn btn-primary btn-custom-mid" type="submit">
                            submit
                        </button>
                    </div>

                    <input name="to" type="hidden" value="<?= $email; ?>">
                    <input name="successMessage" type="hidden" value="Your Message Has Been Delivered.">
                </form>
            </div>
        </div>
    </div>
</div>