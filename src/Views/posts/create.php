<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Создать пост</title>
  <link rel="stylesheet" href="/css/create.css">
  <link rel="stylesheet" href="/css/btn.css">
</head>

<body>
  <a class="btn" href="/">На главную</a>
  <div class="post-form">
    <h1 class="post-form__title">Создать пост</h1>
    <form class="post-form__form" action="/" method="post" enctype="multipart/form-data">
      <label class="post-form__label">
        Заголовок статьи
        <input class="post-form__input" type="text" name="title">
      </label>
      <label class="post-form__label">
        Текст статьи
        <textarea class="post-form__textarea" name="text"></textarea>
      </label>
      <label class="post-form__label">
        Загрузить картинку<br>
        <input type="file" name="image">
      </label>
      <button class="post-form__button" type="submit">Создать пост</button>
    </form>
  </div>

</body>

</html>
