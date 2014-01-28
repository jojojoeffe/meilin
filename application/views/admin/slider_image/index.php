<div class="container">
		<ul class="breadcrumb">
  			<li><a href="#">Dashboard</a> <span class="divider">/</span></li>
  			<li class="active">Slider Image</li>
		</ul>
		
		<div class="row">
			<div class="span12">
				<a href='<?php echo site_url('admin/slider_images/add'); ?>' class="btn btn-success pull-right">
					Add Image
				</a>
			</div>
		</div>
		<hr>
		<table class="table table-bordered table-hover">
			<tr>
				<th>Name</th>
				<th>Images</th>
				<th>Caption</th>
				<th>Action</th>
			</tr>

			<?php foreach($slider_images as $slider_image): ?>
				<tr>
					<td>
					<?php echo $slider_image->name; ?>
					</td>
					<td><img src="<?php  echo $slider_image->image_url() ?>" alt=""></td>
					<td><?php echo $slider_image->caption; ?></td>
					<td>
						<a href='<?php echo site_url('admin/slider_images/edit/'.$slider_image->id); ?>' class="btn">Edit</a>
						<a href='<?php echo site_url('admin/slider_images/destroy/'.$slider_image->id); ?>' class="btn btn-danger">Delete</a>
					</td>
				</tr>
			<?php endforeach; ?>
			
		</table>


		
	</div>