<?php
/**
 * @var array $data - массив новостей
 */
?>

<?php
    require_once 'head.php';
?>

<h2>Новости</h2>



<div class="news-block">
    <?php
        require_once 'newmenu.php';
    ?>

    <?php foreach ($data as $item): ?>
        <article class="container article">
            <div class="container news-id">
                <span class="news-id">
                    <?= $item['id']; ?>
                </span>
            </div>

            <div class="container title">
                <span class="title">
                    <h3 class="news-title">
                        <?= $item['title']; ?>
                    </h3>
                </span>
            </div>

            <div class="container">
                <span class="news-description"><?= $item['description']; ?></span>
            </div>
            <div class="container">
                <div class="container buttons">
                    <form action="/news/delete" method="post">
                        <button type="submit" class="buttons delete" name="articleId" value="<?= $item['id']; ?>">Удалить</button>
                    </form>
                </div>
                <div class="container buttons">
                    <form action="/article/show" method="post">
                        <button type="submit" class="buttons edit" name="articleId" value="<?= $item['id']; ?>">Изменить</button>
                    </form>
                </div>
            </div>

        </article>

        <br/>
    <?php endforeach; ?>
</div>


<?php require_once 'footer.php';  ?>