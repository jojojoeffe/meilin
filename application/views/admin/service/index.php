<div class="container">
    <ul class="breadcrumb">
        <li><a href="#">Dashboard</a> <span class="divider">/</span></li>
        <li class="active">Services</li>
    </ul>

    <div class="row">
        <div class="span12">
            <a href='<?php echo site_url('admin/services/add'); ?>' class="btn btn-success pull-right">
                Add service
            </a>
        </div>
    </div>
    <hr>
    <table class="table table-bordered table-hover">
        <tr>
            <th>Consulting Field</th>
            <th>Image</th>
            <th>Description</th>
        </tr>

        <?php foreach ($services as $service): ?>
            <tr>
                <td>
                    <?php echo $service->consulting_field; ?>
                </td>
                <td><img src="<?php echo $service->image_url() ?>" alt=""></td>
                <td><?php echo $service->description; ?></td>
                <td>
                    <a href='<?php echo site_url('admin/services/edit/' . $service->id); ?>' class="btn">Edit</a>
                    <a href='<?php echo site_url('admin/services/destroy/' . $service->id); ?>' class="btn btn-danger">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>

    </table>
</div>