<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?php echo base_url('/assets/bootstrap/css/bootstrap.min.css'); ?>">
	<script src="<?php echo base_url('/assets/bootstrap/js/bootstrap.min.js'); ?>"></script>
	<script src="<?php echo base_url('/assets/js/side_bar.js'); ?>"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/css/style.css'); ?>">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
</head>
<body id="body-pd">
    <header class="header" id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i></div>
         <!-- Copyright -->
		<div class="text-center p-4" >
			© 2021 Copyright:
			<a class="text-reset fw-bold" href="https://www.instagram.com/anggaagustira/">Angga Agustira</a>
		</div>
		<!-- Copyright -->
    </header>

	<?php
		$nama = "Angga Agustira";
	?>

    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div> 
				<a href="#" class="nav_logo"> <div class="header_img"> <img src="https://i.imgur.com/hczKIze.jpg" alt=""> </div> <span class="nav_logo-name"> <?php echo $nama; ?> </span> </a>
                <div class="nav_list"> 
					<a href="#" class="nav_link active"> <i class='bx bx-grid-alt nav_icon'></i> <span class="nav_name">Dashboard</span> </a> 
					<a href="#" class="nav_link"> <i class='bx bx-user nav_icon'></i> <span class="nav_name">Users</span> </a> 
					<a href="#" class="nav_link"> <i class='bx bx-message-square-detail nav_icon'></i> <span class="nav_name">Messages</span> </a> 
					<a href="#" class="nav_link"> <i class='bx bx-bookmark nav_icon'></i> <span class="nav_name">Bookmark</span> </a> 
					<a href="#" class="nav_link"> <i class='bx bx-folder nav_icon'></i> <span class="nav_name">Files</span> </a> 
					<a href="#" class="nav_link"> <i class='bx bx-bar-chart-alt-2 nav_icon'></i> <span class="nav_name">Stats</span> </a>
				</div>
            </div> 
			<a href="#" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">SignOut</span> </a>
        </nav>
    </div>
    <!--Container Main start-->
    <!-- <div class="height-100 bg-light">
        <h4>Main Components</h4>
    </div> -->
    <!--Container Main end-->

</body>

</html>

