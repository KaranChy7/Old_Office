<div class="quote">
    <div class="container">
        <div class="quote-wrapper">
            <form method="POST" class="form"
                action="https://api.surojd.com.np/api/email/submit/I8gWNA5oExH2yYkDzos5TfDUYOfj0v"
                enctype="multipart/form-data">
                <div class="block-title">
                    <h2>Request Quote</h2>
                </div>
                <div class="form-group">
                    <input name="Full Name" type="text" class="form-input" placeholder="Name">
                </div>
                <div class="form-group">
                    <input name="Phone No" type="tel" class="form-input" placeholder="Phone No"
                        pattern="^([0-9]{3})?([ ]{1})?([0-9]{3})?([ ]{1})?([0-9]{4})$" minlength="10">
                </div>
                <div class="form-group">
                    <input name="Email Address" type="email" class="form-input" placeholder="Email"
                        pattern="^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$">
                </div>
                <div class="form-group">
                    <input name="Address" type="text" class="form-input" placeholder="Address">
                </div>
                <?php if ($page == 'quote') { ?>
                <div class="form-group">
                    <select name="Service" id="" class="form-input">
                        <option value="" selected disabled>Select Any Services</option>
                        <option value="Garden Maintenance">Garden Maintenance</option>
                        <option value="Landscaping & Gardening">Landscaping & Gardening</option>
                        <option value="Rubbish Removal">Rubbish Removal</option>
                        <option value="Lawn Mowing">Lawn Mowing</option>
                    </select>
                </div>
                <?php } ?>
                <div class="form-group">
                    <textarea name="Clients Message" class="form-input message" placeholder="Message"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-secondary btn-custom-large">Submit</button>
                </div>
                <input name="to" type="hidden" value="<?= $email; ?>">
                <input name="successMessage" type="hidden" value="Your Message Has Been Delivered.">
            </form>
            <div class="quote-image">
                <img src="images/quote-img.jpg" alt="">
            </div>
        </div>

    </div>
</div>