<div class="container">
    <ul class="breadcrumb">
        <li><a href="#">Dashboard</a> <span class="divider">/</span></li>
        <li><a href="<?php echo site_url('admin/services'); ?>">Services</a> <span class="divider">/</span></li>
        <li class="active"><?php echo $action; ?>Service</li>
    </ul>
    
    <h3><?php echo $form_title; ?></h3>

    <?php if($service->errors){
          echo "<div class='alert alert-error'>
            <button type='button' class='close' data-dismiss='alert'>&times;</button>
            $service->errors
          </div>";
          }
    ?>

    <form class="form-horizontal" method='POST' enctype="multipart/form-data" action='<?php echo $form_action; ?>'>
        <div class="control-group">
          <label class="control-label">Consulting Field:</label>
          <div class="controls">
              <input name='service[consulting_field]' value='<?php echo $service->consulting_field ?>' type="text" id="inputName">
              <div class="text-error"><?php if($service->errors) echo $service->errors->on('consulting_field') ?></div>
          </div>
        </div>
        
        <div class="control-group">
          <label class="control-label">Description:</label>
          <div class="controls">
              <textarea name='service[description]' type="text"><?php echo $service->description ?></textarea>
          </div>
        </div>

        <div class="control-group">
          <label class="control-label">Image:</label>
          <div class="controls">

              <?php if($service->image_url()): ?>
                <img class='img-polaroid' src='<?php echo $service->image_url() ?>' width='200'>
              <?php endif; ?>

              <input name='service_image' type="file">
          </div>
        </div>
        <div class="control-group">
          <div class="controls pull-right">
              <button href='<?php echo site_url('admin/services') ?>' class="btn">Cancel</button>
              <button class="btn btn-success">Update</button>
          </div>
        </div>
    </form>
  </div>