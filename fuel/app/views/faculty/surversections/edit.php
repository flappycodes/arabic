<h2>Editing Surversection</h2>
<br>

<?php echo render('faculty/surversections/_form'); ?>
<p>
	<?php echo Html::anchor('faculty/surversections/view/'.$surversection->id, 'View'); ?> |
	<?php echo Html::anchor('faculty/surversections', 'Back'); ?></p>
