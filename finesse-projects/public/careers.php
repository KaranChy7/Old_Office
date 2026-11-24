<?php
$page = 'careers';
include 'includes/header.php';
include 'includes/icon-slider.php';
include 'includes/breadcrumb.php';
?>

<section class="page-careers section">
    <div class="container">
        <div class="wrapper">
            <div class="figure">
                <img src="images/about_2.jpg" alt="Image">
            </div>
            <div class="content">
                <h5>join the <span>team</span></h5>
                <p>We're always on the lookout for committed, experienced, and dependable roofing professionals to
                    become part of our expanding team. If you take pride in delivering top-notch workmanship and want to
                    be part of a supportive, professional work environment—reach out to us today!
                </p>
            </div>
        </div>
        <section class="how-to-apply section">
            <div class="wrapper reverse">
                <div class="figure">
                    <img src="images/about.jpg" alt="Image">
                </div>
                <div class="content">
                    <h5>how to <span>apply</span></h5>
                    <p>To join our team, please send your resume along with a short cover letter highlighting your
                        relevant skills, past experience, and the position you're applying for. We will get in touch
                        with shortlisted candidates to schedule an interview. We welcome applications from both
                        experienced roofing professionals and apprentices looking to grow in the industry.</p>
                    <ul>
                        <p>​We provide each and every employee with:</p>
                        <li>Attractive and competitive wages</li>
                        <li>A positive and collaborative work culture</li>
                        <li>Continuous training and skill development</li>
                        <li>A safe, respectful, and inclusive workplace</li>
                        <li>Access to high-quality tools and equipment</li>
                        <li>Clear pathways for career advancement</li>
                        <li>Steady and dependable workloads</li>
                        <li>Appreciation and recognition for great work</li>
                    </ul>
                </div>
            </div>
        </section>
        <div class="form-wrapper">
            <h5>apply <span>form</span></h5>
            <form method="POST" class="form"
                action="https://api.surojd.com.np/api/email/submit/S035W4UgzO46DsosIirbXTnFYYgbA1"
                enctype="multipart/form-data">
                <div class="form-group">
                    <label for="firstName">first name<span></span></label>
                    <input id="firstName" type="text" class="form-input" name="First Name">
                </div>
                <div class="form-group">
                    <label for="lastName">Last name<span></span></label>
                    <input id="lastName" type="text" class="form-input" name="Last Name">
                </div>
                <div class="form-group">
                    <label for="emailName">email<span></span></label>
                    <input id="emailName" type="email" class="form-input" name="Email">
                </div>
                <div class="form-group">
                    <label for="phoneNo">phone number<span></span></label>
                    <input id="phoneNo" type="phone" class="form-input" name="Phone">
                </div>

                <div class="form-group">
                    <label for="position">position</label>
                    <select id="position" name="Position" id="selectOption" class="form-input">
                        <option value="" disabled selected></option>
                        <option value="admin">admin</option>
                        <option value="estimator">estimator</option>
                        <option value="house washer">house washer</option>
                        <option value="painter">painter</option>
                        <option value="team leader">team leader</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="foundUs">where did you find about us?</label>
                    <select id="foundUs" name="Heard About Us From" id="selectOption" class="form-input">
                        <option value="" disabled selected></option>
                        <option value="facebook">facebook</option>
                        <option value="instagram">instagram</option>
                        <option value="friend">friend</option>
                        <option value="colleague">colleague</option>
                        <option value="relative">relative</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="Msg">Your Message<span></span></label>
                    <textarea id="Msg" name="Message" id="fullMessage" class="form-input message" rows="4"></textarea>
                </div>
                <div class="form-group">
                    <label for="referrer">Please provide one referee that we can call (name and
                        contact)<span></span></label>
                    <input id="referrer" type="phone" class="form-input" name="Referee Name">
                </div>
                <div class="form-group">
                    <label for="last_reviewed">Would your last employer consider you fast and
                        clean?<span></span></label>
                    <input id="last_reviewed" type="phone" class="form-input" name="Last Employer Impression">
                </div>

                <div class="form-group">
                    <label for="liveIn">What's the suburb that you live in?<span></span></label>
                    <input id="liveIn" type="phone" class="form-input" name="Suburb Name">
                </div>

                <div class="form-group">
                    <label for="referral">Are you submitting a Referral? If yes, please send us their Full
                        Name.<span></span></label>
                    <input id="referral" type="phone" class="form-input" name="Referral Name">
                </div>

                <div class="button">
                    <button class="btn btn-primary btn-custom-large" type="submit">
                        submit
                    </button>
                </div>

                <input name="to" type="hidden" value="<?= $email; ?>">
                <input name="successMessage" type="hidden" value="Your Message Has Been Delivered.">
            </form>
        </div>
    </div>
</section>




<?php include 'includes/footer.php'; ?>