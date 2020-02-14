<?php
/**
 * @var array $data - массив новостей
 */
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>

<h2>Новости</h2>

<div class="news-block">
    <?php
        require_once 'newmenu.php';
    ?>
<!--    <a class="btn" id="link_add_news" href="/article/show"><button type="submit">Добавить новость</button></a>-->
<!--    <a class="btn" id="link_add_news" href="/news/list"><button type="submit">показать все новости</button></a>-->

    <?php foreach ($data as $item): ?>
        <article class="news-item">
            <div class="news-id">
                <?= $item['id']; ?>
            </div>
            <div class="title">
                <span><h3 class="news-title"><?= $item['title']; ?></h3></span>
            </div>
            <div class="description">
                <span class="news-description"><?= $item['description']; ?></span>
            </div>
            <div class="button-group">
                <form action="/news/delete" method="post">
                    <button type="submit" class="button3" name="articleId" value="<?= $item['id']; ?>">Delete</button>
                </form>
                <form action="/article/show" method="post">
                    <button type="submit" class="button1" name="articleId" value="<?= $item['id']; ?>"> Edit </button>
                </form>
            </div>

        </article>

        <br/>
    <?php endforeach; ?>
</div>
</body>
</html>