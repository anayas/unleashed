	<div id="parkContent">
	<ul>
	<?php foreach ($parks as $park): ?>
		<h2 id="parkname"><?= $park->parkname ?></h2>
		<h3 id="address"><?= $park->street, $park->city, $park->zip ?></h3>
		<p id="description"><?=$park->description ?></p>
	<?php endforeach; ?>
	</ul>
	</div>