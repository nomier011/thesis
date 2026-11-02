<?php
require_once __DIR__ . '/config.php';
$error = $_GET['error'] ?? null;
$pageTitle = 'Sign in';
include __DIR__ . '/header.php';
?>

<section class="section">
  <div class="container narrow">
    <h1>Welcome back</h1>
    <p class="muted">Sign in to continue to the campus resource exchange.</p>

    <?php if ($error): ?>
      <div class="alert"><?= e($error) ?></div>
    <?php endif; ?>

    <form action="<?= BASE_URL ?>/login.php" method="post" class="form">
      <label>Email
        <input type="email" name="email" required>
      </label>
      <label>Password
        <input type="password" name="password" required>
      </label>
      <button class="btn btn-primary" type="submit">Sign in</button>
    </form>

    <p class="muted small">Prototype access only. No real auth is enforced.</p>
    <p>New here? <a href="<?= BASE_URL ?>/signup.php">Create an account</a></p>
  </div>
</section>

<?php include __DIR__ . '/footer.php'; ?>