<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            body{
                padding: 15px;
            }
        </style>
    </head>
    <body>
        <h2 style="margin-top:0px">Users Read</h2>
        <table class="table">
	    <tr><td>Oauth Provider</td><td><?php echo $oauth_provider; ?></td></tr>
	    <tr><td>Oauth Uid</td><td><?php echo $oauth_uid; ?></td></tr>
	    <tr><td>Ipaddr</td><td><?php echo $ipaddr; ?></td></tr>
	    <tr><td>Name</td><td><?php echo $name; ?></td></tr>
	    <tr><td>Date</td><td><?php echo $date; ?></td></tr>
	    <tr><td>Phone</td><td><?php echo $phone; ?></td></tr>
	    <tr><td>Email</td><td><?php echo $email; ?></td></tr>
	    <tr><td>Password</td><td><?php echo $password; ?></td></tr>
	    <tr><td>Gender</td><td><?php echo $gender; ?></td></tr>
	    <tr><td>Address</td><td><?php echo $address; ?></td></tr>
	    <tr><td>Image</td><td><?php echo $image; ?></td></tr>
	    <tr><td>Role Id</td><td><?php echo $role_id; ?></td></tr>
	    <tr><td>Is Active</td><td><?php echo $is_active; ?></td></tr>
	    <tr><td>Date Created</td><td><?php echo $date_created; ?></td></tr>
	    <tr><td>Last Login</td><td><?php echo $last_login; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('admin') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>