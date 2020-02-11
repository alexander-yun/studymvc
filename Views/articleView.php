<?php
/**
 * @var array $data - массив новостей
 */

?>
<a class="btn" id="link_add_news" href="/article/show"><button type="submit">Добавить новость</button></a>
<a class="btn" id="link_add_news" href="/news/list"><button type="submit">показать все новости</button></a>
<h2>Новость</h2>
<div class="news-block">
        <div class="news-item" style="  border: 1px solid black">
            <form id="articleForm" action="/article/submit" method="post">
                <div class="title">
                    <span>  <input type="text" name="title" value="<?php  echo $title;?>"> </span>
                </div>

                <div class="description">
                    <span> <textarea name="description"> <?php echo $description;?> </textarea> </span>
                </div>

                <button type="submit" form="articleForm" class=".button3" name="articleId" value="<?php echo $id;?>"> Отправить </button>
            </form>

        </div>

</div>