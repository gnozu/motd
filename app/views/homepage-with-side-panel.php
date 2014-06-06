<h1 class="screenreader-only">News</h1>

<div class="row-fluid first-section">
	<div class='span12'>
		<div class="block block-hero">
			<a class="b-inner" href="#">
				<div class="b-thumb">
						<img alt="Mountains" src="images/promo-parrot.jpg">					</div>
				<div class="b-text">
					<h2 class="b-title">Researchers aim to understand impacts of invasive parrots</h2>
					<p> Kent scientists lead network to understand parrots that have invaded cities.</p>
				</div>
			</a>
			<div class="attribution">Picture by <a href="#">FlickrName</a>. Licensed under <a href="#">CC-BY</a></div>
		</div>
	</div>
	<div class="row-fluid">
		<div class='span8'>
			<div class="row-fluid">

				<?php $item = $news_items[0] ?>
				<div class="span6 promo">
					<a href="<?php echo $item->id ?>">
						<div>
							<img src="<?php echo $item->media[0]->sizes[0]->url ?>" alt="<?php echo $item->media[0]->sizes[2]->name ?>" />
							<span><?php $cats = '';foreach ($item->taxonomies->category as $cat) $cats .= $cat->name . ', '; echo substr($cats, 0, -2)?></span>
						</div>
						<h2><?php echo $item->title; ?></h2>
						<p><?php echo date('F j, Y', strtotime($item->date)) ?></p>
						<p><?php echo $item->excerpt ?></p>
					</a>
				</div>

				<?php $item = $news_items[1] ?>
				<div class="span6 promo">
				<a href="<?php echo $item->id ?>">
					<div class="promo-img">
						<img src="<?php echo $item->media[0]->sizes[0]->url ?>" alt="<?php echo $item->media[0]->sizes[2]->name ?>" />
						<span class="category"><?php $cats = '';foreach ($item->taxonomies->category as $cat) $cats .= $cat->name . ', '; echo substr($cats, 0, -2)?></span>
					</div>
					<h2><?php echo $item->title; ?></h2>
					<p><?php echo date('F j, Y', strtotime($item->date)) ?></p>
					<p><?php echo $item->excerpt ?></p>
		
				</a>
				</div>
			</div>


			<div class="row-fluid">

				<?php $item = $news_items[2] ?>
				<a class="span6 promo" href="<?php echo $item->id ?>">
					<div class="promo-img">
						<img src="<?php echo $item->media[0]->sizes[0]->url ?>" alt="<?php echo $item->media[0]->sizes[2]->name ?>" />
						<span class="category"><?php $cats = '';foreach ($item->taxonomies->category as $cat) $cats .= $cat->name . ', '; echo substr($cats, 0, -2)?></span>
					</div>
					<h2><?php echo $item->title; ?></h2>
					<span class="news-date"><?php echo date('F j, Y', strtotime($item->date)) ?></span>
					<p><?php echo $item->excerpt ?></p>
		
				</a>

				<?php $item = $news_items[3] ?>
				<a class="span6 promo" href="<?php echo $item->id ?>">
					<div class="promo-img">
						<img src="<?php echo $item->media[0]->sizes[0]->url ?>" alt="<?php echo $item->media[0]->sizes[2]->name ?>" />
						<span class="category"><?php $cats = '';foreach ($item->taxonomies->category as $cat) $cats .= $cat->name . ', '; echo substr($cats, 0, -2)?></span>
					</div>
					<h2><?php echo $item->title; ?></h2>
					<span class="news-date"><?php echo date('F j, Y', strtotime($item->date)) ?></span>
					<p><?php echo $item->excerpt ?></p>
		
				</a>
			</div>


			<div class="row-fluid">
				<input type="submit"  class="btn secondary-action lrg-btn more-results" value="Show more">
			</div>

		</div><!-- ./span8 -->


		<div class='span4' >	

			<div class="news-panel">
				<h2>Popular</h2>
				<ul>
					<li>
						<a href="http://www.kent.ac.uk/calendar/?eid=AB7CE217-7660-409F-A789-CAA5CDBC6FDA">
							<img alt="BBC logo" src="images/promo-xsmall-gravity.png">
							<h3>Gravity Oscar success</h3>
							<p>AWARDS | May 6th 2014</p>
						</a>
					</li>
					<li>
						<a href="http://www.kent.ac.uk/calendar/?eid=AB7CE217-7660-409F-A789-CAA5CDBC6FDA">
							<img alt="BBC logo" src="images/promo-xsmall-gravity.png">
							<h3>Gravity Oscar success</h3>
							<p>AWARDS | May 6th 2014</p>
						</a>
					</li>
					<li>
						<a href="http://www.kent.ac.uk/calendar/?eid=AB7CE217-7660-409F-A789-CAA5CDBC6FDA">
							<img alt="BBC logo" src="images/promo-xsmall-gravity.png">
							<h3>Gravity Oscar success</h3>
							<p>AWARDS | May 6th 2014</p>
						</a>
					</li>
				</ul>
			</div><!-- ./news-panel -->

			<div class="news-panel">
				<h2>Popular</h2>
				<a href="http://www.kent.ac.uk/calendar/" class="more-link">More news</a>
				<ul>
					<li>
						<a href="http://www.kent.ac.uk/calendar/?eid=AB7CE217-7660-409F-A789-CAA5CDBC6FDA">
							<h3>Gravity Oscar success</h3>
							<p>AWARDS | May 6th 2014</p>
						</a>
					</li>
					<li>
						<a href="http://www.kent.ac.uk/calendar/?eid=AB7CE217-7660-409F-A789-CAA5CDBC6FDA">
							<h3>Gravity Oscar success</h3>
							<p>AWARDS | May 6th 2014</p>
						</a>
					</li>
					<li>
						<a href="http://www.kent.ac.uk/calendar/?eid=AB7CE217-7660-409F-A789-CAA5CDBC6FDA">
							<h3>Gravity Oscar success</h3>
							<p>AWARDS | May 6th 2014</p>
						</a>
					</li>
				</ul>
			</div><!-- ./news-panel -->
			
			<div class="event-panel">
				<h2>Events</h2>
				<a href="http://www.kent.ac.uk/calendar/" class="more-link">All events</a>
				<ul>
					<li>
						<div>
							<span>09</span>
							<span>May</span>
						</div>
						<a href='http://www.kent.ac.uk/calendar/?eid=AB7CE217-7660-409F-A789-CAA5CDBC6FDA'>
							<h3>Library Professional Fair</h3>
							<p>Develop your skills</p>
						</a>
					</li>
					<li>
						<div>
							<span>09</span>
							<span>May</span>
						</div>
						<a href='http://www.kent.ac.uk/calendar/?eid=AB7CE217-7660-409F-A789-CAA5CDBC6FDA'>
							<h3>Library Professional Fair</h3>
							<p>Develop your skills</p>
						</a>
					</li>
					<li>
						<div>
							<span>09</span>
							<span>May</span>
						</div>
						<a href='http://www.kent.ac.uk/calendar/?eid=AB7CE217-7660-409F-A789-CAA5CDBC6FDA'>
							<h3>Library Professional Fair</h3>
							<p>Develop your skills</p>
						</a>
					</li>
				</ul>
			</div><!-- ./event-panel -->

			<div class="news-panel">
				<h2>In the media</h2>
				<ul>
					<li>
						<a href='http://www.kent.ac.uk/calendar/?eid=AB7CE217-7660-409F-A789-CAA5CDBC6FDA'>
							<img src="images/logo-news-bbc.png" alt="BBC logo">
							<h3>University leads in research</h3>
							<p>BBC | May 6th 2014</p>
						</a>
					</li>
					<li>
						<a href='http://www.kent.ac.uk/calendar/?eid=AB7CE217-7660-409F-A789-CAA5CDBC6FDA'>
							<img src="images/logo-news-bbc.png" alt="BBC logo">
							<h3>University leads in research</h3>
							<p>BBC | May 6th 2014</p>
						</a>
					</li>
					<li>
						<a href='http://www.kent.ac.uk/calendar/?eid=AB7CE217-7660-409F-A789-CAA5CDBC6FDA'>
							<img src="images/logo-news-bbc.png" alt="BBC logo">
							<h3>University leads in research</h3>
							<p>BBC | May 6th 2014</p>
						</a>
					</li>
				</ul>

			</div><!-- ./news-panel -->


		</div><!-- ./span4 -->
	</div><!-- ./row-fluid -->
</div><!-- ./first-section -->


