<h2>Editing Surveycomment</h2>
<br>

<?php echo render('faculty/surveycomments/_form'); ?>
<p>
	<?php echo Html::anchor('faculty/surveycomments/view/'.$surveycomment->id, 'View'); ?> |
	<?php echo Html::anchor('faculty/surveycomments', 'Back'); ?></p>
