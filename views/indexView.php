<!doctype html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8" />
	<title><?php echo $title?></title>
</head>
<body>

	<?php if (isset($posts)): ?>
	   <?php foreach ($posts as $key => $value): ?>
	       <?php echo sprintf('<p>%s</p>', $value['title'])?>
	   <?php endforeach;?>
	<?php endif;?>
	
</body>
</html>