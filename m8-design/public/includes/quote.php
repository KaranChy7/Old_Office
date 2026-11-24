<div class="quote">
    <div class="container">
        <div class="quote-wrapper">
            <div class="quote-content">
                <div class="icon-box">
                    <i class="fa-solid fa-comment"></i>
                </div>
                <div class="content">
                    <h4>Talk To Us</h4>
                    <p>Please leave your enquiry or message below and we will be in touch with you shortly.</p>
                </div>
            </div>
            <div class="form-quote">
                <form method="POST" class="form"
                    action="https://api.surojd.com.np/api/email/submit/iB7AnEtqUsr42FnwbPNMj7IpeNgvuP"
                    enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="fullName">name</label>
                        <input id="fullName" type="text" class="form-input" placeholder="your Name" name="Full Name">
                    </div>
                    <div class="form-group">
                        <label for="emailName">email</label>
                        <input id="emailName" type="email" class="form-input" placeholder="Email" name="Email">
                    </div>
                    <div class="form-group">
                        <label for="phoneNo">phone</label>
                        <input id="phoneNo" type="phone" class="form-input" placeholder="Phone" name="Phone">
                    </div>
                    <?php if ($page == 'quote') { ?>
                    <div class="form-group">
                        <label for="addresses">address</label>
                        <input id="addresses" type="text" class="form-input" placeholder="Address" name="Address"
                            required="">
                    </div>
                    <?php } ?>
                    <div class="form-group">
                        <label for="reason">which service do you need?</label>
                        <select name="Option Select" id="selectOption" class="form-input">
                            <option value="" selected disabled>Select Any One Services</option>

                            <option value="Carpenters">Carpenters</option>
                            <option value="Renovations">Renovations</option>
                            <option value="Formwork">Formwork</option>
                            <option value="Framing">Framing</option>
                            <option value="Flooring ">Flooring </option>
                            <option value="Timber Stairs">Timber Stairs</option>
                            <option value="Decking">Decking</option>
                            <option value="Pergolas">Pergolas</option>
                            <option value="Gazebos">Gazebos</option>
                            <option value="Cladding">Cladding</option>
                            <option value="Fencing">Fencing</option>
                            <option value="Joinery ">Joinery </option>
                            <option value=" Media Wall  "> Media Wall </option>
                            <option value="Windows">Windows</option>
                            <option value="Doors">Doors</option>
                            <option value="Architraves">Architraves</option>
                            <option value="Skirting ">Skirting </option>
                            <option value="Odd Jobs">Odd Jobs</option>
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