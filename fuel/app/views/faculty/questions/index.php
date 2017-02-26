<h2>Listing Questions</h2>
<br>
<p>
	<?php echo Html::anchor('faculty/questions/create', 'Add new Question', array('class' => 'btn btn-success')); ?>
</p>

<?php if ($questions): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Question name</th>
			<th>Question subtext</th>
			<th>Answer</th>
			<th>Option name</th>
			<th>Option answers</th>
			<th width="14%"></th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($questions as $item): ?>		<tr>
				<td><?php echo $item->question_name; ?></td>
				<td><?php echo $item->question_subtext; ?></td>
				<td><?php echo $item->answer; ?></td>
				<td><?php echo $item->option_group_id; ?></td>
				<td><?= $item->allow_multiple_option_answers == 0 ? 'No' : 'Yes'  ?></td>
				<td>
					<?php 
						echo Html::anchor('faculty/questions/view/'.$item->id, '', 
							array('class' => 'btn btn-outline btn-sm btn-info icon-eye-open', 'title' => 'View')
						); ?>
					<?php 
						echo Html::anchor('faculty/questions/edit/'.$item->id, '',
							array('class' => 'btn btn-outline btn-sm btn-warning icon-pencil', 'title' => 'Edit')
						); 
					?>
					<?php 
						echo Html::anchor('faculty/questions/delete/'.$item->id, '', 
							array('onclick' => "return confirm('Are you sure?')", 'class' => 'btn btn-outline btn-sm btn-danger icon-trash', 'title' => 'Delete')
						); 
					?>

				</td>
			</tr>
		<?php endforeach; ?>	
	</tbody>
</table>

<?php else: ?>
<p>No Questions.</p>

<?php endif; ?>