<?php
$messages_array = array();
if ($location == '') $location = 'default';
foreach ($messages as $message) {
	$wifi = false;
	$location_marker = false;
	if ($message->taxonomies->post_tag != null) {
		foreach ($message->taxonomies->post_tag as $tag) {
			if ($tag->slug == 'wifi') {
				$wifi = true;
			}
			if ($tag->slug == $location) {
				$location_marker = true;
			}
		}
	}
	if ( ($wifi && $location_marker) || !$wifi ) {
		$messages_array[] = $message;
	}
}
?>

<div class="service-web">

<?php $n=0; foreach ($messages_array as $message): ?>
	<?php if ($n%2 == 0): ?>
		<div class="row">
	<?php endif; ?>
	<?php foreach ($message->taxonomies->category as $category): ?>
		<?php if ($category->slug == 'green'): ?>
			<div class="col-sm-6"><h2><i class="icon icon-ok-circle green"></i> <?php echo $message->title ?></h2></div>
		<?php endif; ?>
		<?php if ($category->slug == 'amber'): ?>
			<div class="col-sm-6"><h2><i class="icon icon-time amber"></i> <a href="/system/<?php echo $message->name ?>"><?php echo $message->title ?></a></h2><p><?php echo $message->excerpt != '' ? $message->excerpt : '' ?></p></div>
		<?php endif; ?>
		<?php if ($category->slug == 'red'): ?>
			<div class="col-sm-6"><h2><i class="icon icon-remove-circle red"></i> <a href="/system/<?php echo $message->name ?>"><?php echo $message->title ?></a></h2><p><?php echo $message->excerpt != '' ? $message->excerpt : '' ?></p></div>
		<?php endif; ?>
	<?php endforeach; ?>
	<?php if ($n%2 == 1): ?>
		</div>
	<?php endif; ?>
	<?php $n++; ?>
<?php endforeach; ?>

</div>

		






