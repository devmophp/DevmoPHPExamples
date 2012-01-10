<h1>the jobs page</h1>
<div>
<? if ($this->jobs) : ?>
<table>
	<tr>
		<td colspan="3"><h3>jobs - <?=$this->date?></h3></td>
	</tr>
	<tr>
		<th>id</th>
		<th>department</th>
		<th>title</th>
		<th>description</th>
	</tr>
	<?php foreach ($this->jobs as $job) : ?>
	<tr>
		<td><?=$job->id?></td>
		<td><?=$job->department?></td>
		<td><?=$job->title?></td>
		<td><?=$job->description?></td>
	</tr>
	<?php endforeach ?>
</table>
<?php else : ?>
no jobs found :(
<?php endif ?>
</div>
