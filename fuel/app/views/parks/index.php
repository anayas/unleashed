<!-- html and php for the parks page on the site -->

<!-- output parks query from database. will just list on page with-out user entry in searchBar -->
	<!--
<ul>
	<?php foreach ($parks as $park): ?>
		<li><?= $park->parkname ?></li>
	<?php endforeach; ?>
	</ul>
-->

	<nav id="searchBar">
			<?= Form::open(array('id' => 'searchParks', 'method' => 'get', 'action' => 'parks/search')) ?>
				<input id="search" type="search" name="city" placeholder="Type a City in Florida"
				       value="<?= isset($query) ? $query : null ?>">
				<button type="submit">Filter</button>
				<?= Html::anchor('parks', '') ?>
				<?= Asset::img('search4.png', array('width' => '90', 'height' => '33')) ?>
			</form>
		</nav>
		
		<!--
<nav id="globalNav">
				<ul>
					<li><?= Html::anchor('parks', 'Parks') ?></li>
					<li><?= Html::anchor('map', 'Map') ?></li>
					<li><?= Html::anchor('about', 'About') ?></li>
				</ul>
		</nav>
-->


		<p id="title">
		<?= Html::anchor('/', Asset::img('dogParks.png', array('width'=>'128', 'height'=>'34.5'))) ?>
		
		<div id="parksContent">


		</div>
		
