<html>
    <style>
        .bc{
            background-color: #c6bebe;

        }

        .main{
            margin-top: 2%;

        }
    </style>

    <head>

        <?php require_once ('assets/html_head_links.php'); ?>
        <title>A step towards Fitness</title>



    </head>

    <body class='bc'>

        <div class="main" >
            <div class="container">
                <div class="panel panel-primary">

                    <div class="panel-heading">
                        <h4>A step towards Fitness</h4>
                    </div>
                    <div class="panel-body">

                        <form action="<?php echo site_url('Customer_details/customerDetails'); ?>" method="post">

                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="form-group">
                                        <label for="name">Name:</label>
                                        <input type="name" name="name" class="form-control" placeholder="Enter Name" id="email">
                                        <?php echo form_error('name'); ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="pwd">Phone:</label>
                                        <input type="text" name="phone" class="form-control" placeholder="Enter Phone">
                                        <?php echo form_error('phone'); ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="pwd">Email:</label>
                                        <input type="text" name="email" class="form-control" placeholder="Enter Email">
                                        <?php echo form_error('email'); ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="pwd">Occupation:</label>
                                        <input type="text" name="occupation" class="form-control" placeholder="Enter Occupation">
                                    </div>
                                    <div class="form-group">
                                        <label for="pwd">Age:</label>
                                        <input type="text" name="age" class="form-control" placeholder="Enter age">
                                        <?php echo form_error('age'); ?>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="form-group">
                                        <label for="pwd">Address:</label>
                                        <input type="text" class="form-control" name="address" placeholder="Enter Address">
                                    </div>
                                    <div class="form-group">
                                        <label for="pwd">Date of birth:</label>
                                        <input type="date" name="dob" class="form-control" placeholder="Enter Date of birth">
                                        <?php echo form_error('dob'); ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Height:</label>
                                        <input type="text" name="height" class="form-control" placeholder="Enter Height" id="email">
                                        <?php echo form_error('height'); ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="pwd">Weight:</label>
                                        <input type="text" name="weight" class="form-control" placeholder="Enter Weight">
                                        <?php echo form_error('weight'); ?>
                                    </div>
                                    <div>
                                        <label for="pwd">Package Subscription:</label>
                                        <select class="form-control" name="package">
                                            <option>1 Month</option>
                                            <option>3 Months</option>
                                            <option>6 Months</option>
                                            <option>1 Year</option>

                                        </select>
                                    </div>

                                </div>
                            </div>
                            <Br>
                            <center><button type="submit" name="submit" value="submit" class="btn btn-success btn-lg">Submit</button>
                                <a class="btn btn-default btn-lg" href="<?php echo site_url('Default_controller/redirectHome'); ?>">Cancel</a>
                            </center>
                        </form>
                    </div>
                </div>
            </div>


        </div>


    </body>

</html>

