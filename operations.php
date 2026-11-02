<?php
require_once __DIR__ . '/config.php';
if (!isLoggedIn()) redirect('/signin.php?error=Please+sign+in');

$data = loadData();
$pageTitle = 'Operations';
include __DIR__ . '/header.php';
?>

<section class="section">
  <div class="container">
    <h1>Campus team tools</h1>
    <p class="muted">Manage campus exchange activity.</p>

    <div class="two-col">
      <div>
        <h2>Share a resource</h2>
        <p class="muted">Use a publicly accessible image link.</p>

        <form action="<?= BASE_URL ?>/share.php" method="post" class="form">
          <label>Title
            <input type="text" name="title" required>
          </label>
          <label>Type
            <select name="type" required>
              <option>Free</option>
              <option>Donate</option>
              <option>Reuse</option>
              <option>Swap</option>
            </select>
          </label>
          <label>Category
            <input type="text" name="category" required>
          </label>
          <label>Condition
            <input type="text" name="condition" value="Good condition" required>
          </label>
          <label>Image URL
            <input type="url" name="image" required>
          </label>
          <button class="btn btn-primary" type="submit">Publish listing</button>
        </form>
      </div>

      <div>
        <h2>My shares</h2>
        <p class="muted">Resources you've offered to the community.</p>
        <?php
          $mine = array_filter($data['items'], fn($i) => ($i['owner'] ?? '') === currentUser()['email']);
        ?>
        <?php if (empty($mine)): ?>
          <div class="empty">
            <p>Your listings will show up here.</p>
            <p class="muted">Share a useful item to get started.</p>
          </div>
        <?php else: ?>
          <ul class="list">
            <?php foreach ($mine as $item): ?>
              <li><strong><?= e($item['title']) ?></strong> <span class="muted">— <?= e($item['type']) ?></span></li>
            <?php endforeach; ?>
          </ul>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>

<?php include __DIR__ . '/footer.php'; ?>