<div class="quote section ">
    <div class="container">
        <div class="wrapper">
            <div class="quote-content">
                <div class="main-title">
                    <h4>Ready For A Free Estimate ?</h4>
                </div>
                <div class="content">
                    <p>We offer complimentary, no-obligation quotes and guarantee your personal information will remain
                        private and won’t be shared with anyone without your approval.</p>
                    <p>Our focus is to contact you only about your roofing estimate and to provide exceptional
                        service—delivered on time, every time.</p>
                    <p>Just fill out the form, and a member of the Parkinson Roofing team will get in touch with you
                        shortly.</p>
                </div>
            </div>
            <div class="form-quote">
                <form method="POST" class="form"
                    action="https://api.surojd.com.np/api/email/submit/S035W4UgzO46DsosIirbXTnFYYgbA1"
                    enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="firstName">first name<span></span></label>
                        <input id="firstName" type="text" class="form-input" name="First Name">
                    </div>
                    <div class="form-group">
                        <label for="lastName">Last name<span></span></label>
                        <input id="lastName" type="text" class="form-input" name="Last Name">
                    </div>
                    <div class="form-group">
                        <label for="emailName">email<span></span></label>
                        <input id="emailName" type="email" class="form-input" name="Email">
                    </div>
                    <div class="form-group">
                        <label for="phoneNo">phone number<span></span></label>
                        <input id="phoneNo" type="phone" class="form-input" name="Phone">
                    </div>
                    <?php if ($page == 'quote') { ?>
                    <div class="form-group">
                        <label for="addresses">address<span></span></label>
                        <input id="addresses" type="text" class="form-input" name="Address" required="">
                    </div>
                    <div class="form-group">
                        <label for="reason">which service do you need<span></span>?</label>
                        <select name="Option Select" id="selectOption" class="form-input">
                            <option value="" disabled selected></option>

                            <option value="Roof Restoration">Roof Restoration</option>
                            <option value="Roof Repairs">Roof Repairs</option>
                            <option value="Roof Maintenance ">Roof Maintenance </option>
                            <option value="Gutter Cleaning">Gutter Cleaning</option>
                            <option value="Roof Plumbing">Roof Plumbing</option>
                            <option value="Ridgecrest Roofing">Ridgecrest Roofing</option>
                            <option value="Bird Roofing Solutions">Bird Roofing Solutions</option>
                            <option value="General Maintenance">General Maintenance</option>

                        </select>
                    </div>
                    <?php } ?>

                    <div class="form-group">
                        <label for="Msg">Your Message<span></span></label>
                        <textarea id="Msg" name="Message" id="fullMessage" class="form-input message"
                            rows="4"></textarea>
                    </div>

                    <div class="button">
                        <button class="btn btn-primary btn-custom-large" type="submit">
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