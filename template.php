<?php defined('A') or die; /* This is Open Source script for site template */ ?>
<html>
<head>
<meta charset='UTF-8'>
<title>Сайт не существует.</title>
<meta name="description" content="Сайт не существует." />
<meta name="viewport" content="width=device-width,initial-scale=1">
<link media="all" href="/style.css?lastupdate=<?php echo filemtime('style.css')?>" rel="stylesheet">
<link rel='canonical' href='<? echo ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' .$_SERVER['HTTP_HOST'];?>/' />
<?php /* My secret key is md5 string, you can use your own key or delete the meta tag with the name="secret key". */ ?>
<meta name="key" content="51351bccf6258f98c318f3a79e7ae903" />
<?php /* This is an Open Source template for a disabled site */ ?>
</head>
<body>
<div class="important-information">Сайт не существует.</div>
<div class="section">
<p>Сегодняшняя дата: <?php echo date('d.m.Y');  ?></p>
<p>Сегодняшнее время: <?php echo date('H:i');  ?></p>
<p>По всемирному координированному времени (UTC).</p>
<p>Для более точного отображения времени необходимо обновлять страницу в браузере.</p>
</div>
</body>
</html>
