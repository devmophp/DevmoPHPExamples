<html>
	<head>
		<title>Hellow World!</title>
		<style type="text/css">
			body {
				background: #C3E4FE;
				margin: 10%;
			}
			div.content {
				background: white;
				margin: 5px auto;
				padding: 10px;
				font: normal 12px arial;
			}
		</style>
	</head>
	<body>
		<?=$this->navigation?>
		<div class="content"><?=$this->content?></div>
		<?=$this->poweredby?>
	</body>
</html>