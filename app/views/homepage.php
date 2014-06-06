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

<ul class="service-status">

<?php foreach ($messages_array as $message): ?>
	<?php foreach ($message->taxonomies->category as $category): ?>
		<?php if ($category->slug == 'green'): ?>
			<li class="alert alert-success"><i class="glyphicon glyphicon-ok-circle green"></i> <strong><?php echo $message->title ?></strong></li>
		<?php endif; ?>
		<?php if ($category->slug == 'amber'): ?>
			<li class="alert alert-warning"><i class="glyphicon glyphicon-time amber"></i> <strong><?php echo $message->title ?></strong></li>
		<?php endif; ?>
		<?php if ($category->slug == 'red'): ?>
			<li class="alert alert-danger"><i class="glyphicon glyphicon-remove-circle red"></i> <strong><?php echo $message->title ?></strong></li>
		<?php endif; ?>
	<?php endforeach; ?>
<?php endforeach; ?>

</ul>

		


<div id="carousel-example-generic" class="carousel slide" data-interval="5000" data-ride="carousel">

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
  <?php $n = 0; ?>
	<?php foreach ($messages_array as $message): ?>
		<?php foreach ($message->taxonomies->category as $category): ?>
			<?php if ($category->slug == 'amber'): ?>
				<?php $n++; ?>
				<div class="item <?php if ($n == 1) echo 'active'?>">
					<div class="alert alert-warning"><h2><?php echo $message->title ?></h2><p><?php echo $message->content ?></p></div>
				</div>
			<?php endif; ?>
			<?php if ($category->slug == 'red'): ?>
				<?php $n++; ?>
				<div class="item <?php if ($n == 1) echo 'active'?>">
					<div class="alert alert-danger"><h2><?php echo $message->title ?></h2><p><?php echo $message->content ?></p></div>
				</div>
			<?php endif; ?>
		<?php endforeach; ?>
	<?php endforeach; ?>

  </div>

</div>





