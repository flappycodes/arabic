<h2>Editing Optionchoice</h2>
<br>

<?php echo render('faculty/optionchoices/_form'); ?>
<p>
	<?php echo Html::anchor('faculty/optionchoices/view/'.$optionchoice->id, 'View'); ?> |
	<?php echo Html::anchor('faculty/optionchoices', 'Back'); ?></p>
