<div class="container">

    <ul class="breadcrumb">
        <li><a href="#">Dashboard</a> <span class="divider">/</span></li>
        <li class="active">Event</li>
    </ul>


<div class="row">
        <div class="span12">
            <a href='<?php echo site_url('admin/events/add'); ?>' class="btn btn-success pull-right">
                Add Event
            </a>
        </div>
    </div>
    
    <hr>
    <table class="table table-bordered table-hover">
        <tr>
            <th>Part</th>
            <th>Date</th>
            <th>Section</th>
            <th>Action</th>
        </tr>

        <?php foreach ($events as $event): ?>
            <tr>
                <td><?php echo $event->part; ?></td>
                <td><?php echo $event->date; ?></td>
                 <td><?php echo $event->section; ?></td>
                <td ><a href='<?php echo site_url('admin/events/edit/' . $event->id); ?>' class="btn">Edit</a>
                     <td ><a href='<?php echo site_url('admin/events/destroy/' . $event->id); ?>' class="btn btn-danger">Delete</a>
                </td>
            </tr>

        <?php endforeach; ?>
    </table>


</div>
