<?php
$page = 'contact_us';
include 'includes/header.php'; 
?>


<div class="page-contact">
    <div class="container">
        <div class="contact section ">
            <div class="information">
                <div class="section-title">
                    <h3>Contact ACB</h3>
                    <h6>Thank you for visiting</h6>
                    <p> If you would like to discuss an upcoming project, request a quote, or ask any questions, please
                        get in touch using the details below. We provide professional advice, clear communication, and
                        quality workmanship on every project.</p>
                </div>
                <div class="details">
                    <h6><?= $company; ?></h6>
                    <div class="contact">
                        <a href="<?= $phone; ?>"><i class="fa-solid fa-phone"> </i><span> +61 447 137 382</span> </a>
                        <a href="<?= $email2; ?>"><i class="fa-solid fa-envelope"></i> <span>info@acbuiltgroup.com.au
                            </span></a>
                    </div>
                </div>
                <div class="container">
                    <div class="contact-wrapper">
                        <div class="contact-form">
                            <div class="form-block">
                                <form method="POST" class="form"
                                    action="https://api.surojd.com.np/api/email/submit/iB7AnEtqUsr42FnwbPNMj7IpeNgvuP"
                                    enctype="multipart/form-data">
                                    <div class="form-group half-width">
                                        <label for="name">Full Name</label>
                                        <input type="text" class="form-input" placeholder="Full Name"
                                            name="Full Name" />
                                    </div>
                                    <div class="form-group half-width">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-input" placeholder="Email" name="Email" />
                                    </div>
                                    <div class="form-group   ">
                                        <label for="phone">Phone</label>
                                        <input type="tel" class="form-input" placeholder="Phone" name="Phone Number" />
                                    </div>
                                    <div class="form-group  ">
                                        <label for="address">Address</label>
                                        <input type="text" class="form-input" placeholder="Address" name="Address" />
                                    </div>
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
                                    <div class="form-group">
                                        <label for="message">Message</label>
                                        <textarea name="message" class="form-input" rows="3" placeholder="Message"
                                            name="Message"></textarea>
                                    </div>

                                    <div class="form-group">
                                        <button class="btn btn-custom-large  btn-secondary" type="submit"
                                            value="Submit now">Submit
                                            Now</button>
                                    </div>
                                    <input name="to" type="hidden" value="<?= $email; ?>">
                                    <input name="successMessage" type="hidden" value="Your Message Has Been Delivered.">
                                </form>

                            </div>
                            <div class="google-map">
                                <iframe src="<?= $map; ?>" width="100%" height="400" frameborder="0" style="border:0;"
                                    allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                            </div>
                        </div>
                        <div class="work-wrapper">
                            <div class="working-hours">
                                <h6>Opening Hours </h6>
                                <div class="working-row">
                                    <div class="working-day">Monday - Friday</div>
                                    <div class="working-time">8:30 am - 5:00 pm</div>
                                </div>
                                <div class="working-row">
                                    <div class="working-day">Saturday</div>
                                    <div class="working-time">Appointment</div>
                                </div>
                                <div class="working-row">
                                    <div class="working-day">Sunday</div>
                                    <div class="working-time">Closed</div>
                                </div>
                            </div>

                            <div class="google-map">
                                <iframe src="<?= $map; ?>" width="100%" height="400" frameborder="0" style="border:0;"
                                    allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'includes/footer.php'; ?>