<?php
/**
 * @var array $data - массив новостей
 */
?>
<?php require_once 'head.php';  ?>

<a class="btn" id="link_add_news" href="/article/show"><button type="submit">Добавить новость</button></a>
<a class="btn" id="link_add_news" href="/news/list"><button type="submit">показать все новости</button></a>
<h2>Новость</h2>
<div class="news-block">
        <div class="container">
            <form id="articleForm" action="/article/submit" method="post">
                <div>
                    <span><input class="article input" type="text" name="title" placeholder="Заголовок новости" value="<?php  echo $title;?>"> </span>
                </div>

                <div class="description">
                    <span>
                        <textarea class="article input" name="description" placeholder="текст новости"><?php echo $description;?></textarea>
                    </span>
                </div>

                <button type="submit" form="articleForm" class=".button3" name="articleId" value="<?php echo $id;?>"> Отправить </button>
            </form>

        </div>

</div>

<?php require_once 'footer.php';  ?>