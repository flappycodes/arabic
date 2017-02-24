<h2>Listing users</h2>
<br>
<?php if ($users): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Username</th>
			<th>Name</th>
			<th>Year</th>
			<th>Status</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
	<?php foreach ($users as $u): ?>		
		<tr>
			<td><?=$u->username ?></td>
			<td><?=$u->fname.', '.$u->lname.' '.$u->mname ?></td>
			<td><?=$u->year ?></td>
			<td><?= $u->status == '0' ? 'Active' : 'Inactive' ?></td>
			<td>
				<?php echo Html::anchor('admin/unitofmeasures/view/'.$u->id, 'View'); ?> |
				<?php echo Html::anchor('admin/unitofmeasures/edit/'.$u->id, 'Edit'); ?> |
				<?php echo Html::anchor('admin/unitofmeasures/delete/'.$u->id, 'Delete', array('onclick' => "return confirm('Are you sure?')")); ?>

			</td>
		</tr>
	<?php endforeach; ?>	
	</tbody>
</table>

<?php else: ?>
<p>No Unitofmeasures.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('admin/unitofmeasures/create', 'Add new Unitofmeasure', array('class' => 'btn btn-success')); ?>

</p>
