<div class="col-md-12">
	<h3 class="page-header"><i class="fa fa-users"></i> Users</h3>
	<ol class="breadcrumb">
	    <li><?php echo Html::anchor('admin', '<i class="fa fa-home"></i> Dashboard') ?></li>
	    <li><i class="fa fa-users"></i>Users</li> 
	</ol>

	<h2>List of users</h2>
	<br>
	<p>
		<?php echo Html::anchor('admin/users/create', 'New User', array('class' => 'btn btn-success')); ?>
	</p>
	<?php if ($users): ?>
		<table class="table table-striped" id="userstbl">
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
						<?php echo Html::anchor('admin/users/view/'.$u->id, '', array('class' => 'btn btn-info fa fa-eye', 'title' => 'View')); ?>
						<?php echo Html::anchor('admin/users/edit/'.$u->id, '', array('class' => 'btn btn-info fa fa-pencil', 'title' => 'View')); ?>
						<?php // echo Html::anchor('admin/users/delete/'.$u->id, 'Delete', array('onclick' => "return confirm('Are you sure?')")); ?>

					</td>
				</tr>
			<?php endforeach; ?>	
			</tbody>
		</table>

	<?php else: ?>
		<p>No Users foound!.</p>
	<?php endif; ?>
</div>