<html>
    <head>
        <?php require_once ('assets/html_head_links.php'); ?>
    </head>

    <body>
        <?php echo form_open('Admin/signUp') ?>
        <div class="container">
            <div class="panel panel-primary" style="margin-top: 20px;">
                <div class="panel-heading"><h4>SignUp</h4></div>
                <div class="panel-body">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Username</label>
                            <?php echo form_input(['class' => 'form-control', 'placeholder' => 'Enter username', 'name' => 'username', 'value' => set_value('username')]); ?>
                            <span style="color:red"><?php echo form_error('username'); ?></span>
                        </div>
                        <div class="form-group">
                            <label>Password:</label>
                            <?php echo form_password(['class' => 'form-control', 'placeholder' => 'Enter Password', 'name' => 'password', 'value' => set_value('password')]); ?>
                            <span style="color:red"><?php echo form_error('password'); ?></span>
                        </div>
                        <div class="form-group">
                            <label>First Name:</label>
                            <?php echo form_input(['class' => 'form-control', 'placeholder' => 'Enter First Name', 'name' => 'firstname', 'value' => set_value('firstname')]); ?>
                            <span style="color:red"><?php echo form_error('firstname'); ?></span>
                        </div>
                        <div class="form-group">
                            <label>Last Name:</label>
                            <?php echo form_input(['class' => 'form-control', 'placeholder' => 'Enter Last name', 'name' => 'lastname', 'value' => set_value('lastname')]); ?>
                            <span style="color:red"><?php echo form_error('lastname'); ?></span>
                        </div>
                        <div class="form-group">
                            <label>Email:</label>
                            <?php echo form_input(['class' => 'form-control', 'placeholder' => 'Enter Email', 'name' => 'email', 'value' => set_value('email')]); ?>
                            <span style="color:red"><?php echo form_error('email'); ?></span>
                        </div>
                        <br>
                        <?php echo form_submit(['type' => 'submit', 'class' => 'btn btn-success', 'value' => 'Submit']); ?>
                        <?php echo form_reset(['type' => 'reset', 'class' => 'btn btn-default', 'value' => 'Reset']); ?>
                    </div>
                    <div class="col-md-4">
                        <center><span style="font-size:50px; color: 460303;"><i class="fa fa-5x fa-users" style="padding: 50;" ></i></span></center> 
                    </div>
                </div>
            </div>
        </div>
        <?php echo form_close(); ?>
    </body>
</html>