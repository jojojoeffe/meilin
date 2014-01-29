<div class="container">

    <ul class="breadcrumb">
        <li><a href="#">Dashboard</a> <span class="divider">/</span></li>
        <li class="active">Part Event</li>
    </ul>

<div class="row">
        <div class="span12">
            <a href='<?php echo site_url('admin/part_events/add'); ?>' class="btn btn-success pull-right">
                Add Part Event
            </a>
        </div>
    </div>

    <hr>
    <table class="table table-bordered table-hover">
        <tr>
            <th>Part</th>
          
            <th>Action</th>
        </tr>

        <?php foreach ($part_events as $part_event): ?>
            <tr>
                <td><?php echo $part_event->part; ?></td>
                <td ><a href='<?php echo site_url('admin/part_events/edit/' . $part_event->id); ?>' class="btn">Edit</a>
                <a href='<?php echo site_url('admin/part_events/destroy/' . $part_event->id); ?>' class="btn btn-danger">Delete</a>
                
                </td>
            </tr>

        <?php endforeach; ?>
    </table>


</div>