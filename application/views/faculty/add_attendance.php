<?php include('header.php');?>
<div class="container" style="margin-top: 60px;">
	

	<div class="row">
		
		<div class="col-md-6 ">
			<?php foreach ($user as $ud):?>
			<h5>
			 <?=$ud->FirstName;?>
			 <?=$ud->LastName; ?>
			</h5>
			<?php endforeach;?>

		</div>
		
	</div>

		<div class="row" style="margin-top: 20px;">
		<div class="col-md-8 offset-md-2">
			<div class="card">
				<div class="card-header bg-info text-white"><h5>Add attendance</h5></div>
				<div class="card-body">
					<?php 
						echo form_open('Faculty/');
						echo form_input(['name'=>'date','type'=>'date','placeholder'=>'select Date','class'=>'form-control']);
							
					?>

					

					
				</div>
			</div>
		</div>
	</div>
</div>

<?php include('footer.php');?>