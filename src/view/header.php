<?php

use appName\Html\Menu;
$menu = new Menu();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>
		<?= $config['appName']?>
	</title>
	<link rel="stylesheet" href="src/design/css/bootstrapCSS/bootstrap.min.css">
	<link rel="stylesheet" href="src/design/css/style.css">
</head>
<body>
    <header>
        <nav>
			<?= $menu->activeMenu(
						'section', 
						['home', 'onglet2', 'onglet3', 'onglet 4']
					);
			?>
		</nav>
    </header>
	<div class="clear"></div>