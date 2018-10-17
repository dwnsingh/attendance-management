
<?php include('header.php');?>

<div class="container" style="margin-top: 50px;">

	<h4>Register Form</h4>
<?php if($msg = $this->session->flashdata('msg')){
		$msg_class = $this->session->flashdata('msg_class');
?>
	<div class="row">
	<div class="col-sm-6">
	
	<div class="alert <?= $msg_class?>">
		<?= $msg?>
	</div>

	</div>

	</div>
<?php }?>

	<?php echo form_open('login/adduser');?>
	<div class="row">
	<div class="col-md-6">
	<div class="form-group">
			<label for="Username">Username:</label>
			<?php echo form_input(['class'=>'form-control','placeholder'=>'Enter User name','name'=>'username','value'=>set_value('username')]);?>
	</div>
	</div>
	
	<div class="col-md-6" style="margin-top: 40px;">
		<?php echo form_error('username');?>
	</div>
	</div>

	<div class="row">
	<div class="col-md-6">
	<div class="form-group">
			<label for="Password">Password:</label>
			<?php echo form_password(['class'=>'form-control','placeholder'=>'Enter Password','name'=>'password','value'=>set_value('password')]);?>
			
	</div>
	</div>
	<div class="col-md-6" style="margin-top: 40px;">
		<?php echo form_error('password');?>
	</div>
	</div>

	<div class="row">
	<div class="col-md-6">
	<div class="form-group">
			<label for="FirstName">FirstName:</label>
			<?php echo form_input(['class'=>'form-control','placeholder'=>'Enter FirstName','name'=>'FirstName','value'=>set_value('FirstName')]);?>
			
	</div>
	</div>
	<div class="col-md-6" style="margin-top: 40px;">
		<?php echo form_error('FirstName');?>
	</div>
	</div>

	<div class="row">
	<div class="col-md-6">
	<div class="form-group">
			<label for="LastName">LastName:</label>
			<?php echo form_input(['class'=>'form-control','placeholder'=>'Enter LastName','name'=>'LastName','value'=>set_value('LastName')]);?>
			
	</div>
	</div>
	<div class="col-md-6" style="margin-top: 40px;">
		<?php echo form_error('LastName');?>
	</div>
	</div>

	<div class="row">
	<div class="col-md-6">
	<div class="form-group">
			<label for="Email">Email:</label>
			<?php echo form_input(['class'=>'form-control','placeholder'=>'Enter valid Email','name'=>'Email','value'=>set_value('Email')]);?>
			
	</div>
	</div>
	<div class="col-md-6" style="margin-top: 40px;">
		<?php echo form_error('Email');?>
	</div>
	</div>

	<?php echo form_submit(['type'=>'submit','value'=>'Submit','class'=>'btn btn-default']);?>
	<?php echo form_reset(['type'=>'reset','value'=>'Reset','class'=>'btn btn-primary']);?>
	<?php echo anchor('login','Log in?','class="link-class"');?>

</div>
<?php include('footer.php');?>
