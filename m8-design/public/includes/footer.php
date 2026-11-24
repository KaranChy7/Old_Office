<?php if ($page != 'thanks') { ?>
<footer class="footer">
    <div class="container">
        <div class="footer-wrapper">
            <div class="footer-block">
                <div class="social-link-wrap">
                    <!-- <h6 class="title">follow us</h6> -->
                    <ul>
                        <li><a href="<?= $facebook; ?>"><i class="fa-brands fa-square-facebook"></i></a></li>
                        <li><a href="<?= $instagram; ?>"><i class="fa-brands fa-instagram"></i></a></li>
                        <li><a href="<?= $google; ?>"><i class="fa-brands fa-google"></i></a></li>
                    </ul>
                    <div class="footer-desc">
                        <div class="figure">
                            <img src="images/logo.png" alt="AC BUILT GROUP Logo">
                        </div>
                        <p><span>AC Built Group </span>| SYDNEY, NSW | <span>+61 447 137 382</span></p>
                    </div>
                </div>
            </div>
        </div>
</footer>


<div class="bottom-footer">
    <div class="container">
        <div class="content-wrap ">
            <p>All Rights Reserved <?= date('Y'); ?> - ⓒ Copyright </p>
            <!-- <a href="#">Privacy Policy</a> -->
        </div>
    </div>
</div>
<!-- <div class="mobile-call-button">
    <a href="tel:<?= $phone; ?>"><i class="fa fa-phone"></i></a>
</div> -->


<div class="chat-widget" id="chatWidget">
    <!-- Toggle button -->
    <button class="chat-toggle" id="chatToggle">
        <span class="icon" id="chatIcon">💬</span>
        <span id="chatLabel">Let’s Chat</span>
    </button>

    <!-- Chat panel -->
    <div class="chat-panel">
        <div class="chat-box">
            <!-- Header -->
            <div class="chat-header">
                <div class="header-left">
                    <div class="wrapper">
                        <figure>
                            <img src="images/logo.png" alt="Logo">
                        </figure>
                    </div>
                    <div class="title">
                        <h6>Let’s Chat!</h6>
                        <p>We will reply as soon as we can</p>
                    </div>
                </div>
                <button class="chat-close" id="chatClose">&times;</button>
            </div>
            <!-- Chat body -->
            <div class="chat-body" id="chatBody">
                <!-- Auto-reply form block (hidden at first) -->
                <div class="form-block" id="chatFormContainer">
                    <div class="agent-msg">
                        “ WHERE BESPOKE MEETS DETAIL. CRAFTED WITH CARE. BUILT TO LAST ”
                        <!-- please leave your details and we'll be in touch. -->
                    </div>
                    <form id="detailsForm" class="auto-reply-form">
                        <label for="detailName">Name</label>
                        <input id="detailName" type="text" name="name" placeholder="Your Name" required>

                        <label for="detailEmail">Email</label>
                        <input id="detailEmail" type="email" name="email" placeholder="example@email.com" required>

                        <label for="detailMessage">Message</label>
                        <textarea id="detailMessage" name="message" placeholder="Your message..." required></textarea>

                        <button type="submit" class="submit-btn">Submit</button>
                    </form>
                </div>
            </div>

            <!-- Input area -->

            <div class="chat-input">
                <form class="input-form" id="chatForm">
                    <input type="text" class="input-field" id="chatMessage" placeholder="Write your message..."
                        autocomplete="off" />

                    <div class="icons">

                        <label class="btn" aria-label="Attach a file">
                            <i class="fa-solid fa-paperclip"></i>
                            <input type="file" id="fileInput" hidden />
                        </label>

                        <!-- Send button -->
                        <button class="send-btn" type="submit" title="Send">
                            <i class="fa-solid fa-paper-plane"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php } ?>

<!-- Jquery Links -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>
</body>
<!-- End of Body Section -->

</html>
<!-- End -->