<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Kurs Listesi</title>
</head>
<body>

<h1><?php echo $title; ?></h1>
<hr>

<ul>
	<?php foreach ($courses as $course) { ?>
		<li>
			<p>
				<h3><?php echo $course->title; ?></h3>
				<p><?php echo $course->description; ?></p>
			</p>
		</li>
	<?php } ?>
</ul>

</body>
</html>