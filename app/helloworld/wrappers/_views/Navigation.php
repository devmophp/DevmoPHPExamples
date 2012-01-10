<style type="text/css">
	div.navigation {
		border-bottom: 10px solid #0071BD;
	}
	div.navigation table {
		border-collapse: collapse;
	}
	div.navigation table td {
		background-color: #44B5FF;
		padding: 5px;
		width: 100px;
		text-align: center;
	}
	div.navigation table a {
		font: normal 16px arial;
		color: white;
		text-decoration: none;
	}
	div.navigation table a:hover {
		color: #C0C0C0;
	}
	div.navigation table td.front {
		background-color: #0071BD;
		width: 150px;
	}
	div.navigation table td.front a {
		font-weight: bold;
		font-size: 20px;
	}
	div.navigation table td.front a:hover {
	}
</style>
<div class="navigation">
	<table>
		<tr>
			<td class="<?=($this->page=='helloworld.home.controllers.index'?'front':'back')?>"><a href="/index.php/home/index">home</a></td>
			<td class="<?=($this->page=='helloworld.content.controllers.aboutus'?'front':'back')?>"><a href="/index.php/content/about-us">about us</a></td>
			<td class="<?=($this->page=='helloworld.content.controllers.press'?'front':'back')?>"><a href="/index.php/content/press">press</a></td>
			<td class="<?=($this->page=='helloworld.contactus.controllers.form'?'front':'back')?>"><a href="/index.php/contactus/form">contact us</a></td>
			<td class="<?=($this->page=='helloworld.jobs.controllers.index'?'front':'back')?>"><a href="/index.php/jobs/index">jobs</a></td>
		</tr>
	</table>
</div>