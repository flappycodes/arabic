<div class="container">
  	<?php echo Form::open(array('class' => 'login-form')); ?>     
    	<div class="login-wrap">
    		<p class="login-img"><i class="icon_lock_alt"></i></p>
			
			<?php if ($val->error('email')): ?>
				<span class="control-label"><?php echo $val->error('email')->get_message('You must provide a username or email'); ?></span>
			<?php endif; ?>
    		<div class="input-group <?php echo ! $val->error('email') ?: 'has-error' ?>">
    			<span class="input-group-addon"><i class="icon_profile"></i></span>
     			<?php echo Form::input('email', Input::post('email'), array('class' => 'form-control', 'placeholder' => 'Email or Username', 'autofocus')); ?>
    		</div>
			
			<?php if ($val->error('password')): ?>
					<span class="control-label"><?php echo $val->error('password')->get_message(':label cannot be blank'); ?></span>
				<?php endif; ?>
    		<div class="input-group <?php echo ! $val->error('password') ?: 'has-error' ?>">
        		<span class="input-group-addon"><i class="icon_key_alt"></i></span>
        		<?php echo Form::password('password', null, array('class' => 'form-control', 'placeholder' => 'Password')); ?>
    		</div>

    		<?php echo Form::submit(array('value'=>'Login', 'name'=>'submit', 'class' => 'btn btn-primary btn-lg btn-block')); ?>
    	</div>
  	<?php echo Form::close(); ?>
</div>


 
