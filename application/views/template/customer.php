<?php include ('header.php.tpl'); ?>
<div class ="container">
	<table class="table table-striped table hover">
		<thead>
			<tr>
					<th>Imie</th>
					<th>Nazwisko</th>
					<th>Telefon</th>
					<th>Ulica</th>
					<th>Miasto</th>
					<th>Kod Pocztowy</th>
					<th>Opis</th>
					<th>Operacje</th>
			</tr>
		</thead>
		<tbody>
			<?php
				if($records->num_rows() > 0) {
					foreach ($records->result() as $record ) { ?>
						<tr>
							<td>{$record['name']}</td>
							<td><?php echo $record->surname; ?></td>
							<td><?php echo $record->phone; ?></td>
							<td><?php echo $record->street; ?></td>
							<td><?php echo $record->city; ?></td>
							<td><?php echo $record->post_code; ?></td>
							<td><?php echo $record->description; ?></td>
							<td></td>
						</tr>
						<?php
					}
				} else { ?>
					<tr> Nie Znaleziono Rekordów!</tr>
				<?php } ?>
			</tbody>
	</table>
</div>
<?php include ('footer.php'); ?>
