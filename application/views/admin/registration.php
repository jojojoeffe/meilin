<div class="container">

    <ul class="breadcrumb">
        <li><a href="#">Dashboard</a> <span class="divider">/</span></li>
        <li class="active">Customers</li>
    </ul>


    <hr>
    <table class="table table-bordered table-hover">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Category Service</th>
            <th>Phone Number</th>
            <th>Action</th>
        </tr>

        <?php foreach ($customers as $customer): ?>
            <tr>
                <td><?php echo $customer->name; ?></td>
                <td><?php echo $customer->email_address; ?></td>
                <td><?php echo $customer->category_service; ?></td>
                <td><?php echo $customer->phone_number; ?></td>
                <td >
                    <a href='<?php echo site_url('admin/registrations/destroy/' . $customer->id); ?>' class="btn btn-danger">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>

    </table>
</div>