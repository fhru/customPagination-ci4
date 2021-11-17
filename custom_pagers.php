<?php

/**
 * @var \CodeIgniter\Pager\PagerRenderer $pager
 */

$pager->setSurroundCount(2);
?>

<nav aria-label="<?= lang('Pager.pageNavigation') ?>">
    <div class="flex text-white text-opacity-50">
        <?php if ($pager->hasPrevious()) : ?>
            <a class="hover:text-white bg-white  bg-opacity-25 p-2 rounded mx-1" href="<?= $pager->getFirst() ?>">
                <span>First</span>
            </a>
        <?php endif ?>

        <?php foreach ($pager->links() as $link) : ?>
            <a href="<?= $link['uri']; ?>" class="hover:text-white bg-white bg-opacity-25 px-3 py-2 rounded mx-1 <?= $link['active'] ? 'active' : ''; ?>">
                <?= $link['title']; ?>
            </a>
        <?php endforeach; ?>


        <?php if ($pager->hasNext()) : ?>
            <a class="hover:text-white bg-white bg-opacity-25 p-2 rounded mx-1" href="<?= $pager->getNext() ?>">
                <span aria-hidden="true"><?= lang('Pager.next') ?></span>
            </a>
            <a class="hover:text-white bg-white bg-opacity-25 p-2 rounded mx-1" href="<?= $pager->getLast() ?>">
                <span aria-hidden="true"><?= lang('Pager.last') ?></span>
            </a>
        <?php endif ?>
    </div>
</nav>