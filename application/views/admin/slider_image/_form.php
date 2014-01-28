<div class="container">
    <ul class="breadcrumb">
        <li><a href="#">Dashboard</a> <span class="divider">/</span></li>
        <li><a href="<?php echo site_url('admin/slider_images'); ?>">Slider image</a> <span class="divider">/</span></li>
        <li class="active"><?php echo $action; ?>Slider Image</li>
    </ul>
    
    <h3><?php echo $form_title; ?></h3>

    <?php if($slider_image->errors){
          echo "<div class='alert alert-error'>
            <button type='button' class='close' data-dismiss='alert'>&times;</button>
            $slider_image->errors
          </div>";
          }
    ?>

    <form class="form-horizontal" method='POST' enctype="multipart/form-data" action='<?php echo $form_action; ?>'>
        <div class="control-group">
          <label class="control-label">Name:</label>
          <div class="controls">
              <input name='slider_image[name]' value='<?php echo $slider_image->name ?>' type="text" id="inputName">
              <div class="text-error"><?php if($slider_image->errors) echo $slider_image->errors->on('name') ?></div>
          </div>
        </div>
        
        <div class="control-group">
          <label class="control-label">Caption:</label>
          <div class="controls">
              <textarea name='slider_image[caption]' type="text"><?php echo $slider_image->caption ?></textarea>
          </div>
        </div>

        <div class="control-group">
          <label class="control-label">Image:</label>
          <div class="controls">

              <?php if($slider_image->image_url()): ?>
                <img class='img-polaroid' src='<?php echo $slider_image->image_url() ?>' width='200'>
              <?php endif; ?>

              <input name='slider_image' type="file">
          </div>
        </div>

        <div class="control-group">
          <div class="controls pull-right">
              <button href='<?php echo site_url('admin/slider_images/index') ?>' class="btn">Cancel</button>
              <button class="btn btn-success">Update</button>
          </div>
        </div>
    </form>
  </div>