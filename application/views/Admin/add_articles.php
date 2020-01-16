<html>
    <head>
        <?php require_once ('assets/html_head_links.php'); ?>
    </head>

    <body>
        <?php echo form_open('Admin/add_articles') ?>   
        <?php echo form_hidden('user_id',$this->session->userdata('id')); ?>
        
        <div class="container"  >
            <div class="panel panel-primary" style="margin-top: 40px;">

                <div class="panel-heading"><h4>Add Articles</h4></div>
                <div class="panel-body">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Article Titile</label>
                            <?php echo form_input(['class' => 'form-control', 'placeholder' => 'Enter Article Title', 'name' => 'article_title', 'value' => set_value('article_title')]); ?>
                            <span style="color:red"><?php echo form_error('article_title'); ?></span>
                        </div>
                        <div class="form-group">
                            <label>Article:</label>
                            <?php echo form_textarea(['class' => 'form-control', 'name' => 'article', 'value' => set_value('article')]); ?>
                            <span style="color:red"><?php echo form_error('article'); ?></span>
                        </div>
                        <br>
                        <?php echo form_submit(['type' => 'submit', 'class' => 'btn btn-success', 'value' => 'Submit']); ?>
                        <?php echo form_reset(['type' => 'reset', 'class' => 'btn btn-default', 'value' => 'Reset']); ?>
                        <a href="<?php echo site_url('Admin/welcome'); ?>" class="btn btn-primary">Back</a>
                    </div>

                </div>
            </div>
        </div>
        <?php echo form_close(); ?>

        <script>
            $('.fadout').delay(5000).fadeOut(300);
        </script>

    </body>
</html>