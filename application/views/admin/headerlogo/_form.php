<div class="container">
    <ul class="breadcrumb">
        <li><a href="#">Dashboard</a> <span class="divider">/</span></li>
        <li><a href="<?php echo site_url('admin/headerlogos'); ?>">Headerlogos</a> <span class="divider">/</span></li>
        <li class="active"><?php echo $action; ?>Headerlogo</li>
    </ul>
    
    <h3><?php echo $form_title; ?></h3>

    <?php if($headerlogo->errors){
          echo "<div class='alert alert-error'>
            <button type='button' class='close' data-dismiss='alert'>&times;</button>
            $headerlogo->errors
          </div>";
          }
    ?>

    <form class="form-horizontal" method='POST' enctype="multipart/form-data" action='<?php echo $form_action; ?>'>
        <div class="control-group">
          <label class="control-label">Name:</label>
          <div class="controls">
              <input name='headerlogo[name]' value='<?php echo $headerlogo->name ?>' type="text" id="inputName">
              <div class="text-error"><?php if($headerlogo->errors) echo $headerlogo->errors->on('name') ?></div>
          </div>
        </div>
       
        <div class="control-group">
          <label class="control-label">Image:</label>
          <div class="controls">

              <?php if($headerlogo->image_url()): ?>
                <img class='img-polaroid' src='<?php echo $headerlogo->image_url() ?>' width='200'>
              <?php endif; ?>

              <input name='headerlogo_image' type="file">
          </div>
        </div>
        <div class="control-group">
          <div class="controls pull-right">
              <button href='<?php echo site_url('admin/headerlogos') ?>' class="btn">Cancel</button>
              <button class="btn btn-success">Update</button>
          </div>
        </div>
    </form>
  </div>