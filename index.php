<!doctype html>
<html lang="ru">
<head>
	<style>
		body{
			background-color: AliceBlue;
		}
	</style>
	<meta charset = "ulf-8" />
	<title>СервисЛента</title>
	<link href="css/styles.css" type="text/css" rel="stylesheet"/>
	<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
	<script type="text/javascript" src="js/scripts.js"></script>
</head>
<body>
	<?php
		include 'php/db.php';
		$res = mysqli_query($db, 'SELECT `ID`, `Name_P`, `Text_P` FROM `posts` ORDER BY `ID` DESC LIMIT 10');
				
		$maspost = array();
		while ($row = mysqli_fetch_assoc($res)) {
			$maspost[] = $row;
		}
	?>
	<section_t>
		<form action="" method="post">
			<table>
				<tr>
					<td><input type="text" name="Name_P" id="name_post" placeholder="Заголовок" value="<?= isset($_GET['red']) ? $product['Name_P'] : ''; ?>"></td>
				</tr>
				<tr>
					<td><input type="text" name="Text_P" id="text_post" placeholder="Поле для записи" value="<?= isset($_GET['red']) ? $product['Text_P'] : ''; ?>"></td>
				</tr>
				<tr>
					<td colspan="2"><input type="submit" value="Опубликовать"></td>
				</tr>
			</table>
		</form>
	</section_t>
	<div id='Post'>
		<?php foreach ($maspost as $posts): ?>
			<section_posts">
				<p><b><?php echo $posts['Name_P']; ?></b><br />
				<?php echo "<p><b>{$posts['Text_P']}</b><br/>
				<a href='?del={$result['ID']}'>Удалить</a>	-<a href='?red={$result['ID']}'>	Редактировать</a></p>"; ?></p>
			</section_posts>
		<?php endforeach; ?>
	</div>
</body>
</html>