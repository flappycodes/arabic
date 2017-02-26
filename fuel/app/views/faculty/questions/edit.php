<h2>Editing Question</h2>
<br>

<?php echo render('faculty/questions/_form'); ?>
<p>
	<?php echo Html::anchor('faculty/questions/view/'.$question->id, 'View'); ?> |
	<?php echo Html::anchor('faculty/questions', 'Back'); ?></p>
