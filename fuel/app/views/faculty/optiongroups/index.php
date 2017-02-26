<h2>Listing Optiongroups</h2>
<br>
<?php if ($optiongroups): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Option group name</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($optiongroups as $item): ?>		<tr>

			<td><?php echo $item->option_group_name; ?></td>
			<td>
				<?php echo Html::anchor('faculty/optiongroups/view/'.$item->id, 'View'); ?> |
				<?php echo Html::anchor('faculty/optiongroups/edit/'.$item->id, 'Edit'); ?> |
				<?php echo Html::anchor('faculty/optiongroups/delete/'.$item->id, 'Delete', array('onclick' => "return confirm('Are you sure?')")); ?>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Optiongroups.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('faculty/optiongroups/create', 'Add new Optiongroup', array('class' => 'btn btn-success')); ?>

</p>
