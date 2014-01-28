<div class="container">
    <ul class="breadcrumb">
        <li><a href="#">Dashboard</a> <span class="divider">/</span></li>
        <li class="active"><?php echo $action; ?>Team Content</li>
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
              <textarea name='content[description]' type="text" ><?php echo $content->description?></textarea>
              <div class="text-error"><?php if($content->errors) echo $content->errors->on('description') ?></div>
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