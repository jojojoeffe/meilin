<div class="container">

    <ul class="breadcrumb">
        <li><a href="#">Dashboard</a> <span class="divider">/</span></li>
        <li class="active">Company Cntact</li>
    </ul>



    <hr>
    <table class="table table-bordered table-hover">
        <tr>
            <th>Title</th>
            <th>Region</th>
            <th>Province</th>
            <th>Country</th>
            <th>Email</th>
            <th>Tel-local</th>
            <th>Tel-inter</th>
            <th>Fax</th>
            <th>Whatsap-line</th>
            <th>Action</th>
        </tr>

        <?php foreach ($contacts as $contact): ?>
            <tr>
                <td><?php echo $contact->title; ?></td>
                <td><?php echo $contact->region; ?></td>
                 <td><?php echo $contact->province; ?></td>
                 <td><?php echo $contact->country; ?></td>
                  <td><?php echo $contact->email; ?></td>
                  <td><?php echo $contact->tel_local; ?></td>
                  <td><?php echo $contact->tel_inter; ?></td>
                  <td><?php echo $contact->fax; ?></td>
                  <td><?php echo $contact->whatsap_line; ?></td>
                <td ><a href='<?php echo site_url('admin/contacts/edit/' . $contact->id); ?>' class="btn">Edit</a>

                </td>
            </tr>

        <?php endforeach; ?>
    </table>


</div>