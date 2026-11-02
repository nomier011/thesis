<?php
require_once __DIR__ . '/config.php';
$data = loadData();
$pageTitle = SITE_NAME . ' — Waste less. Share more.';
$totalKg = 3.8;
$itemCount = count($data['items']);
include __DIR__ . '/header.php';
?>

<section class="hero">
  <div class="container">
    <span class="pill">A campus initiative for sharing more and wasting less.</span>
    <h1>Good resources deserve another life.</h1>
    <p class="lead">Share, donate, reuse, or swap useful campus items with fellow students, faculty, and staff.</p>
    <div class="tags">
      <span>Free</span><span>Donate</span><span>Reuse</span><span>Swap</span>
    </div>
    <div class="hero-actions">
      <?php if (isLoggedIn()): ?>
        <a class="btn btn-primary" href="<?= BASE_URL ?>/browse.php">Browse resources</a>
      <?php else: ?>
        <a class="btn btn-primary" href="<?= BASE_URL ?>/signup.php">Create account</a>
        <a class="btn btn-ghost" href="<?= BASE_URL ?>/signin.php">Sign in</a>
      <?php endif; ?>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <h2>Useful things belong in the hands of the next student.</h2>
    <p class="lead">Pass on reviewers, yellow pads, PE gear, payong, and other everyday student essentials.</p>
  </div>
</section>

<section class="section">
  <div class="container">
    <h2>Campus impact</h2>
    <div class="stat-grid">
      <div class="stat-card">
        <span class="stat-num"><?= $totalKg ?> kg</span>
        <p>estimated materials recirculated</p>
      </div>
      <div class="stat-card">
        <span class="stat-num"><?= $itemCount ?></span>
        <p>items given another life</p>
      </div>
    </div>
  </div>
</section>

<?php include __DIR__ . '/footer.php'; ?>