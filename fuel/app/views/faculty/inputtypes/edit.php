<h2>Editing Inputtype</h2>
<br>

<?php echo render('faculty/inputtypes/_form'); ?>
<p>
	<?php echo Html::anchor('faculty/inputtypes/view/'.$inputtype->id, 'View'); ?> |
	<?php echo Html::anchor('faculty/inputtypes', 'Back'); ?></p>
