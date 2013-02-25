<!DOCTYPE>
<html>
  <head>
	<meta charset="UTF-8" />
	<title>UnLeashed Florida</title>
	<!--  Mobile viewport optimized: j.mp/bplateviewport -->
	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="320"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<!-- Mobile IE needs ClearType for smoothing fonts -->
	<meta http-equiv="cleartype" content="on">
		
	<?= Asset::css('main.css') ?>
  </head>
	
  <body>
	<div id="fb-root"></div>
						
				
	<article>
		<header>
		<!--
<nav id="searchBar">
			<?= Form::open(array('id' => 'searchParks', 'method' => 'get', 'action' => 'parks/search')) ?>
				<input id="search" type="search" name="city" placeholder="Filter Parks" value="<?= isset($query) ? $query : null ?>">
				<button type="submit">Filter</button>
				<?= Html::anchor('parks', 'Parks') ?>
				<?= Asset::img('search4.png', array('width' => '90', 'height' => '33')) ?>
			</form>
		</nav>
-->

		
		
			<h1 id="logo">
				<?= Html::anchor('/', Asset::img('unLeashedLogoWhite2.png', array('width'=>'133',
				'height'=>'81.5'))) ?>
			</h1>
			<nav id="globalNav">
				<ul>
					<li><?= Html::anchor('parks', 'Parks') ?></li>
					<li><?= Html::anchor('map', 'Map') ?></li>
					<li><?= Html::anchor('about', 'About') ?></li>
				</ul>
			</nav>
			<h1 id="bird">
			<?= Asset::img('bird.png', array('width'=>'67', 'height'=>'65')) ?>
			
			<h1 id="headersaying">
			<?= Asset::img('headerSaying.png', array('width'=>'240.5', 'height'=>'63.5')) ?>
			<p id="Lab">
			<?= Asset::img('dogandtree.png', array('width'=>'294', 'height'=>'426')) ?>

			<p id="person">
			<?= Asset::img('people.png', array('width' => '45', 'height' => '51')) ?>
			
			<p id="enter">
			<?= Html::anchor('/parks', Asset::img('enter.png', array('width' => '86', 'height' => '32'))) ?>
			
		</header>

<?= $body ?>



		<footer>
			<h2 id="footerSayingLine1">
				<?= Asset::img('footerSaying.png', array('width'=>'246', 'height'=>'135')) ?>
			</h2>
			
				<!-- <p id="dog2"><img width="35" height="35" src="images/dog2.png"></p>	 -->	
				<!--
				<h2 id="footerSayingLine1" class="footerSaying">Where dogs</h2> 
				<h2 id="footerSayingLine2" class="footerSaying">can be dogs and...</h2>
				<h2 id="footerSayingLine3" class="footerSaying">people can connect!</h2>
				-->
			<div id="footerNav">
				<nav>
					<ul>
						<li><?= Html::anchor('parks', 'Parks') ?></li>
						<li><?= Html::anchor('map', 'Map') ?></li>
						<li><?= Html::anchor('about', 'About') ?></li>
						<li id="socialTitle">Socialize</li>
						<li id="contactTitle">Contact</li>
					</ul>
				
				</nav>
			</div>

			<ul id="socialIcons">
				<li id="twitter">
					<a href="#">
						<?= Asset::img('twitter.png', array('height' => '38.5', 'height' => '38.5')) ?>
					</a>
				</li>
				<li id="facebook">
					<?= Html::anchor('https://www.facebook.com/UnLeashedFlorida', Asset::img('facebook.png', array('height' => '37.5', 'height' => '37.5'))) ?>
				</li>
			</ul>
			<div id="footerCopy">
				<p id="myEmail"><a href="jillianAnayas@fullsail.edu">Jill Anayas</a></p>
				<p id="companyName">{dressCode}<span>DEVELOPERS</span></p>
				<p id="copyright">UnLeashed. 2013. All Rights Reserved.</p>
			</div>
		<footer>
	</article>

	<!--
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
	<script src="js/site.js" type="text/javascript"></script>	
	-->
  </html>