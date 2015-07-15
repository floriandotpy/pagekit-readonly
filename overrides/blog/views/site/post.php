<?php

$view->script('comments', 'blog:app/bundle/comments.js', ['vue', 'uikit-notify'])

?>

<article class="major">

    <h2><?= $post->getTitle() ?></h2>

    <div><?= $post->getContent() ?></div>

    <div id="comments"></div>

</article>
