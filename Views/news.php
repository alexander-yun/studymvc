<?php
/**
 * @var array $data - массив новостей
 */
?>

<h2>Новости</h2>

<div class="news-block">
    <?php foreach ($data as $item): ?>
        <div class="news-item" style="  border: 1px solid black">
            <div class="title">
                <span><?= $item['title']; ?></span>
            </div>
            <div class="description">
                <span><?= $item['description']; ?></span>
            </div>
            <form action="/news/delete" method="post">
                <?= $item['id']; ?>
<!--                <input type="hidden" name="articleId" value="--><?//= $item['id']; ?><!--">-->
                <button type="submit" class=".button3" name="articleId" value="<?= $item['id']; ?>">Delete</button>
            </form>
            <form action="/article/show" method="post">
                <button type="submit" class=".button1" name="articleId" value="<?= $item['id']; ?>"> Edit </button>
            </form>
        </div>
        <br/>
    <?php endforeach; ?>
</div>