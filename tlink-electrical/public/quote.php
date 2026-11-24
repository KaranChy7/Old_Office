<?php
$page = 'quote';
include 'includes/header.php';
?>

<div class="breadcrumb section">
    <div class="wrapper">
        <ul class="bread-wrap">
            <li class="bread-item"><a href="" class="bread-link">Home</a></li>
            <!-- <li class="bread-item">Service</li> -->
            <li class="bread-item">Quote</li>
        </ul>
        <h4 class="bread-title">Quote</h4>
    </div>
</div>
<!-- breadcrumb ending -->
<section class="section-quote wow animate__fadeInUp" data-wow-duration="2s">
    <div class="container">
        <div class="quote-wrapper">
            <div class="content">
                <h3>Why <?= $company; ?> Is Right For You?</h3>
                <p class="desc"><?= $company; ?> delivers clear, reliable cleaning services with top-quality results for
                    homes and businesses.
                </p>
            </div>
            <div class="form-container">
                <div class="form-title">
                    <h3> GET A FREE QUOTE:</h3>
                </div>
                <form class="form" method="POST"
                    action="https://api.surojd.com.np/api/email/submit/sj5pIUuRVJUBLILAI8mgNT5m2eq4x9"
                    enctype="multipart/form-data">

                    <div class="form-group">
                        <label for="name">Full Name:</label>
                        <input type="text" name="Full Name" class="form-control" required="" aria-required="true" />
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="text" name="email" class="form-control" required="" aria-required="true" />
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone:</label>
                        <input type="tel" name="phone" class="form-control" required="" aria-required="true" />
                    </div>
                    <div class="form-group">
                        <label for="phone">Suburbs:</label>
                        <input type="text" name="Suburbs" class="form-control" required="" aria-required="true" />
                    </div>
                    <div class="form-group full-width">
                        <label for="phone">Select Any 1 Service:</label>
                        <select name="Selected Service" class="form-control">
                            <option value="" selected disabled>Select Any Services</option>
                            <option value="Domestic Cleaning">Domestic Cleaning</option>
                            <option value="End Of Lease Cleaning">End Of Lease Cleaning</option>
                            <option value="Carpet Steam Cleaning">Carpet Steam Cleaning</option>
                            <option value="Couch cleaning">Couch cleaning</option>
                            <option value="Oven cleaning">Oven cleaning</option>
                            <option value="Window cleaning">Window cleaning</option>
                            <option value="Tile and grout cleaning">Tile and grout cleaning</option>
                            <option value="Builder cleaning">Builder cleaning</option>
                        </select>
                    </div>
                    <div class="form-group full-width">
                        <label for="issue" class="full">Other Details</label>
                        <textarea name="services_required" class="form-control text-full"></textarea>
                    </div>
                    <div class="form-group">
                        <div class="button">
                            <button type="submit" class="btn btn-custom-large btn-secondary"><span> Get a Quote
                                </span></button>
                        </div>
                    </div>

                    <input name="to" type="hidden" value="<?= $email; ?>">
                    <input name="successMessage" type="hidden" value="Your Message Has Been Delivered.">
                </form>



            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>