<html>
    <head>
        <?php require_once ('assets/html_head_links.php'); ?>
    </head>
    <title> Fitness Icon </title>

    <body>
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">FITNESS ICON</a>
                </div>
                <ul class="nav navbar-nav pull-right">
                    <li><a href="<?php echo site_url('Default_controller/goToHome'); ?>">Sign In</a></li>
                    <li class="dropdown float-right">
                        <a href="<?php echo site_url('Default_controller/enquiryForm'); ?>">Enquiry</a>              
                    </li>
                </ul>
            </div>
        </nav>
        <!-- Message Code for display Success and error messages -->

        <?php if ($this->session->flashdata('success')) { ?>
            <div class="alert alert-success alert-message container">
                <button data-dismiss="alert" class="close" type="button">
                    <span aria-hidden="true">x</span><span class="sr-only">Close</span></button>

                <?php echo $this->session->flashdata('success') ?>
            </div>
        <?php } else if ($this->session->flashdata('failure')) {
            ?>

            <div class="alert alert-danger alert-message container">
                <button data-dismiss="alert" class="close" type="button">
                    <span aria-hidden="true">x</span><span class="sr-only">Close</span></button>

                <?php echo $this->session->flashdata('failure') ?>
            </div>

        <?php } ?>

        <script>
            $('#alert').hide().delay(5000).fadeIn(400);

        </script>


    </body>


</html>