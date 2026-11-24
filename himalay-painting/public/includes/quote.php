<div class="quote section  ">
    <div class="container">
        <div class="wrapper">
            <div class="quote-content">
                <div class="main-title">
                    <h4>Ready For A <span>Free Quote</span>?</h4>
                </div>
                <div class="content">
                    <p>Tell us what needs cleaning or tidying, and we will send a free, no-obligation quote with a
                        clear price and a time that suits you.
                    </p>
                    <p>
                        Photos of the driveway, roof, windows, sign or garden help us price the job faster and more
                        accurately.
                    </p>
                    <p>
                        Prefer to talk? Call <?= $phone; ?> between <?= $call_hrs; ?>, seven days a week.
                    </p>
                </div>
            </div>
            <div class="form-quote">
                <form method="POST" class="form"
                    action="https://api.surojd.com.np/api/email/submit/UakpdFDvgXOWzYpDtKghMwVhbHAWF3"
                    enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="fullName">Full name<span></span></label>
                        <input id="fullName" type="text" class="form-input" name="Full Name">
                    </div>

                    <div class="form-group">
                        <label for="emailName">email<span></span></label>
                        <input id="emailName" type="email" class="form-input" name="Email">
                    </div>
                    <div class="form-group">
                        <label for="phoneNo">phone number<span></span></label>
                        <input id="phoneNo" type="phone" class="form-input" name="Phone">
                    </div>
                    <?php if ($page == 'estimate') { ?>
                    <div class="form-group">
                        <label for="addresses">address<span></span></label>
                        <input id="addresses" type="text" class="form-input" name="Address" required="">
                    </div>
                    <div class="form-group">
                        <label for="reason">which service do you need<span></span>?</label>
                        <select name="Option Select" id="selectOption" class="form-input">
                            <option value="" disabled selected></option>

                            <option value="Pressure Cleaning">Pressure Cleaning</option>
                            <option value="Window Cleaning">Window Cleaning</option>
                            <option value="Roof and Gutter Cleaning">Roof and Gutter Cleaning</option>
                            <option value="Signage Cleaning">Signage Cleaning</option>
                            <option value="Landscaping">Landscaping</option>
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