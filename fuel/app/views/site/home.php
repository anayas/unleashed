

<h1 id="logo">
				<?= Html::anchor('/', Asset::img('unLeashedLogoWhite2.png', array('width'=>'133', 'height'=>'81.5'))) ?>
			</h1>
			<!--
<nav id="globalNav">
				<ul>
					<li><?= Html::anchor('parks', 'Parks') ?></li>
					<li><?= Html::anchor('map', 'Map') ?></li>
					<li><?= Html::anchor('about', 'About') ?></li>
				</ul>
			</nav>
-->
			<p id="Lab">
			<?= Html::anchor('/', Asset::img('dogandtree.png', array('width'=>'294', 'height'=>'426'))) ?>

			<p id="person">
			<?= Html::anchor('/', Asset::img('people.png', array('width' => '31', 'height' => '37'))) ?>
			
			<p id="enter">
			<?= Html::anchor('/parks', Asset::img('enter.png', array('width' => '86', 'height' => '32'))) ?>
			
		</header>


<?= $body ?>
