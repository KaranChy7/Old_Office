<?php
$page = 'estimate';
include 'includes/header.php';
?>


<!-- Breadcrumb starting point -->
<div class="breadcrumb">
    <div class="container-fluid">
        <div class="breadcrumb-wrapper">
            <h5>Estimate</h5>
            <!-- <ul class="bread-row">
                <li class="bread-list"><a href="./" class="bread-link">Home</a></li>
                <li class="bread-list">Estimate</li>
            </ul> -->
        </div>
        <div class="top-button">
            <a href="quote" class="btn btn-custom-medium btn-secondary">Get a Quote</a>
        </div>
    </div>
</div>
<!-- Breadcrumb ending point -->

<section class="page-etimate">
    <div class="container">
        <div class="wrapper">
            <div class="card" role="region" aria-labelledby="formTitle">
                <div class="top-section">
                    <div class="pill">Instant estimate</div>
                    <div class="title">
                        <h2>Painting Price Estimate</h2>
                        <p>Fill in your project details below.

                        </p>
                    </div>
                </div>
                <form method="POST" action="https://api.surojd.com.np/api/email/submit/MJ3nc4p6GvEeRjzZFL6c4uQNGmae5x"
                    enctype="multipart/form-data" class="form">
                    <div class="grid">
                        <div class="field half">
                            <label for="name">First Name</label>
                            <div class="control">
                                <input name="First Name" id="name" type="text" placeholder="Enter Your First Name" />
                            </div>
                        </div>
                        <div class="field half">
                            <label for="name">Last Name</label>
                            <div class="control">
                                <input name="Last Name" id="name" type="text" placeholder="Enter Your Last Name" />
                            </div>
                        </div>

                        <div class="field half">
                            <label for="email">Email</label>
                            <div class="control">
                                <input name="email" id="email" type="email" placeholder="Enter Email Address" />
                            </div>
                        </div>

                        <div class="field half">
                            <label for="phone">Phone</label>
                            <div class="control">
                                <input name="Phone" id="phone" type="tel" placeholder="Enter Your Number" />
                            </div>
                        </div>

                        <div class="field third">
                            <label for="projectType" class="required">Project Type</label>
                            <div class="control">
                                <select name="Project Type" id="projectType" required>
                                    <option value="" disabled selected>Select…</option>
                                    <option>Interior</option>
                                    <option>Exterior</option>
                                    <option>Both</option>
                                </select>
                            </div>
                        </div>

                        <div class="field third">
                            <label for="surfaceArea" class="required">Surface Area</label>
                            <div class="control input-row">
                                <input name="Surface Area" id="surfaceArea" type="number" placeholder="e.g., 1200"
                                    required />
                                <span class="suffix">sq. ft</span>
                            </div>
                        </div>

                        <div class="field third">
                            <label for="coats" class="required">Number of Coats</label>
                            <div class="control">
                                <select name="Number of Coats" id="coats" required>
                                    <option value="" disabled selected>Select…</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                </select>
                            </div>
                        </div>

                        <div class="field third">
                            <label for="paintQuality" class="required">Paint Quality</label>
                            <div class="control">
                                <select name="Paint Quality" id="paintQuality" required>
                                    <option value="" disabled selected>Select…</option>
                                    <option>Economy</option>
                                    <option>Standard</option>
                                    <option>Premium</option>
                                </select>
                            </div>
                        </div>

                        <div class="field third">
                            <label for="surfaceCondition" class="required">Surface Condition</label>
                            <div class="control">
                                <select name="Surface Condition" id="surfaceCondition" required>
                                    <option value="" disabled selected>Select…</option>
                                    <option>Good</option>
                                    <option>Fair</option>
                                    <option>Needs Prep</option>
                                </select>
                            </div>
                        </div>
                        <div class="field third">
                            <label for="zip" class="required">Location / Zip Code</label>
                            <div class="control">
                                <input name="Zip Code" id="zip" type="text" placeholder="e.g., 44600" required />
                            </div>
                        </div>

                        <div class="field half">
                            <div class="checkbox">
                                <input name="Color Change" id="colorChange" type="checkbox" />
                                <label for="colorChange">Color Change</label>
                            </div>
                        </div>

                        <div class="field half">
                            <div class="checkbox">
                                <input name="Trim & Doors Included?" id="trimDoors" type="checkbox" />
                                <label for="trimDoors">Trim & Doors Included?</label>
                            </div>
                        </div>
                    </div>

                    <div class="actions">
                        <button type="reset" class="btn">Reset</button>
                        <button type="submit" class="btn primary">Get Estimate</button>
                    </div>
                    <input name="to" type="hidden" value="<?= $email; ?>">
                    <input name="successMessage" type="hidden" value="Your Message Has Been Delivered.">
                </form>

                <p class="footer-note">
                    By submitting, you agree to be contacted about your estimate.
                </p>
            </div>
        </div>
    </div>
</section>