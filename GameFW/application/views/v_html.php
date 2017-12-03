<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="<?php echo base_url();?>static/bootstrap.min.css" rel="stylesheet">
	<title>CodeIgniter Test</title>
	<style>
		
		table,
		th,
		td{
			border: 1px solid black;
		}
		
		table{
			width: 100%;
		}
	</style>
</head>
<body class="container">
	<div id="table">
		<table>
			<thead>
				<tr>
					<th>No</th>
					<th>Nama</th>
					<th>Email</th>
				<tr>
			</thead>
			<tbody>
				<?php foreach($response as $data) {?>
					<tr>
						<td><?php echo $data['id]; ?>
	<div id="body">
		<p>The page you are looking at is being generated dynamically by CodeIgniter.</p>

		<p>If you would like to edit this page you'll find it located at:</p>
		<code>application/views/welcome_message.php</code>

		<p>The corresponding controller for this page is found at:</p>
		<code>application/controllers/Welcome.php</code>

		<p>If you are exploring CodeIgniter for the very first time, you should start by reading the <a href="user_guide/">User Guide</a>.</p>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>
</html>