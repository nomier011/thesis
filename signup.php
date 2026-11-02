<?php
require_once __DIR__ . '/config.php';
$error = $_GET['error'] ?? null;
$pageTitle = 'Create account';
include __DIR__ . '/header.php';
?>

<section class="section">
  <div class="container narrow">
    <h1>Create your account</h1>
    <p class="muted">Join the St. Cecilia's campus sharing community.</p>

    <?php if ($error): ?>
      <div class="alert"><?= e($error) ?></div>
    <?php endif; ?>

    <form action="<?= BASE_URL ?>/register.php" method="post" class="form">
      <label>Full name
        <input type="text" name="name" required>
      </label>
      <label>Email
        <input type="email" name="email" required>
      </label>
      <label>Password
        <input type="password" name="password" required minlength="6">
      </label>
      <button class="btn btn-primary" type="submit">Sign up</button>
    </form>

    <p class="muted small">Prototype access only — not stored with real credentials.</p>
  </div>
</section>

<?php include __DIR__ . '/footer.php'; ?>