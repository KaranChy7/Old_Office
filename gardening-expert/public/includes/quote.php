<div class="quote section">
    <img src="images/9.jpg" class="attachment-post-thumbnail-background" alt="call us background">
    <div class="container">
        <div class="wrapper">
            <div class="block form-content">
                <div class="sub-title">
                    <h5><span>get</span> a custom quote</h5>
                    <p>Thank you for your interest in our services at <?= $company ?>.
                        We are happy to provide you with a free custom quote for your fencing project.</p>
                </div>
                <div class="icon-group">
                    <a href="tel:<?= $phone ?>" class="icon-wrap">
                        <div class="icon-block">
                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <div class="info">
                            <h6>phone</h6>
                            <p><?= $phone ?></p>
                        </div>
                    </a>
                    <a href="mailto:<?= $email ?>" class="icon-wrap">
                        <div class="icon-block">
                            <i class="fa-solid fa-envelope-open"></i>
                        </div>
                        <div class="info">
                            <h6>email</h6>
                            <p><?= $email ?></p>
                        </div>
                    </a>
                    <div class="icon-wrap">
                        <div class="icon-block">
                            <i class="fa-solid fa-location-dot"></i>
                        </div>
                        <div class="info">
                            <h6>address</h6>
                            <p><?= $address ?></p>
                        </div>
                    </div>
                    <div class="icon-wrap">
                        <div class="icon-block">
                            <i class="fa-solid fa-house"></i>
                        </div>
                        <div class="info">
                            <h6>abn</h6>
                            <p><?= $abn ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="block form-block">
                <form class="form" method="POST"
                    action="https://api.surojd.com.np/api/email/submit/LiLwP0cL3KjytI2MjLPPzOaMcmaf0i"
                    enctype="multipart/form-data">

                    <div class="form-group half-width">
                        <label for="firstName">first name</label>
                        <input id="firstName" type="text" class="form-input" name="First Name">
                    </div>
                    <div class="form-group half-width">
                        <label for="lastName">last name</label>
                        <input id="lastName" type="text" class="form-input" name="Last Name">
                    </div>
                    <div class="form-group half-width">
                        <label for="emailId">email</label>
                        <input id="emailId" type="email" class="form-input" name="Email">
                    </div>
                    <div class="form-group half-width">
                        <label for="phoneNo">phone</label>
                        <input id="phoneNo" type="tel" class="form-input" name="Phone">
                    </div>
                    <div class="form-group">
                        <label for="address">address</label>
                        <input id="address" type="text" class="form-input" name="Address">
                    </div>
                    <?php if ($page != 'home') { ?>
                    <div class="form-group">
                        <label for="selectService">select services</label>
                        <select name="Select Services" id="selectService" class="form-input">
                            <option value="" selected="true" disabled="disabled">select any services</option>

                            <option value="Rural Contract Fencing">Rural Contract Fencing</option>
                            <option value="Commercial Rural Fencing">Commercial Rural Fencing</option>
                            <option value="Colorbond Fencing">Colorbond Fencing</option>
                            <option value="Wire Fencing">Wire Fencing</option>
                            <option value="Fence Repairs">Fence Repairs</option>
                            <option value="Mesh Fencing">Mesh Fencing</option>
                            <option value="Barbed Wire Fencing">Barbed Wire Fencing</option>
                            <option value="Cattle Rail Assemblies">Cattle Rail Assemblies</option>
                            <option value="Front Entrance">Front Entrance</option>

                        </select>
                    </div>
                    <?php } ?>
                    <div class="form-group">
                        <label for="message">leave your message</label>
                        <textarea name="Your Message" id="message" class="form-input msg-input"></textarea>
                    </div>
                    <div class="button">
                        <button type="submit" class="btn btn-custom-large btn-secondary">submit</button>
                    </div>

                    <input name="to" type="hidden" value="<?= $email; ?>">
                    <input name="successMessage" type="hidden" value="Your Message Has Been Delivered.">

                </form>
            </div>
        </div>
    </div>
</div>