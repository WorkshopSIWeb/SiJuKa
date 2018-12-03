<!doctype html>
<html>
    <head>
    	<?php include 'include/head.php'; ?>
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">
        	<?php 
        	include 'include/header.php'; 
        	include 'include/sidebar.php'; 
        	?>
        	<div class="content-wrapper">
                <?php 
                    
                if(isset($_GET['halaman'])){
                    if($_GET['halaman']=='siswa') {
                        include 'halaman/form/siswa.php';
                    }else if($_GET['halaman']=='data_siswa') {
                        include 'halaman/table/data_siswa.php';
                    }else if($_GET['halaman']=='login') {
                        include 'halaman/login/login.php';
                    }else if($_GET['halaman']=='register') {
                        include 'halaman/register/register.php';
                    }
                
                }
                ?>
        	</div>
	        <?php 	
	        	include 'include/footer.php';
	        ?>
	        <div class="control-sidebar-bg"></div>
        </div>

            <?php  
                include 'include/script.php';
            ?>
    </body>
</html>
