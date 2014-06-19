 <?php require './application/views/layout/header.php'; ?>

 <h3 style="color:rgb(139,0,0);
 			text-align:center;
 			text-decoration:underline;
 			padding:10px 0px 30px 0px;">Best Actors Since Forever</h3>

<table class="table">
		<thead>
			<tr>
			<th>FirstName</th>
			<th>LastName</th>
			<th>Best Movie</th>
			<th>Rating</th>
		</tr>
		</thead>
	<tbody>
		<?php foreach ($actors as $actor): ?>
		<tr>
				<td><?=$actor->firstname?></td>
				<td><?=$actor->lastname?></td>
				<td><?=$actor->bestMovie?></td>
				<td><?=$actor->rating?></td>
		<tr>
		<?php endforeach ?>
	</tbody>
</table>

<?php require './application/views/layout/footer.php'; ?>
