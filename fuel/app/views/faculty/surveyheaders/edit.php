<h2>Editing Surveyheader</h2>
<br>

<?php echo render('faculty/surveyheaders/_form'); ?>
<p>
	<?php echo Html::anchor('faculty/surveyheaders/view/'.$surveyheader->id, 'View'); ?> |
	<?php echo Html::anchor('faculty/surveyheaders', 'Back'); ?></p>
