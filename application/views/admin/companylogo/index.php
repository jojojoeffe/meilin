<div class="container">
		<ul class="breadcrumb">
  			<li><a href="#">Dashboard</a> <span class="divider">/</span></li>
  			<li class="active">Companylogos</li>
		</ul>
		

		<hr>
		<table class="table table-bordered table-hover">
			<tr>
				<th>Name</th>
				<th>Images</th>
				<th>Action</th>
			</tr>

			<?php foreach($companylogos as $companylogo): ?>
				<tr>
					<td>
					<?php echo $companylogo->name; ?>
					</td>
					<td><img src="<?php  echo $companylogo->image_url() ?>" alt=""></td>
					
					<td>
						<a href='<?php echo site_url('admin/companylogos/edit/'.$companylogo->id); ?>' class="btn">Edit</a>
						</td>
				</tr>
			<?php endforeach; ?>
			
		</table>


		
	</div>