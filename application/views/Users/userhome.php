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
	<?php if(!$registered){?>
	<div class="row">
	<div class="col-md-6 offset-md-2">
			<?= anchor('User/course','Register For Courses','class="btn btn-primary"','disabled');?>
	</div>
	</div>
	<?php }?>
	<div class="row" style="margin-top: 20px;">
		<div class="col-md-7 offset-md-2">
			<div class="card">
				<div class="card-header bg-info text-white"><h5>Attendance Management</h5></div>
				<div class="card-body">
					
					<table class="table">
						<thead>
							<tr>
							<th>Course Number</th>
							<th>Course name</th>
							<th>View</th>
							</tr>
						</thead>
						<tbody>
						<?php if(count($input)):?>
						
						<?php foreach ($input as $feed):?>	

						<tr>
				
						<td><?= $feed->courseId;?></td>
						<td><?= $feed->courseName;?></td>
						<td><?= 
							form_open(''),
							form_hidden(''),
							form_submit(['name'=>'submit','value'=>'View','class'=>'btn btn-primary btn-sm']),
							form_close();
						?>
						</tr>

						<?php endforeach;?>


						<?php else:?>
						<tr>
						<td colspan="2">No data found</td>
						</tr>
						<?php endif;?>
							
						</tbody>
					</table>
					
				</div>
			</div>
		</div>
	</div>
</div>

<?php include('footer.php');?>