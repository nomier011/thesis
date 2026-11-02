<?php
require_once __DIR__ . '/config.php';
$data = loadData();
$pageTitle = 'Resources for our campus';
include __DIR__ . '/header.php';
?>

<section class="section">
  <div class="container">
    <div class="section-head">
      <h1>Resources for our campus</h1>
      <p class="muted">Find something useful or pass along what you no longer need.</p>
    </div>

    <p class="muted">Showing <?= count($data['items']) ?> listings · Meet up on campus</p>

    <div class="card-grid">
      <?php foreach ($data['items'] as $item): ?>
        <article class="card">
          <div class="card-img" style="background-image:url('<?= e($item['image']) ?>')"></div>
          <div class="card-body">
            <span class="tag tag-<?= strtolower(e($item['type'])) ?>"><?= e($item['type']) ?></span>
            <small class="muted"><?= e($item['category']) ?></small>
            <h3><?= e($item['title']) ?></h3>
            <p class="muted"><?= e($item['condition']) ?></p>
          </div>
        </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php include __DIR__ . '/footer.php'; ?>