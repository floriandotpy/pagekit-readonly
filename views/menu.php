<?php if ($root->getDepth() === 0) : ?>
<ul>
    <?php endif ?>

    <?php foreach ($root->getChildren() as $node) : ?>

        <li>
            <a href="<?= $view->url($node->getRoutePath()) ?>" class="<?= $node->get('active') ? ' active' : '' ?>"><?= $node->getTitle() ?></a>
        </li>

    <?php endforeach ?>

    <?php if ($root->getDepth() === 0) : ?>
</ul>
<?php endif ?>
