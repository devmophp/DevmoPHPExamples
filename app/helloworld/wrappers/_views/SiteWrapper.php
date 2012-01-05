<html>
	<head>
		<title>Hellow World!</title>
		<style>
			body {
				background: #C3E4FE;
				margin: 10%;
			}
			div.navigation {
				background: #0071BD;
				margin: 5px auto;
				padding: 10px;
				font: bold 18px arial;
				color: white;
			}
			div.navigation a {
				color: white;
				text-decoration: none;
				margin: 0 25px;
			}
			div.navigation a:hover {
				color: #C0C0C0;
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
		<div class="navigation"><?=$this->navigation?></div>
		<div class="content"><?=$this->content?></div>
	</body>
</html>