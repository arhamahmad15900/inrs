<?php
require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../includes/functions.php';
$pageTitle = 'INRS University | Excellence · Innovation · Knowledge';
$assetPrefix = '';
$homePrefix = 'index.php';
$loginPrefix = 'login.php';
$dashboardPrefix = '../admin/dashboard.php';
$logoutPrefix = '../logout.php';
$notices = [];
try {
    $notices = db()->query("SELECT title, body, created_at FROM notices WHERE is_published = 1 ORDER BY created_at DESC LIMIT 4")->fetchAll();
} catch (Throwable $e) {
    // Public page remains viewable until DB is configured.
}
require __DIR__ . '/../includes/header.php';
?>

<!-- ═══════════════════════════════════════════
     HERO SECTION — with background video + particles
════════════════════════════════════════════ -->
<section class="hero" id="home">

  <!-- Background Video -->
  <div class="video-bg-wrap">
    <video autoplay muted loop playsinline preload="auto" aria-hidden="true"
           poster="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' width='1' height='1'><rect fill='%230d5c57'/></svg>">
      <!-- Free stock video: students/campus atmosphere -->
      <source src="https://cdn.coverr.co/videos/coverr-students-studying-in-a-library-1571/1080p.mp4" type="video/mp4">
      <source src="https://assets.mixkit.co/videos/preview/mixkit-group-of-students-sitting-together-studying-2396-large.mp4" type="video/mp4">
    </video>
  </div>

  <!-- Decorative rings -->
  <div class="hero-rings" aria-hidden="true"></div>

  <!-- Particle Canvas -->
  <canvas id="hero-canvas" class="hero-particles" aria-hidden="true" style="position:absolute;inset:0;width:100%;height:100%;z-index:1;pointer-events:none;"></canvas>

  <!-- Main Content -->
  <div class="container hero-content">
    <span class="eyebrow" data-aos="fade-down">LEARN • GROW • ACHIEVE</span>
    <h1 data-aos="fade-up" data-aos-delay="100">
      Building bright futures<br><em>through education.</em>
    </h1>
    <p data-aos="fade-up" data-aos-delay="200">
      A welcoming learning community where students discover their strengths,
      develop confidence and prepare for tomorrow's world.
    </p>
    <div class="hero-actions" data-aos="fade-up" data-aos-delay="300">
      <a class="btn btn-primary" href="#admission">Apply for Admission <span>→</span></a>
      <a class="btn btn-ghost" href="#about">Explore our school</a>
    </div>
    <div class="hero-note" data-aos="fade-up" data-aos-delay="400">
      <span class="note-dot"></span>
      A community committed to every learner — since 1969
    </div>
  </div>

  <!-- 3D Floating Badge -->
  <div class="hero-badge" aria-hidden="true">
    <strong>55+</strong>
    <span>Years of<br>Excellence</span>
  </div>

  <!-- Scroll Indicator -->
  <div class="hero-scroll" aria-hidden="true">
    <div class="hero-scroll-line"></div>
    <span>SCROLL</span>
  </div>

</section>

<!-- ═══════════════════════════════════════════
     QUICK STATS BAR
════════════════════════════════════════════ -->
<section class="quick-stats">
  <div class="container stats-grid">
    <div data-aos="fade-up" data-aos-delay="100">
      <span class="stat-number">01</span>
      <span class="stat-label">Student‑first<br>approach</span>
    </div>
    <div data-aos="fade-up" data-aos-delay="200">
      <span class="stat-number">02</span>
      <span class="stat-label">Experienced<br>educators</span>
    </div>
    <div data-aos="fade-up" data-aos-delay="300">
      <span class="stat-number">03</span>
      <span class="stat-label">Learning<br>beyond books</span>
    </div>
    <div data-aos="fade-up" data-aos-delay="400">
      <span class="stat-number">04</span>
      <span class="stat-label">Strong family<br>partnership</span>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════
     ABOUT SECTION
