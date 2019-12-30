<html>

    <head>
        <?php require_once ('assets/html_head_links.php'); ?>
        <style>
            .bc{
                background-color: #ccc;

            }
        </style>
    </head>

    <body class='bc'>

        <div class="main" >
            <div class="container">
                <div class="panel panel-primary">
                    <div class="panel-heading"><h5>Fill Details</h5></div>
                    <div class="panel-body">

                        <form action="" autocomplete="off">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="email">Name:</label>
                                        <input type="email" class="form-control" placeholder="Enter Name" id="email">
                                    </div>
                                    <div class="form-group">
                                        <label for="pwd">Phone:</label>
                                        <input type="password" class="form-control" placeholder="Enter Phone">
                                    </div>
                                    <div class="form-group">
                                        <label for="pwd">Email:</label>
                                        <input type="password" class="form-control" placeholder="Enter Email">
                                    </div>
                                    <div class="form-group">
                                        <label for="pwd">Address:</label>
                                        <input type="password" class="form-control" placeholder="Enter Address">
                                    </div>
                                    <div class="form-group">
                                        <label for="pwd">Date of birth:</label>
                                        <input type="password" class="form-control" placeholder="Enter Date of birth">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="email">Height:</label>
                                        <input type="email" class="form-control" placeholder="Enter Height" id="email">
                                    </div>
                                    <div class="form-group">
                                        <label for="pwd">Weight:</label>
                                        <input type="password" class="form-control" placeholder="Enter Weight">
                                    </div>

                                    <div class="form-group">
                                        <label for="pwd">Occupation:</label>
                                        <input type="password" class="form-control" placeholder="Enter Occupation">
                                    </div>

                                </div>
                            </div>
                            <Br>
                            <button type="submit" onclick="priventDefault" class="btn btn-success btn-lg center-block">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>

</html>

