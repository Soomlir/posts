<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Пост</title>
  <link rel="stylesheet" href="/css/post.css">
  <link rel="stylesheet" href="/css/btn.css">
</head>

<body>
  <a class="btn" href="/">На главную</a>
  <div class="page">
    <?php if (!empty($post)): ?>
      <div class="card">
        <img src="<?= htmlspecialchars($post['url']) ?>" alt="">
        <div class="card__content">
          <h2 class="card__title"><?= htmlspecialchars($post['title']) ?></h2>
          <p class="card__text"><?= nl2br(htmlspecialchars($post['text'])) ?></p>
          <a class="card__link" href="/">Назад ко всем постам</a>
        </div>
      </div>
    <?php else: ?>
      <p class="posts__empty">Пост не загрузился.</p>
    <?php endif; ?>
  </div>
</body>

</html>
