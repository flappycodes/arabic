<div class="col-md-12">
	<ol class="breadcrumb">
	    <li><?php echo Html::anchor('admin', '<i class="fa fa-home"></i> Home') ?></li>
	    <li><?php echo Html::anchor('admin/users', '<i class="fa fa-users"></i> Users') ?></li>
	    <li><i class="fa fa-plus"></i>New user</li>                          
	</ol>

	<section class="panel">
		<header class="panel-heading">New user form</header>
	  	<div class="panel-body">
	      	<div class="form">
	          	<?php echo Form::open(array("class"=>"form-horizontal")); ?>
	              	<div class="form-group">
	              		<?php echo Form::label('Username <span class="required">*</span>', 'username', array('class'=>'control-label col-lg-2')); ?>
	                  	<div class="col-lg-10">
	                      	<?php 
	                      		echo Form::input(
	                      				'username', 
	                      				Input::post('username', isset($user) ? $user->username : ''), 
	                      				array('class' => 'form-control error', 'placeholder'=>'Username', 'required')
	                      		); 
	                      	?>
	                  	</div>
	              	</div>
	              	<div class="form-group">
	                  	<?php echo Form::label('Password <span class="required">*</span>', 'password', array('class'=>'control-label col-lg-2')); ?>
	                  	<div class="col-lg-10">
	                      	<?php 
	                      		echo Form::password(
	                      				'password', 
	                      				Input::post('password', ''), 
	                      				array('class' => 'form-control error', 'placeholder'=>'Password', 'required')
	                      		); 
	                      	?>
	                  	</div>
	              	</div>
	              	<div class="form-group">
	                  	<?php echo Form::label('Email <span class="required">*</span>', 'email', array('class'=>'control-label col-lg-2')); ?>
	                  	<div class="col-lg-10">
	                      	<?php 
	                      		echo Form::input(
	                      				'email', 
	                      				Input::post('email', isset($user) ? $user->email : ''), 
	                      				array('class' => 'form-control error', 'placeholder'=>'Email', 'required')
	                      		); 
	                      	?>
	                  	</div>
	              	</div>
	              	<div class="form-group">
	              		<?php echo Form::label('Fullname <span class="required">*</span>', 'fname', array('class'=>'control-label col-lg-2')); ?>
	                  	<div class="col-lg-4">
	                      	<?php 
	                      		echo Form::input(
	                      				'fname', 
	                      				Input::post('fname', isset($user) ? $user->fname : ''), 
	                      				array('class' => 'form-control error', 'placeholder'=>'First name', 'required')
	                      		); 
	                      	?>
	                  	</div>
	                  	<div class="col-lg-2">
	                      	<?php 
	                      		echo Form::input(
	                      				'mname', 
	                      				Input::post('mname', isset($user) ? $user->mname : ''), 
	                      				array('class' => 'form-control error', 'placeholder'=>'Middle name', 'required')
	                      		); 
	                      	?>
	                  	</div>
	                  	<div class="col-lg-4">
	                      	<?php 
	                      		echo Form::input(
	                      				'lname', 
	                      				Input::post('lname', isset($user) ? $user->lname : ''), 
	                      				array('class' => 'form-control error', 'placeholder'=>'Last name', 'required')
	                      		); 
	                      	?>
	                  	</div>
	              	</div>
	              	<div class="form-group">
	              		<?php echo Form::label('Year <span class="required">*</span>', 'year', array('class'=>'control-label col-lg-2')); ?>
	                  	<div class="col-lg-10">
	                  		<?php 
	                  			echo Form::select(
	              						'year', 
	              						Input::post('year', isset($user) ? $user->year : ''), 
										array(
											'' => 'Select Year', 
											1 => 'First Year', 
											2 => 'Second Year', 
											3 => 'Third Year', 
											4 => 'Fourth Year', 
											5 => 'Fifth Year'
										),
										array('class' => 'form-control', 'required' => '')
								);
							?>
	                  	</div>
	              	</div>
	              	<div class="form-group">
	                  	<?php echo Form::label('Type <span class="required">*</span>', 'group', array('class'=>'control-label col-lg-2')); ?>
	                  	<div class="col-lg-10">
	                      	<?php 
	                  			echo Form::select(
	              						'group', 
	              						Input::post('group', isset($user) ? $user->group : ''), 
										array(
											'' => 'Select Type', 
											100 => 'Admin', 
											50 => 'Faculty', 
											1 => 'User'
										),
										array('class' => 'form-control', 'required' => '')
								);
							?>
	                  	</div>
	              	</div>
	              	<div class="form-group">
	                  	<div class="col-lg-offset-2 col-lg-10">
	                      	<?php echo Form::submit('submit', 'Submit', array('class' => 'btn btn-primary')); ?>
	                      	<?php echo Html::anchor('admin/users', 'Back', array('class' => 'btn btn-default')) ?>
	                  	</div>
	              	</div>
	          	<?php echo Form::close(); ?>
	      	</div>
	  	</div>
	</section>
</div>