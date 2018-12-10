<!doctype html>
<html>
    <head>
    	<?php include 'production/include/head.php'; ?>
    </head>
    <body>
        <div class="wrapper">
        	<?php
        	include 'production/include/head.php';
        	include 'production/include/sidebar.php';
            include 'production/include/top_navigation.php';
        	?>
        	<div class="content-wrapper">
                <?php

                if(isset($_GET['production'])){
                    if($_GET['production']=='index') {
                        include 'production/index.php';
        
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
