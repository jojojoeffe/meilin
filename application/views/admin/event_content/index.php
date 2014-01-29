<div class="container">

    <ul class="breadcrumb">
        <li><a href="#">Dashboard</a> <span class="divider">/</span></li>
        <li class="active">Event Content</li>
    </ul>



    <hr>
    <table class="table table-bordered table-hover">
        <tr>
            <th>Title</th>
            <th>Description 1</th>
            <th>Description 2</th>
            <th>Action</th>
        </tr>

        <?php foreach ($contents as $content): ?>
            <tr>
                <td><?php echo $content->title; ?></td>
                <td><?php echo $content->description_1; ?></td>
                 <td><?php echo $content->description_2; ?></td>
                <td ><a href='<?php echo site_url('admin/event_contents/edit/' . $content->id); ?>' class="btn">Edit</a>

                </td>
            </tr>

        <?php endforeach; ?>
    </table>


</div>