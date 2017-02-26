<h2>Editing Optiongroup</h2>
<br>

<?php echo render('faculty/optiongroups/_form'); ?>
<p>
	<?php echo Html::anchor('faculty/optiongroups/view/'.$optiongroup->id, 'View'); ?> |
	<?php echo Html::anchor('faculty/optiongroups', 'Back'); ?></p>
