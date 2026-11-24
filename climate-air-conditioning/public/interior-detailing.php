<?php
    $page = 'interior_detailing';  
    include 'includes/header.php'; 
?>
<!-- Breadcrumb Section -->
<section class="breadcrumb">
    <div class="container">
        <div class="wrapper">
            <h3>Interior Detailing</h3>
            <ul class="breadcrumb-listing">
                <li>
                    <a href="./">home</a>
                </li>
                <li>
                    <p>Interior Detailing</p>
                </li>
            </ul>
        </div>
    </div>
</section>
<section class="detailing interior-detailing section">
    <div class="container">
        <div class="detail-block">
            <div class="figure">
                <img src="images/interior1.jpg" alt="Interior Image 1">
            </div>
            <div class="title">
                <h4>interior Detailing</h4>
                <h5>$*</h5>
                <div class="button">
                    <a href="interior-detailing#interiorForm" class="btn btn-primary btn-custom-large">book now</a>
                </div>
            </div>
            <div class="desc">
                <!-- <p>Our Interior Detail package offers a comprehensive deep clean and restoration for your vehicle's interior. Every surface is meticulously cleaned, sanitized, and conditioned to leave your car looking and feeling refreshed, with a pristine, like-new appearance.</p> -->
                <ul>
                    <p><span>Interior Inclusions</span></p>
                    <li>Wipe down all surfaces</li>
                    <li>Vacuum seats, under seats, carpet, boot, floor mats & compartments</li>
                    <li>Deep shampoo & steam clean seats, carpet, boot & floor mats</li>
                    <li>Leather seats cleaned & conditioned (if applicable)</li>
                    <li>Dash, centre console, trims & plastics cleaned & rejuvenated</li>
                    <li>Air vents, seat rails & sun visors cleaned & rejuvenated</li>
                    <li>Foot pedals cleaned</li>
                    <li>Windows & mirror cleaned (inside & out)</li>
                    <li>Interior deodorised</li> 
                </ul>
                <h6>Price</h6>
                    <ul>
                        <li> Hatch / Sedan: $149</li>  
                        <li>Small SUV / Wagon: $169</li>  
                        <li>Large SUV / 4WD / 7 Seater: $189 </li> 

                    </ul>
                <h6>Pet hair and heavy soiling may incur additional charges.</h6>
            </div>
        </div>
        <div class="form-box" id="interiorForm">
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