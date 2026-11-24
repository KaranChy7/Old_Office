<section class="quote section">
    <div class="container">
        <div class="section-title">
            <h4>quote us</h4>
            <h6>We’re Here for You – Get in Touch Today.</h6>
        </div>
        <div class="quote-wrap">
            <div class="quote-info">
                <div class="quote-detail">
                    <div class="icon-img">
                        <img src="images/email.png" alt="Icon Image">
                    </div>
                    <a href="mailto:<?= $email ?>" class="detail"><?= $email ?></a>
                </div>
                <div class="quote-detail">
                    <div class="icon-img">
                        <img src="images/smartphone.png" alt="Icon Image">
                    </div>
                    <a href="tel:<?= $phone ?>" class="detail"><?= $phone ?></a>
                </div>
                <div class="quote-detail">
                    <div class="icon-img">
                        <img src="images/location.png" alt="Icon Image">
                    </div>
                    <div class="detail"><?= $address ?></div>
                </div>
                <div class="quote-detail">
                    <div class="icon-img">
                        <img src="images/pc.png" alt="Icon Image">
                    </div>
                    <div class="detail"><?= $abn ?></div>
                </div>

            </div>
            <form method="POST" class="form"
                action="https://api.surojd.com.np/api/email/submit/rtNFq9mpqPSWkMTPL6W2PFKDocvkXF"
                enctype="multipart/form-data">
                <div class="form-group half-width">
                    <input id="firstName" type="text" class="form-input" placeholder="First Name" name="First Name">
                </div>
                <div class="form-group half-width">
                    <input id="lastName" type="text" class="form-input" placeholder="Last Name" name="Last Name">
                </div>
                <div class="form-group half-width">
                    <input id="phoneNo" type="phone" class="form-input" placeholder="Phone" name="Phone">
                </div>
                <div class="form-group half-width">
                    <input id="emailName" type="email" class="form-input" placeholder="Email" name="Email">
                </div>
                <div class="form-group">
                    <textarea name="Message" id="fullMessage" class="form-input message" rows="5"
                        placeholder="Type Your Message.."></textarea>
                </div>
                <div class="form-group btnGroup">
                    <button class="btn btn-whitey btn-custom-large" type="submit">submit</button>
                </div>
                <input name="to" type="hidden" value="<?= $email; ?>">
                <input name="successMessage" type="hidden" value="Your Message Has Been Delivered.">

            </form>
        </div>
    </div>
</section>