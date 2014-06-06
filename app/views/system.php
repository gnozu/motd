<?php foreach ($messages as $message): ?>
	<?php if ($message->name == $system): ?>

<h1>
<?php foreach ($message->taxonomies->category as $category): ?>
	<?php if ($category->slug == 'green'): ?>
	<i class="icon icon-ok-circle green"></i>
	<?php elseif ($category->slug == 'amber'): ?>
	<i class="icon icon-time amber"></i>
	<?php elseif ($category->slug == 'red'): ?>
	<i class="icon icon-remove-circle red"></i>
	<?php endif; ?>
<?php endforeach; ?>
	<?php echo $message->title ?>
</h1>

<p><?php echo $message->content != '' ? $message->content : '' ?></p>

	<?php endif; ?>
<?php endforeach; ?>