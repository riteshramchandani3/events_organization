<html>

    <head>
        <?php require_once ('assets/html_head_links.php'); ?>
    </head>
    <body>
        <div class="well well-sm">
            <button type="button" class="btn btn-danger btn-lg pull-right" data-toggle="modal" data-target="#myModal">Logout</button>
            <h3>Welcome to the Admin Panel</h3>
        </div>

        <?php if ($this->session->flashdata('data_inserted')) { ?>

            <div class="alert alert-success container fadout"  style="margin-top: 20px;">
                <strong>Success!</strong> Article Inserted SuccessFully.
            </div>


        <?php } ?>
        <?php if ($this->session->flashdata('data_deleted')) { ?>

            <div class="alert alert-danger container fadout"  style="margin-top: 20px;">
                <strong>Deleted!</strong> Article Deleted SuccessFully.
            </div>


        <?php } ?>

        <!-- Modal -->
        <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>

                    </div>
                    <div class="modal-body">
                        <h3>
                            <center>Are you sure you want to Logout ?</center> 
                        </h3>
                    </div>
                    <div class="modal-footer">
                        <a href="<?php echo site_url('Admin/logOut') ?>" class="btn btn-danger" >Logout</a>&nbsp;
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>
        <div class="panel panel-primary container ">
            <div class="panel-body">
                <a href="<?php echo site_url('Admin/addArticles'); ?>" class="btn btn-success btn-lg">Add Articles</a> <hr>

                <table class="table" id="dtDynamicVerticalScrollExample" class="table table-striped table-bordered table-sm" cellspacing="0"
                       width="100%">
                    <thead>

                    <th>Article Title</th>
                    <th>Article</th>
                    <th>Action</th>
                    </thead>

                    <tbody  class="table table-striped table-bordered">
                        <?php foreach ($articals as $articalList) {
                            ?>
                            <tr>

                                <td><?php echo $articalList->article_title; ?></td>
                                <td><?php echo $articalList->article; ?></td>
                                <td>
                                    <a href="<?php echo site_url('Admin/editUser/'.$articalList->id); ?>" class="btn btn-info"><i class="fa fa-pencil"></i></a>
                                    <a href="<?php echo site_url('Admin/deleteArticles/'.$articalList->id); ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                    <!--?=
                                    form_open('Admin/deleteArticles'),
                                    form_hidden('id', $articalList->id),
                                    form_submit(['name' => 'submit', 'class' => 'btn btn-danger', 'value' => 'Delete']),
                                    form_close();
                                    ?-->


                                </td>
                            </tr>
                        <?php } ?>

                    </tbody>
                </table>

            </div>
        </div>

        <footer class="well well-sm footer">
            <style>
                .footer {
                    position: fixed;
                    left: 0;
                    bottom: 0;
                    width: 100%;
                    color: black;
                    text-align: center;
                }
            </style>
            <!-- Copyright -->
            <div class="footer-copyright text-center py-3">
                © 2020 Copyright :- Fitness Icon
            </div>
            <!-- Copyright -->

        </footer>
        <script>
            $('.fadout').delay(5000).fadeOut(300);
        </script>
    </body>
</html>
