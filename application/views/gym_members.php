<html>
    <head>
        <style>
            .main{
                margin-top: 2%;
            }
            .danger{
                background-color:  #ac2925;
            }
        </style>
        <?php require_once ('assets/html_head_links.php'); ?>
        <title>Registered Customer Details</title>
    </head>

    <body>
        <div class="main">
            <div class="container-fluid">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        Registered Customer Details


                    </div>
                    <div class="panel-body">

                        <table id="example" class="table table-striped table-bordered">                   
                            <thead>
                              
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Occupation</th>
                                    <th>Age</th>
                                    <th>Date of Birth</th>
                                    <th>Height</th>
                                    <th>Weight</th>
                                    <th>Package</th>
                                    <th>Action</th>
                            
                            </thead>
                            <tbody>
                                <?php
                                foreach ($this->Customer_details_mdl->getGymCustomers() as $customers) {
                                    ?>  


                                    <tr>
                                        <td><?php echo $customers['name']; ?></td>
                                        <td> <?php echo $customers['phone']; ?></td>          
                                        <td> <?php echo $customers['email']; ?></td>          
                                        <td> <?php echo $customers['occupation']; ?></td>          
                                        <td> <?php echo $customers['age']; ?></td>          
                                        <td> <?php echo $customers['dob']; ?></td>          
                                        <td> <?php echo $customers['height']; ?></td>          
                                        <td> <?php echo $customers['weight']; ?></td>          
                                        <td> <?php echo $customers['package']; ?></td>          

                                        <td>
                                <center>
                                    <?php $status = $customers['status'] ?>

                                    <?php if ($status == 'Inactive') { ?>
                                        <button type = "button" class = "btn btn-success" data-toggle = "modal" data-target = "#update">Convert to Gym Member</button>

                                    <?php } ?>
                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete">Delete</button>

                                </center>

                                </td> 

                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                        <a class="btn  btn-primary  pull-right" role="button" title="View" href="<?php echo site_url('Default_controller/goToHome') ?> ">Back</a> 

                        <!-- Modal -->
                        <div id="delete" class="modal fade" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">

                                    <div class="modal-body">
                                        <center><h3>Are You Sure you want to Delete ?<br> </h3></center>
                                    </div>
                                    <div class="modal-footer">
                                        <center> 
                                            <a class=" btn  btn-danger  " role="button" title="View" href="<?php echo site_url('Customer_details/deleteRegisteredCustomer?id=' . $customers['id']) ?> ">&nbsp; Delete<i class="fa fa-danger"></i></a> <?php echo nbs(3); ?>
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </center>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-- Trigger the modal with a button -->
                        <!-- Modal -->
                        <div id="update" class="modal fade" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">

                                    <div class="modal-body">
                                        <center><h4>Are You Sure you want to Convert into Gym Member ?<br> </h4></center>
                                    </div>
                                    <div class="modal-footer">
                                        <center> 
                                            <a class=" btn  btn-success  " role="button" title="View" href="<?php echo site_url('Customer_details/convertToGymMember?id=' . $customers['id']) ?> ">&nbsp; Convert<i class="fa fa-danger"></i></a> <?php echo nbs(3); ?>
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </center>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-- Trigger the modal with a button -->

                    </div>
                </div>
            </div>

        </div>

    </body>


</html>