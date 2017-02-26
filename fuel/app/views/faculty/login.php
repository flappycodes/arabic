<div class="col-md-4 col-md-offset-4">
    <div class="login-panel panel panel-default">
    	<?php echo Form::open(array()); ?>
    	<div class="panel-heading" align="center">
    		<h4>
    			SALMONAN ARABIC ISLAMIC INSTITUTE WEB-APPLICATION
    		</h4>
    	</div>
        <div class="panel-heading">
            <h3 class="panel-title">Please Sign In</h3>
        </div>
        <div class="panel-body">
            	<?php if (isset($_GET['destination'])): ?>
					<?php echo Form::hidden('destination', $_GET['destination']); ?>
				<?php endif; ?>

				<?php if (isset($login_error)): ?>
					<div class="error"><?php echo $login_error; ?></div>
				<?php endif; ?>
                <fieldset>
                    <div class="form-group <?php echo ! $val->error('email') ?: 'has-error' ?>">
                        <label for="email">Email or Username:</label>
						<?php echo Form::input('email', Input::post('email'), array('class' => 'form-control', 'placeholder' => 'Email or Username', 'autofocus')); ?>

						<?php if ($val->error('email')): ?>
							<span class="control-label"><?php echo $val->error('email')->get_message('You must provide a username or email'); ?></span>
						<?php endif; ?>
                    </div>
                    <div class="form-group <?php echo ! $val->error('password') ?: 'has-error' ?>">
                        <label for="password">Password:</label>
						<?php echo Form::password('password', null, array('class' => 'form-control', 'placeholder' => 'Password')); ?>

						<?php if ($val->error('password')): ?>
							<span class="control-label"><?php echo $val->error('password')->get_message(':label cannot be blank'); ?></span>
						<?php endif; ?>
                    </div>
                </fieldset>
        </div>
        <div>
        	<?php echo Form::submit(array('value'=>'Login', 'name'=>'submit', 'class' => 'btn btn-primary btn-block btn-flat')); ?>
        </div>
        <?php echo Form::close(); ?>
    </div>
</div>