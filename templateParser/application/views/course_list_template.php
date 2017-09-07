<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Kurs Listesi</title>
</head>
<body>

<h1>{title}</h1>
<hr>

<ul>
	{courses}
		<h3>{title} [{course_code}]</h3>
		<p>{description}</p>
	{/courses}
</ul>

</body>
</html>