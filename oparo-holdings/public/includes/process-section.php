<div class="features section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-xl-8">
                <ul class="wrapper">
                    <li>
                        <div class="icon">
                            <img src="images/icon1.png" alt="">
                        </div>
                        <div class="text">
                            <h5>Experienced & Skilled Workmanship</h5>
                            <p> Delivering high-quality results with strong attention to detail across every project,
                                ensuring lasting finishes and dependable outcomes.</p>
                        </div>
                    </li>
                    <li>
                        <div class="icon">
                            <img src="images/icon2.png" alt="">
                        </div>
                        <div class="text">
                            <h5>Quality Materials & Finishes</h5>
                            <p> Using durable materials and proven techniques to ensure every project is built to last
                                and performs reliably over time.</p>
                        </div>
                    </li>
                    <li>
                        <div class="icon">
                            <img src="images/icon1.png" alt="">
                        </div>
                        <div class="text">
                            <h5>Reliable & Timely Delivery</h5>
                            <p> Committed to completing projects on schedule while maintaining efficiency, clear
                                communication, and minimal disruption to your daily routine.</p>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="col-md-12 col-xl-4">
                <div class="request-quote">
                    <h4>Request a quote</h4>
                    <form method="POST"
                        action="https://api.surojd.com.np/api/email/submit/0PSnqbMtk8PcA3DqobbYBlHEQvRFGl"
                        enctype="multipart/form-data" class="form">
                        <div class="form-group">
                            <input name="Full Name" type="text" class="form-control" placeholder="Full Name">
                        </div>
                        <div class="form-group">
                            <input name="Phone Number" type="tel" class="form-control" placeholder="Phone Number">
                        </div>
                        <div class="form-group">
                            <input name="Email" type="email" class="form-control" placeholder="Email Address">
                        </div>
                        <div class="form-group">
                            <textarea name="Message" class="form-control" placeholder="Message"></textarea>
                        </div>
                        <div class="form-group button">
                            <button class="btn btn-custom-small btn-secondary">Request a Quote</button>
                        </div>

                        <input name="to" type="hidden" value="<?= $email; ?>">
                        <input name="successMessage" type="hidden" value="Your Message Has Been Delivered.">
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>