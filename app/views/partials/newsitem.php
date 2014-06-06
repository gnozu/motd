<div class="col-sm-4 promo">
	<a href="<?php echo $item->id ?>">
		<div>
			<img src="<?php echo $item->media[0]->sizes[0]->url ?>" alt="<?php echo $item->media[0]->sizes[2]->name ?>" />
			<span><?php echo $item->primary_category->name ?></span>
		</div>
		<h2><?php echo $item->title; ?></h2>
		<p><?php echo date('F j, Y', strtotime($item->date)) ?></p>
		<p><?php echo $item->excerpt ?></p>
	</a>
</div>