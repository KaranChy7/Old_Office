<div class="quote section">
    <div class="container">
        <div class="quote-wrapper">
            <div class="section-title">
                <h5>get a free quote</h5>
                <p>Free quotes across the Perth metro area — get in touch today.</p>
            </div>
            <form class="form" method="POST"
                action="https://api.surojd.com.np/api/email/submit/mrPfE8ePf6Wb1x7L6EXSF5GRuDax2a"
                enctype="multipart/form-data">

                <div class="form-group ">
                    <label for="firstName">full name</label>
                    <input id="firstName" type="text" class="form-input" placeholder="First Name" name="First Name">
                </div>
                <!-- <div class="form-group half-width">
                    <label for="lastName">last name</label>
                    <input id="lastName" type="text" class="form-input" placeholder="Last Name" name="Last Name">
                </div> -->
                <div class="form-group ">
                    <label for="phoneNo">phone</label>
                    <input id="phoneNo" type="phone" class="form-input" placeholder="Phone" name="Phone">
                </div>
                <div class="form-group ">
                    <label for="emailName">email</label>
                    <input id="emailName" type="email" class="form-input" placeholder="Email" name="Email">
                </div>
                <?php if ($page == 'quote') { ?>
                <div class="form-group">
                    <label for="selectOption">select an option</label>
                    <select name="Option Select" id="selectOption" class="form-input">
                        <option value="" selected disabled>Select Any One Services</option>
                        <option value="Interior Painting">Interior Painting</option>
                        <option value="Exterior Painting">Exterior Painting</option>
                        <option value="Residential Painting">Residential Painting</option>
                        <option value="Commercial Painting">Commercial Painting</option>
                        <option value="Feature Walls">Feature Walls</option>
                        <option value="Spray Painting">Spray Painting</option>
                        <option value="Maintenance Painting & Repaints">Maintenance Painting & Repaints</option>
                        <option value="Renovations & New Work">Renovations & New Work</option>
                        <option value="Ceilings & Walls">Ceilings & Walls</option>
                        <option value="Doors, Frames, Skirting Boards & Trims">Doors, Frames, Skirting Boards & Trims
                        </option>
                        <option value="Surface Preparation, Patching & Repairs">Surface Preparation, Patching & Repairs
                        </option>
                        <option value="General Painting & Decorating Services">General Painting & Decorating Services
                        </option>
                    </select>
                </div>
                <?php } ?>
                <div class="form-group">
                    <label for="fullMessage">message</label>
                    <textarea name="Message" id="fullMessage" class="form-input message"
                        placeholder="Type Your Message.." rows="3"></textarea>
                </div>
                <div class="form-group button-group">
                    <button class="btn btn-primary btn-custom-mid" type="submit">submit</button>
                </div>

                <input name="to" type="hidden" value="<?= $email; ?>">
                <input name="successMessage" type="hidden" value="Your Message Has Been Delivered.">
            </form>
        </div>
    </div>
</div>