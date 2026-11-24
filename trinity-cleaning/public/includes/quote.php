<div class="quote section">
    <div class="container">
        <div class="quote-wrapper">
            <div class="quote-content">
                <div class="icon-box">
                    <i class="fa-solid fa-comment"></i>
                </div>
                <div class="content">
                    <h4>From Concept to Completion – Let’s Get Started</h4>
                    <p>Kick off your project with a well-defined plan and expert guidance. We take the time to
                        understand your requirements, ensuring a seamless and dependable process from beginning to end.
                        With Quick Brick, you can count on a smooth experience and top-quality results every step of the
                        way.</p>
                </div>
            </div>
            <div class="form-quote">
                <form class="form" method="POST" action="https://api.surojd.com.np/api/email/submit/<?= $formAPI; ?>"
                    enctype="multipart/form-data">

                    <div class="form-group half-width">
                        <label for="fullName ">name</label>
                        <input id="fullName" type="text" class="form-input" placeholder="your Name" name="Full Name">
                    </div>
                    <div class="form-group half-width">
                        <label for="emailName">email</label>
                        <input id="emailName" type="email" class="form-input" placeholder="Email" name="Email">
                    </div>
                    <div class="form-group half-width">
                        <label for="phoneNo">phone</label>
                        <input id="phoneNo" type="phone" class="form-input" placeholder="Phone" name="Phone">
                    </div>
                    <div class="form-group half-width">
                        <label for="addresses">Address</label>
                        <input id="addresses" type="text" class="form-input" placeholder="Address" name="Address">
                    </div>
                    <!-- <?php if ($page == 'quote') { ?>

                    <?php } ?> -->
                    <div class="form-group">
                        <label for="reason">which service do you need?</label>
                        <select name="Option Select" id="selectOption" class="form-input">
                            <option value="" selected disabled>Select Any One Services</option>

                            <option value="Bricklaying">Bricklaying</option>
                            <option value="Brick piering">Brick piering</option>
                            <option value="Landscaping">Landscaping</option>
                            <option value="Paving">Paving</option>
                            <option value="Commercial & Residential">Commercial & Residential</option>
                        </select>
                    </div>
                    <?php if ($page == 'quote') { ?>
                    <div class="form-group">
                        <label for="Msg">Your Message</label>
                        <textarea id="Msg" name="Message" id="fullMessage" class="form-input message"
                            placeholder="Message" rows="4"></textarea>
                    </div>
                    <?php } ?>

                    <div class="form-group">
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