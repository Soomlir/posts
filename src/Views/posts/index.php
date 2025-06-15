<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Посты</title>
  <link rel="stylesheet" href="/css/posts.css">
  <link rel="stylesheet" href="/css/btn.css">
</head>

<body>
  <a href="/create" class="btn">Создать пост</a>

  <div class="posts">
    <?php if (!empty($posts)): ?>
      <ul class="posts__list">
        <?php foreach ($posts as $post): ?>
          <li class="posts__item post-card">
            <img class="post-card__image" src="<?= htmlspecialchars($post['url']) ?>" alt="">
            <div class="post-card__content">
              <h2 class="post-card__title"><?= htmlspecialchars($post['title']) ?></h2>
              <p class="post-card__text"><?= nl2br(htmlspecialchars($post['text'])) ?></p>
              <a href="/post?id=<?= urlencode($post['id']) ?>">Читать</a>
            </div>
          </li>
        <?php endforeach; ?>
      </ul>
    <?php else: ?>
      <p class="posts__empty">Постов пока нет.</p>
    <?php endif; ?>
  </div>
</body>

</html>
