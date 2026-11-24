<?php
    $page = 'exterior_detailing';  
    include 'includes/header.php'; 
?>
<!-- Breadcrumb Section -->
<section class="breadcrumb">
    <div class="container">
        <div class="wrapper">
            <h3>Exterior Detailing</h3>
            <ul class="breadcrumb-listing">
                <li>
                    <a href="./">home</a>
                </li>
                <li>
                    <p>Exterior Detailing</p>
                </li>
            </ul>
        </div>
    </div>
</section>

<section class="detailing exterior-detailing section">
    <div class="container">
        <div class="detail-wrapper">
            <div class="detail-block">
                <div class="figure">
                    <img src="images/exterior1.jpg" alt="Exterior Image 1">
                </div>
                <div class="title">
                    <h4>exterior details</h4>
                    <h5>Small: $400 to Large: $450+</h5>
                    <div class="button">
                        <a href="exterior-detailing#exteriorForm" class="btn btn-primary btn-custom-large">book now</a>
                    </div>
                </div>
                <div class="desc">
                    <p> Our Exterior Service provides a thorough exterior wash and gentle hand dry, perfect for removing everyday dirt and grime. Ideal for vehicles with regular use, it ensures a clean, polished finish without addressing paint scratches.</p>
                    <ul>
                        <p><span>Included Services</span></p>
                        <li>Wheels Deep Cleaned</li>
                        <li>Tires/Wheel Wells Cleaned & Conditioned</li>
                        <li>Trim Cleaned & Conditioned</li>
                        <li>Foam Hand Wash</li>
                        <li>Paint Decontamination Wash</li>
                        <li>Clay Bar Treatment</li>
                        <li>Machine Polish & Wax</li>
                        <li>Deep Vacuum</li>
                        <li>Interior Scrub Down</li>
                        <li>Interior Steam Clean, Sanitize & Disinfect</li>
                        <li>Leather Seats Cleaned & Conditioned</li>
                        <li>Cloth Seats/Fabrics Light Stain Removal</li>
                        <li>Windows & Door Jambs Cleaned</li>
                    </ul>
                    <h6>no callout fees melbourne wide</h6>
                </div>
            </div>
            <!-- <div class="detail-block">
                <div class="figure">
                    <img src="images/exterior-2.jpg" alt="Exterior Image 2">
                </div>
                <div class="title">
                    <h4>exterior Large</h4>
                    <h5>$450+</h5>
                    <div class="button">
                        <a href="exterior-detailing#exteriorForm" class="btn btn-primary btn-custom-large">book now</a>
                    </div>
                </div>
                <div class="desc">
                    <p>Our EXTERIOR PLATINUM package includes a full exterior detail with a single polish to remove
                        light swirls and scratches. An effective way to bring your cars paint back to life.</p>
                    <ul>
                        <p>Approx. 1-2 hours</p>
                        <li>Snow foam hand wash</li>
                        <li>Soft towel dry</li>
                        <li>Bug & tar removal</li>
                        <li>Single stage polish to remove light swirls and scratches and add shine</li>
                        <li>Windows and mirrors cleaned</li>
                        <li>Fuel door pressure cleaned</li>
                        <li>Wheels and wheel arches degreased and cleaned from dirt and brake dust</li>
                        <li>Tyres dressed and shined</li>
                        <li>Wax resin applied during polishing for shine and protection</li>
                        <li>Headlights polished if necessary</li>
                        <li>Clay bar treatment if required</li>
                        <li>Special exterior trim rejuvenation if required</li>
                    </ul>
                    <h6>no callout fees melbourne wide</h6>
                </div>
            </div> -->
        </div>
        <div class="form-box" id="exteriorForm">
            <form action="" class="form">
                <div class="form-group half-width">
                    <label for="detailPackage">Detailing Package</label>
                    <select name="Detailing Package" id="detailPackage" class="form-input">
                        <option value="" selected disabled>select any 1 detailing package</option>
                        <!-- <option value="interior platinum $179">interior platinum $179</option>
                        <option value="exterior gold $99">exterior gold $99</option>
                        <option value="exterior platinum $179">exterior platinum $179</option>
                        <option value="interior & exterior upkeep $189 ">interior & exterior upkeep $189 </option>
                        <option value="interior & exterior silver $229 ">interior & exterior silver $229 </option>
                        <option value="interior & exterior gold $279 ">interior & exterior gold $279 </option>
                        <option value="interior & exterior platinum $369 ">interior & exterior platinum $369 </option> -->
                    </select>
                </div>
                <div class="form-group half-width">
                    <label for="modelNo">make & model</label>
                    <input type="text" class="form-input" placeholder="enter make & model of the vehicle">
                </div>
                <!-- <div class="form-group">
                    <label>please select any that apply</label>
                    <div class="form-subgroup">
                        <input type="checkbox" id="petHair" name="Select Any That Apply" value="pet hair (add $100)">
                        <label for="petHair">pet hair (add $100)</label>
                    </div>
                    <div class="form-subgroup">
                        <input type="checkbox" id="excessiveSand" name="Select Any That Apply"
                            value="excessive sand & dust (add $100)">
                        <label for="excessiveSand">excessive sand & dust (add $100)</label>
                    </div>
                    <div class="form-subgroup">
                        <input type="checkbox" id="engineBay" name="Select Any That Apply"
                            value="engine bay clean (add $50)">
                        <label for="engineBay">engine bay clean (add $50)</label>
                    </div>
                    <div class="form-subgroup">
                        <input type="checkbox" id="sticker" name="Select Any That Apply"
                            value="sticker removal (add $50)">
                        <label for="sticker">sticker removal (add $50)</label>
                    </div>
                </div> -->
                <div class="form-group half-width">
                    <label for="name">Name</label>
                    <input type="text" class="form-input" id="name" placeholder="Full Name" name="Full Name" required>
                </div>
                <div class="form-group half-width">
                    <label for="phone">Phone</label>
                    <input type="text" class="form-input" id="phone" placeholder="Phone No" name="Phone No" required>
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" class="form-input" id="address" placeholder="Your Address" name="Your Address"
                        required>
                </div>
                <div class="form-grouop">
                    <button type="submit" class="btn btn-custom-large btn-primary">submit</button>
                </div>
            </form>
        </div>
    </div>
</section>

<!-- Breadcrumb Section -->
<?php include 'includes/footer.php'; ?>