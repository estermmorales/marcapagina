<?php

use CodeIgniter\Pager\PagerRenderer;

/**
 * @var PagerRenderer $pager
 */
$pager->setSurroundCount(2);
?>

<nav aria-label="<?= lang('Pager.pageNavigation') ?>">
	<ul class="pagination flex gap-3">
		<?php if ($pager->hasPrevious()) : ?>
			<li>
				<a class="min-h-[38px] min-w-[38px] py-2 px-2.5 inline-flex justify-center items-center gap-x-2 text-sm rounded border border-transparent text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none" href="<?= $pager->getPrevious() ?>" aria-label="<?= lang('Pager.previous') ?>">
				<svg class="flex-shrink-0 w-3.5 h-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m15 18-6-6 6-6"/></svg>
					<span aria-hidden="true"></span>
				</a>
			</li>
		<?php endif ?>
		
		<?php foreach ($pager->links() as $link) : ?>
			<div>
				<li class="min-h-[38px] min-w-[38px] flex justify-center items-center border bg-white border-gray-200 text-gray-800 py-2 px-3 text-sm rounded focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none" <?= $link['active'] ? 'class="active"' : '' ?>>
					<a href="<?= $link['uri'] ?>">
						<?= $link['title'] ?>
					</a>
				</li>
			</div>
		<?php endforeach ?>

		<?php if ($pager->hasNext()) : ?>
			<li>
				<a class="min-h-[38px] min-w-[38px] py-2 px-2.5 inline-flex justify-center items-center gap-x-2 text-sm rounded border border-transparent text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none" href="<?= $pager->getNext() ?>" aria-label="<?= lang('Pager.next') ?>">
					<span aria-hidden="true"><?= lang('Pager.next') ?></span>
					
				</a>
			</li>
		<?php endif ?>

	</ul>
</nav>
