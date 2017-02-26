<h2>Viewing #<?php echo $optiongroup->id; ?></h2>

<p>
	<strong>Option group name:</strong>
	<?php echo $optiongroup->option_group_name; ?></p>

<?php echo Html::anchor('faculty/optiongroups/edit/'.$optiongroup->id, 'Edit'); ?> |
<?php echo Html::anchor('faculty/optiongroups', 'Back'); ?>