<article class="major">

    IT WORKS
    <h2><?= $post->getTitle() ?></h2>

    <div><?= $post->getContent() ?></div>

    <?= $view->render('views:blog/comment-index.php') ?>

</article>
