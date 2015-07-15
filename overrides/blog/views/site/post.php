<article class="major">

    <h2><?= $post->getTitle() ?></h2>

    <div><?= $post->getContent() ?></div>

    <?= $view->render('blog:views/site/comment-index.php') ?>

</article>
