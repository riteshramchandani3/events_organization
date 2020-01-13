<html>
    <head>
        <?php print_r($articals) ;?>
        <?php require_once ('assets/html_head_links.php'); ?>
    </head>
    <body>
        <div class="well well-sm"><h3>Welcome to the Admin Panel</h3></div>
        <div class="container">
            <table class="table table-striped table-bordered">
                <thead>
                <th>S.No.</th>
                <th>Article Title</th>
                <th>Article</th>
                <th>Action</th>
                </thead>

                <tbody>
                    <?php foreach($articals as $articalList)
                        
                        ?>

                <td><?php echo $articalList->id ;?></td>
                <td><?php echo $articalList->article_title ;?></td>
                <td><?php echo $articalList->article ;?></td>
                <td><a href="#" class="btn btn-success">Edit</a>&nbsp;<a href="#" class="btn btn-danger">Delete</a></td>



                </tbody>
            </table>
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

    </body>
</html>
