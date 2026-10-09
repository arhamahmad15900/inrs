</main>
<footer class="site-footer">
  <div class="container footer-grid">
    <div>
      <a class="brand footer-brand" href="<?= e($homePrefix ?? 'index.php') ?>">
        <img src="<?= e($assetPrefix ?? '') ?>assets/images/logo.jpg" alt="INRS University" class="footer-logo">
        <div class="footer-brand-text">
          <strong>INRS University</strong>
          <small>Excellence · Innovation · Knowledge</small>
        </div>
      </a>
      <p class="footer-desc">A responsive school website and ERP system built for modern admissions, notices, and school administration. Founded 1969.</p>
    </div>
    <div>
      <h3>Quick Links</h3>
      <a href="<?= e($homePrefix ?? 'index.php') ?>#about">About Us</a>
      <a href="<?= e($homePrefix ?? 'index.php') ?>#admission">Admissions</a>
      <a href="<?= e($homePrefix ?? 'index.php') ?>#notices">Notice Board</a>
      <a href="<?= e($homePrefix ?? 'index.php') ?>#facilities">Facilities</a>
    </div>
    <div>
      <h3>Contact</h3>
      <p>✉ info@example.com</p>
      <p>📞 +91 00000 00000</p>
      <p style="margin-top:12px;font-style:italic;color:rgba(255,255,255,0.38)">Replace these sample details with your school's official information.</p>
    </div>
  </div>
  <div class="footer-bottom">© <?= date('Y') ?> INRS University. All rights reserved. &nbsp;|&nbsp; Excellence · Innovation · Knowledge</div>
</footer>
<script src="<?= e($assetPrefix ?? '') ?>assets/js/main.js"></script>
</body></html>
