<section class="section about">
    <div class="container">
        <div class="about-wrapper">
            <div class="image-block block">
                <div class="figure">
                    <img src="images/8.jpg" alt="Rural fencing project">
                </div>
                <div class="box">
                    <div class="exp">
                        <h3><?= $exp; ?><span>years of experience</span></h3>
                    </div>
                    <div class="figure-small">
                        <img src="images/10.jpg" alt="Fence line construction">
                    </div>
                </div>
            </div>
            <div class="content-block block">
                <div class="main-title">
                    <h6>Strong Fences Built for Rural Queensland</h6>
                    <h3><?= $company; ?></h3>
                </div>
                <div class="desc">
                    <p>Based in Collinsville and led by director Clay Peter Colls, we are a hands-on fencing contractor
                        servicing properties up to 300 km from our base. With 5 years of experience in rural and
                        commercial fencing, we build fences that stand up to tough North Queensland conditions — from
                        long boundary runs and stock yards to Colorbond fencing for homes and businesses.
                    </p>
                    <p>We handle every job from start to finish, including site assessment, line marking, post
                        installation, wire straining, panel fitting and clean-up. Whether you need a new fence on a
                        cattle property, a secure perimeter for a commercial site or repairs after storm or stock
                        damage, we deliver solid workmanship and straight, well-strained fence lines that last.</p>
                </div>
            </div>
        </div>
        <?php if ($page == 'about') { ?>
        <div class="reverse-wrapper">
            <div class="image-block">
                <img src="images/12.jpg" alt="Completed fencing job">
            </div>
            <div class="content-block">
                <p>We know that on the land, a broken fence means lost stock, lost time and lost money. That's why we
                    work 7 days a week, from 6:00 AM to 6:00 PM, and are happy to travel to remote properties across
                    the region. We turn up when we say we will, communicate clearly and get the job done without
                    fuss.</p>

                <p>At Colls Rural Contractors, our reputation is built on honest quotes, quality materials and fences
                    that are built right the first time. We value long-term relationships with graziers, farmers,
                    businesses and homeowners, and take pride in delivering fencing that protects your property and
                    adds lasting value.</p>
            </div>
        </div>
        <?php } ?>
    </div>
</section>