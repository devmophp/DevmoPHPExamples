<p>At the People page!</p>

<div>
<? if ($this->people) : ?>
<table>
	<tr>
		<td colspan="3">People - <?=$this->date?></td>
	</tr>
	<tr>
		<th>id</th>
		<th>first name</th>
		<th>last name</th>
	</tr>
	<?php foreach ($this->people as $person) : ?>
	<tr>
		<td><?=$person->id?></td>
		<td><?=$person->firstName?></td>
		<td><?=$person->lastName?></td>
	</tr>
	<?php endforeach ?>
</table>
<?php else : ?>
no people found :(
<?php endif ?>
</div>