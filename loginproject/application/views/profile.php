<html>
<head>

<title>Profile Page</title>
<link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">




</head>

<body>

<div class="col-lg-5 col-lg-offset-2">
<h1>Welcome to Profile Page</h1>


<?php if(isset($_SESSION['success'])) { ?>
<div class="alert alert-success"> <?php echo $_SESSION['success']; ?>

<?php
}
?>



Hello, <?php echo $_SESSION['username'];?>
<br><br>
<a href="<?php echo base_url(); ?>index.php/auth/logout">Logout</a>

</div>
	<script src="<?php echo base_url();?>assets/js/bootstrap.min.js></script>
</body>
</html>