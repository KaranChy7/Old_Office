<div class="quote section">
    <div class="container">
        <div class="quote-wrapper">
            <div class="image-block">
                <iframe src="<?= $map ?>" frameborder="0"></iframe>
            </div>
            <div class="form-block">
                <div class="main-title">
                    <h5>get a free quote</h5>
                </div>
                <form method="POST" class="form" action="https://api.surojd.com.np/api/email/submit/"
                    enctype="multipart/form-data">
                    <div class="form-group">
                        <input name="Full Name" type="text" class="form-input" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <input name="Address" type="text" class="form-input" placeholder="Address">
                    </div>
                    <div class="form-group">
                        <input name="Email Address" type="text" class="form-input" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input name="Phone No" type="text" class="form-input" placeholder="Phone">
                    </div>
                    <?php if($page == 'quote'){?>
                    <div class="form-group">
                        <select name="Select Service" id="" class="form-input">
                            <option selected disabled>Select any Service</option>
                            <option value="Computer Diagnostics & Scanning">Computer Diagnostics & Scanning</option>
                            <option value="Battery Testing & Replacement">Battery Testing & Replacement</option>
                            <option value="Pre-Purchase Inspections (PPI)">Pre-Purchase Inspections (PPI)</option>
                            <option value="Spark Plug & Ignition Coil Replacement">Spark Plug & Ignition Coil
                                Replacement</option>
                            <option value="Drive Belt (Serpentine Belt) Replacement">Drive Belt (Serpentine Belt)
                                Replacement</option>
                            <option value="Minor Auto Electrical Repairs (Light Bulbs/Fuses)">Minor Auto Electrical
                                Repairs (Light Bulbs/Fuses)
                            </option>
                            <option value="Wiper Blade Replacement">Wiper Blade Replacement</option>
                            <option value="Headlight Restoration (UV Damage)">Headlight Restoration (UV Damage)</option>
                            <option value="Fluid Flushes (Coolant/Brake Fluid)">Fluid Flushes (Coolant/Brake Fluid)
                            </option>
                            <option value="Mass Air Flow (MAF) Sensor & Throttle Body Cleaning">Mass Air Flow (MAF)
                                Sensor & Throttle Body Cleaning</option>
                            <option value="Tail Light and Indicator Lens Replacement/Seal">Tail Light and Indicator Lens
                                Replacement/Seal</option>
                            <option value="Engine Mount Inspection and Replacement (Minor mounts)">Engine Mount
                                Inspection and Replacement (Minor mounts)</option>
                        </select>
                    </div>
                    <?php } ?>
                    <div class="form-group">
                        <textarea name="Your Message" rows="5" class="form-input"
                            placeholder="Your message.."></textarea>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary btn-custom-large">Submit</button>
                    </div>

                    <input name="to" type="hidden" value="<?= $email; ?>">
                    <input name="successMessage" type="hidden" value="Your Message Has Been Delivered.">
                </form>
            </div>
        </div>
    </div>
</div>