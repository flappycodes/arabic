<h2>Editing Answer</h2>
<br>

<?php echo render('faculty/answers/_form'); ?>
<p>
	<?php echo Html::anchor('faculty/answers/view/'.$answer->id, 'View'); ?> |
	<?php echo Html::anchor('faculty/answers', 'Back'); ?></p>
