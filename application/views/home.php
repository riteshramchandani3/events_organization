<html>
    <head>
        <style>
            .main{
                margin-top: 2%;


            </style>
            <?php require_once ('assets/html_head_links.php'); ?>

            <title>Home</title>

        </head>
        <body>
            <div class="main">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <center> WELCOME TO FITNESS ZONE</center>
                    </div>
                    <div class="panel-body">
                        <a class=" btn  btn-primary" role="button" title="View" href="<?php echo site_url('Default_controller/showRegisteredCustomers') ?> ">Customers List</a> <?php echo nbs(3); ?>
                        <a class=" btn  btn-primary" role="button" title="View" href="<?php echo site_url('Default_controller/showGymCustomers') ?> ">Gym Members</a> <?php echo nbs(3); ?>
                        <br>
                    </div>
                </div>
                </div>


        </body>
    </html>