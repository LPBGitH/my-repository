<footer>
    <div class="container">
        <div class="footer-content">
            <?php 
            $startYear = 2006;
            $thisYear = date('Y');
            $output = ($startYear == $thisYear) ? $startYear : "{$startYear}&ndash;{$thisYear}";
            ?>
            
            <p class="copyright">&copy; <?= $output ?> Leonardo Pittana</p>
            
            <?php if(basename($_SERVER['SCRIPT_FILENAME']) == 'about-us.php'): ?>
                <p class="privacy-link">
                    <a href="privacy-policy.php">Privacy Policy</a>
                </p>
            <?php endif; ?>
            
            <div class="footer-links">
                <a href="index.php">Home</a> |
                <a href="about-us.php">About</a> |
                <a href="services.php">Services</a> |
                <a href="contact-us.php">Contact</a>
            </div>
        </div>
    </div>
</footer>
