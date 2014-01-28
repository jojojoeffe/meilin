<div class="container">
    <ul class="breadcrumb">
        <li><a href="#">Dashboard</a> <span class="divider">/</span></li>
        <li class="active"><?php echo $action; ?>Company Content</li>
    </ul>
    
    <h2><?php echo $form_title; ?></h2>

    <form class="form-horizontal" method='POST' action='<?php echo $form_action; ?>'>
        <div class="control-group">
          <label class="control-label">Title:</label>
          <div class="controls">
              <input name='content[title]' value='<?php echo $content->title ?>'  type="text" >
              <div class="text-error"><?php if($content->errors) echo $content->errors->on('title') ?></div>
          </div>
        </div>

        <div class="control-group">
          <label class="control-label">Description 1:</label>
          <div class="controls">
              <textarea name='content[description_1]' type="text" ><?php echo $content->description_1?></textarea>
              <div class="text-error"><?php if($content->errors) echo $content->errors->on('description_1') ?></div>
          </div>
        </div>
        
        <div class="control-group">
          <label class="control-label">Description 2:</label>
          <div class="controls">
              <textarea name='content[description_2]' type="text" ><?php echo $content->description_2?></textarea>
              <div class="text-error"><?php if($content->errors) echo $content->errors->on('description_2') ?></div>
          </div>
        </div>

        <div class="control-group">
          <label class="control-label">Description 3:</label>
          <div class="controls">
             <textarea name='content[description_3]' type="text" ><?php echo $content->description_3?></textarea>
             <div class="text-error"><?php if($content->errors) echo $content->errors->on('description_3') ?></div>
          </div>
        </div>



        <div class="control-group">
          <div class="controls pull-right">
              <button href='<?php echo site_url('admin/home_contents') ?>' class="btn">Cancel</button>
              <button class="btn btn-success">Update</button>
          </div>
        </div>
    </form>
  </div>