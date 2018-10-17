
<?php include('header.php');?>

<div class="container" style="margin-top: 50px;">

	<h4>Login Form</h4>
	<?php if($msg=$this->session->flashdata('msg')){

    ?>
    <div class="row">
      <div class="col-sm-6">
        <div class="alert alert-danger"><?= $msg?></div>
      </div>
    </div>
  <?php 
  }
  ?>

	<?php echo form_open('login');?>
	<div class="row">
	<div class="col-sm-6">
	<div class="form-group">
			<label for="Username">Username:</label>
			<?php echo form_input(['class'=>'form-control','placeholder'=>'Enter User name','name'=>'username','value'=>set_value('username')]);?>
	</div>
	</div>
	
	<div class="col-sm-6" style="margin-top: 40px;">
		<?php echo form_error('username');?>
	</div>
	</div>

	<div class="row">
	<div class="col-sm-6">
	<div class="form-group">
			<label for="Password">Password:</label>
			<?php echo form_password(['class'=>'form-control','placeholder'=>'Enter Password','name'=>'password','value'=>set_value('password')]);?>
			
	</div>
	</div>
	<div class="col-sm-6" style="margin-top: 40px;">
		<?php echo form_error('password');?>
	</div>
	</div>

	<div class="row">
	<div class="form-group">
		<div class="col-sm-6">
		<?php echo form_dropdown(['name'=>'usertype','options'=>['Student','faculty','Admin'],'selected'=>'Student','class'=>'btn btn-info'])?>
	</div>
	</div>
	</div>
	<?php echo form_submit(['type'=>'submit','value'=>'Submit','class'=>'btn btn-default']);?>
	<?php echo form_reset(['type'=>'reset','value'=>'Reset','class'=>'btn btn-primary']);?>
	<?php echo anchor('Login/register','Sign up?','class="link-class"');?>

</div>
<?php include('footer.php');?>
