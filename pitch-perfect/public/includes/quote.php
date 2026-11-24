<section class="quote <?= $page != 'home' ? 'section' : '' ;?> ">
    <div class="container">
        <div class="quote-wrapper">
            <div class="quote-block">
                <div class="form-block">
                    <div class="title">
                        <h5>Request a Free Quote</h5>
                        <p>Request your free quote today and see how we can bring your vision to life!</p>
                    </div>
                    <form action="https://formsubmit.co/<?= $email; ?>" method="POST" class="form">
                        <div class="form-set">
                            <input type="text" name="Full Name" placeholder="Full Name" class="form-input">
                        </div>
                        <div class="form-set">
                            <input type="phone" name="Phone Number" placeholder="Phone Number" class="form-input">
                        </div>
                        <div class="form-set">
                            <input type="email" name="Email Address" placeholder="Email Address" class="form-input">
                        </div>
                        <div class="form-set">
                            <input type="address" name="Suburb" placeholder="Suburb" class="form-input">
                        </div>
                        <div class="form-set full_width">
                            <textarea name="Message" rows="5" placeholder="How can we help you?"
                                class="form-input"></textarea>
                        </div>
                        <?php if ($page != 'home') { ?>
                            <div class="form-set full_width">
                                <label for="issue" class="check-title">Type of Services</label>
                                <div class="check-group">
                                    <div class="check-btn">
                                        <input type="checkbox" id="kitchen" name="Services" />
                                        <label for="kitchen">Kitchen Tiling</label>
                                    </div>
                                    <div class="check-btn">
                                        <input type="checkbox" id="bathroom" name="Services" />
                                        <label for="bathroom">Bathroom Tiling</label>
                                    </div>
                                    <div class="check-btn">
                                        <input type="checkbox" id="outdoor-paving" name="Services" />
                                        <label for="outdoor-paving">Outdoor Paving</label>
                                    </div>
                                    <div class="check-btn">
                                        <input type="checkbox" id="grouting-regrouting" name="Services" />
                                        <label for="grouting-regrouting">Grouting & Regrouting</label>
                                    </div>
                                    <div class="check-btn">
                                        <input type="checkbox" id="waterproof" name="Services" />
                                        <label for="waterproof">Waterproofing</label>
                                    </div>
                                    <div class="check-btn">
                                        <input type="checkbox" id="caulking" name="Services" />
                                        <label for="caulking">Caulking</label>
                                    </div>
                                    <div class="check-btn">
                                        <input type="checkbox" id="wall" name="Services" />
                                        <label for="wall">Wall Tiling</label>
                                    </div>
                                    <div class="check-btn">
                                        <input type="checkbox" id="floor" name="Services" />
                                        <label for="floor">Floor Tiling</label>
                                    </div>
                                    <div class="check-btn">
                                        <input type="checkbox" id="stone" name="Services" />
                                        <label for="stone">Stone Tiling</label>
                                    </div>
                                    <div class="check-btn">
                                        <input type="checkbox" id="ceramic" name="Services" />
                                        <label for="ceramic">Ceramic Tiling</label>
                                    </div>
                                    <div class="check-btn">
                                        <input type="checkbox" id="mosaic" name="Services" />
                                        <label for="mosaic">Mosaic Tiling</label>
                                    </div>
                                    <div class="check-btn">
                                        <input type="checkbox" id="residential-commercial" name="Services" />
                                        <label for="residential-commercial">Residential & Commercial Tiling</label>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                        <div class="form-set button">
                            <button type="submit" class="btn btn-custom btn-secondary"> Submit Now</button>
                        </div>
                        <input type="hidden" name="_subject" value="New Quote Submission!">
                        <input type="text" name="_honey" style="display:none">
                        <input type="hidden" name="_template" value="table">
                        <input type="hidden" name="_next" value="<?= $thanks; ?>">
                    </form>
                </div>

            </div>
            <!-- <div class="quote-image">
                <img src="images/quote-img.png" alt="">
            </div> -->
        </div>
    </div>
</section>