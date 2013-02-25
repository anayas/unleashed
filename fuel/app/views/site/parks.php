
<article>
		<header>
		<nav id="searchBar">
			<?= Form::open(array('id' => 'searchParks', 'method' => 'get', 'action' => 'parks/search')) ?>
				<input id="search" type="search" name="city" placeholder="Filter Parks" value="<?= isset($query) ? $query : null ?>">
				<button type="submit">Filter</button>
				<?= Html::anchor('parks', 'Parks') ?>
				<?= Asset::img('search4.png', array('width' => '90', 'height' => '33')) ?>
			</form>
		</nav>




		



				<!-- <h1 id="bird"><img width="67" height="65" src="images/bird.png"></h1> -->
		<h1 id="title" class="titles"><img src="images/dogParks.png" width="128" height="34.5"></h1>
			
			<div id="parksContent">
			
			
			
			</div>
	<?= $body ?>