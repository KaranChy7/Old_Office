<div class="banner">
    <div class="slider">
        <div class="block">
            <div class="image">
                <img src="images/1.jpg" alt="Rural Fencing">
            </div>
        </div>
        <div class="block">
            <div class="image">
                <img src="images/2.jpg" alt="Rural Fencing">
            </div>
        </div>
        <div class="block">
            <div class="image">
                <img src="images/25.jpg" alt="Rural Fencing">
            </div>
        </div>
    </div>
    <div class="company-details">
        <div class="company-info phone">
            <h5>Phone:</h5>
            <div class="contact-info">
                <div class="info"><?php echo $phone; ?></div>
            </div>
        </div>
        <div class="company-info email">
            <h5>Mail:</h5>
            <div class="info"><?php echo $email; ?></div>
        </div>
        <div class="company-info link">
            <h5>Social Media:</h5>
            <div class="info">
                <?php if (!empty($facebook)): ?>
                <a href="<?= $facebook; ?>"><i class="fab fa-facebook-f"></i></a>
                <?php endif; ?>
                <?php if (!empty($instagram)): ?>
                <a href="<?= $instagram; ?>"><i class="fab fa-instagram"></i></a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>