════════════════════════════════════════════ -->
<section class="section" id="about">
  <div class="container split">

    <!-- 3D Visual Card -->
    <div class="about-visual" data-aos="fade-right">
      <div class="photo-placeholder">
        <span class="ph-eyebrow">OUR SCHOOL</span>
        <strong>Curiosity today.<br>Confidence tomorrow.</strong>
      </div>
      <div class="floating-card">
        <div class="floating-icon">✦</div>
        <div>
          <strong>Every child matters</strong>
          <small>Learning at every step</small>
        </div>
      </div>
    </div>

    <!-- Copy -->
    <div class="section-copy" data-aos="fade-left" data-aos-delay="150">
      <span class="eyebrow-dark">WELCOME TO INRS</span>
      <h2>A place to learn,<br><em>a place to belong.</em></h2>
      <p>We believe quality education combines strong foundations, thoughtful teaching, creativity and character. Our school community works together to help each learner thrive every single day.</p>
      <p>Use this section to add your institution's verified history, vision, mission and leadership details. INRS has proudly served students since 1969.</p>
      <a class="text-link" href="#facilities">Discover our approach <span>→</span></a>
    </div>

  </div>
</section>

<!-- ═══════════════════════════════════════════
     ANIMATED COUNTERS
════════════════════════════════════════════ -->
<section class="counters-section">
  <div class="container counters-grid">
    <div class="counter-item" data-aos="zoom-in" data-aos-delay="100">
      <span class="counter-num" data-target="1200" data-suffix="+">0</span>
      <span class="counter-label">Students Enrolled</span>
    </div>
    <div class="counter-item" data-aos="zoom-in" data-aos-delay="200">
      <span class="counter-num" data-target="85" data-suffix="+">0</span>
      <span class="counter-label">Qualified Educators</span>
    </div>
    <div class="counter-item" data-aos="zoom-in" data-aos-delay="300">
      <span class="counter-num" data-target="55" data-suffix="">0</span>
      <span class="counter-label">Years of Excellence</span>
    </div>
    <div class="counter-item" data-aos="zoom-in" data-aos-delay="400">
      <span class="counter-num" data-target="98" data-suffix="%">0</span>
      <span class="counter-label">Satisfaction Rate</span>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════
     FACILITIES SECTION
════════════════════════════════════════════ -->
<section class="section soft-section" id="facilities">
  <div class="container">
    <div class="section-heading" data-aos="fade-up">
      <span class="eyebrow-dark">THE SCHOOL EXPERIENCE</span>
      <h2>More than a classroom.</h2>
      <p>Spaces and experiences that support well-rounded development in every student.</p>
    </div>
    <div class="feature-grid">
      <article class="feature-card" data-aos="fade-up" data-aos-delay="100">
        <div class="feature-icon">▦</div>
        <h3>Modern Learning</h3>
        <p>Supportive classrooms and engaging learning resources designed for the 21st-century student.</p>
      </article>
      <article class="feature-card" data-aos="fade-up" data-aos-delay="200">
        <div class="feature-icon">⌁</div>
        <h3>Sports &amp; Wellness</h3>
        <p>Opportunities to build teamwork, fitness and lasting confidence on and off the field.</p>
      </article>
      <article class="feature-card" data-aos="fade-up" data-aos-delay="300">
        <div class="feature-icon">✎</div>
        <h3>Creative Activities</h3>
        <p>Encouraging imagination through arts, projects, clubs and extracurricular programmes.</p>
      </article>
      <article class="feature-card" data-aos="fade-up" data-aos-delay="400">
        <div class="feature-icon">◎</div>
        <h3>Safe Community</h3>
        <p>A respectful, inclusive environment where every student and family feels valued and safe.</p>
      </article>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════
     NOTICES
════════════════════════════════════════════ -->
<section class="section notice-section" id="notices">
  <div class="container notice-layout">
    <div class="section-copy" data-aos="fade-right">
      <span class="eyebrow-dark">STAY INFORMED</span>
      <h2>News &amp; <em>notices.</em></h2>
      <p>Important school announcements and updates for families. Stay connected with the latest from INRS.</p>
      <a class="text-link" href="#contact">Ask a question <span>→</span></a>
    </div>
    <div class="notice-list" data-aos="fade-left" data-aos-delay="150">
