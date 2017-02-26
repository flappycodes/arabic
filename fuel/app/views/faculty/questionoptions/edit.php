<h2>Editing Questionoption</h2>
<br>

<?php echo render('faculty/questionoptions/_form'); ?>
<p>
	<?php echo Html::anchor('faculty/questionoptions/view/'.$questionoption->id, 'View'); ?> |
	<?php echo Html::anchor('faculty/questionoptions', 'Back'); ?></p>
