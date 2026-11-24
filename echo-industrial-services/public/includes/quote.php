<section class="quote-section">
    <div class="container">
        <div class="quote-wrap">
            <div class="form-block block">
                <div class="section-header">
                    <h6>We are here for you! How can we help?</h6>
                    <h4>get a quick quote</h4>
                </div>
                <form method="POST" class="form" action="https://api.surojd.com.np/api/email/submit/" enctype="multipart/form-data">                     
                    <div class="form-group">
                        <input type="text" name="Full Name" class="form-input" placeholder="Full Name" required />
                    </div>
                    <div class="form-group">
                        <input type="tel" name="Phone" class="form-input" placeholder="Phone Number" required
                            pattern="^([0-9]{3})?([ ]{1})?([0-9]{3})?([ ]{1})?([0-9]{4})$" minlength="10"
                            maxlength="12" />
                    </div>
                    <div class="form-group">
                        <input type="text" name="Email Address" class="form-input" placeholder="Email Address" required
                            pattern="^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$">
                    </div>
                    <?php if($page == 'quote') { ?>
                    <div class="form-group">
                        <input type="text" name="Subject" class="form-input" placeholder="Subject" required />
                    </div>
                    <div class="form-group">
                        <select name="Selected Services" class="form-input">
                            <option value="" selected disabled>Select Any Service</option>
                            <option value="Courier Services">Courier Services</option>
                            <option value="Local Removals">Local Removals</option>
                            <option value="Trailer Hire">Trailer Hire</option>
                            <option value="Truck Hire">Truck Hire</option>
                            <option value="Office Relocation">Office Relocation</option>
                            <option value="House Removals">House Removals</option>
                            <option value="Furniture Removal">Furniture Removal</option>                  
                            <option value="Residential Removals">Residential Removals</option>                  
                            <option value="Commercial Removals">Commercial Removals</option>                  
                        </select>
                    </div>
                    <?php } ?>
                    <div class="form-group">
                        <textarea name="message" class="form-input" placeholder="Message" rows="5" required></textarea>
                    </div>
                    <div class="button">
                        <button type="button" class="btn btn-custom-large btn-secondary">submit</button>
                    </div>
                    <input name="to" type="hidden" value="<?= $email; ?>">
                    <input name="successMessage" type="hidden" value="Your Message Has Been Delivered.">
                </form>
            </div>
            <div class="image-block block">
                <div class="image">
                    <img src="images/quote-image.png" alt="Quote Image">
                </div>
            </div>
        </div>
    </div>
</section>