<?php if ($notices): foreach ($notices as $notice): ?>
      <article class="notice-item">
        <div class="notice-date"><?= e(date('d M', strtotime($notice['created_at']))) ?></div>
        <div>
          <h3><?= e($notice['title']) ?></h3>
          <p><?= e($notice['body']) ?></p>
        </div>
        <span class="notice-arrow">↗</span>
      </article>
<?php endforeach; else: ?>
      <article class="notice-item">
        <div class="notice-date">INFO</div>
        <div><h3>Admissions information</h3><p>Contact the school office for current admission dates and eligibility criteria.</p></div>
        <span class="notice-arrow">↗</span>
      </article>
      <article class="notice-item">
        <div class="notice-date">NEWS</div>
        <div><h3>School announcements</h3><p>Official notices will appear here when published by the administrator.</p></div>
        <span class="notice-arrow">↗</span>
      </article>
      <article class="notice-item">
        <div class="notice-date">HELP</div>
        <div><h3>Parent support</h3><p>Use the contact form below for general enquiries and support requests.</p></div>
        <span class="notice-arrow">↗</span>
      </article>
      <article class="notice-item">
        <div class="notice-date">EVENTS</div>
        <div><h3>Upcoming events</h3><p>Check back here for upcoming school events, sports days, and parent meetings.</p></div>
        <span class="notice-arrow">↗</span>
      </article>
<?php endif; ?>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════
     ADMISSION BANNER
════════════════════════════════════════════ -->
<section class="admission-banner" id="admission">
  <div class="container admission-inner">
    <div data-aos="fade-right">
      <span class="eyebrow">YOUR NEXT CHAPTER STARTS HERE</span>
      <h2>Ready to join our<br>learning community?</h2>
      <p>Send an admission enquiry and our school team will follow up with you personally.</p>
    </div>
    <a class="btn btn-light" href="admission.php" data-aos="fade-left" data-aos-delay="150">
      Start an enquiry <span>→</span>
    </a>
  </div>
</section>

<!-- ═══════════════════════════════════════════
     CONTACT SECTION
════════════════════════════════════════════ -->
<section class="section contact-section" id="contact">
  <div class="container contact-grid">

    <div class="section-copy" data-aos="fade-right">
      <span class="eyebrow-dark">GET IN TOUCH</span>
      <h2>We'd love to<br><em>hear from you.</em></h2>
      <p>Have a question about admissions or school life? Our friendly team is here to help.</p>
      <div class="contact-detail">
        <span>✉</span>
        <div>
          <small>EMAIL</small>
          <strong>info@example.com</strong>
        </div>
      </div>
      <div class="contact-detail">
        <span>📍</span>
        <div>
          <small>VISIT</small>
          <strong>Add your official school address here</strong>
        </div>
      </div>
      <div class="contact-detail">
        <span>📞</span>
        <div>
          <small>CALL</small>
          <strong>+91 00000 00000</strong>
        </div>
      </div>
    </div>

    <form class="form-card" method="post" action="contact.php" data-aos="fade-left" data-aos-delay="150">
      <h3>Send a message</h3>
      <p>Fields marked * are required.</p>
      <label>Full name *<input name="name" required maxlength="120" placeholder="Your name" id="contact-name"></label>
      <label>Email address *<input name="email" type="email" required maxlength="190" placeholder="you@example.com" id="contact-email"></label>
      <label>Subject<input name="subject" maxlength="190" placeholder="How can we help?" id="contact-subject"></label>
      <label>Message *<textarea name="message" rows="4" required maxlength="4000" placeholder="Write your message..." id="contact-message"></textarea></label>
      <button class="btn btn-primary btn-full" type="submit" id="contact-submit">Send message <span>→</span></button>
    </form>

  </div>
</section>

<?php require __DIR__ . '/../includes/footer.php'; ?>
