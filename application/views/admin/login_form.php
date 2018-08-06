<div class="col-md-4 col-md-offset-4">
<div class="alert <?php echo $this->session->flashdata('alert');?>">
  <b> <?php echo $this->session->flashdata('msg');?> </b>
</div>
</div>
<div class="container">
    <div class="row">

        <div id="title_login" class="col-md-8 col-md-offset-2">
            <center>

                <h3>
                </h3>
            </center>
        </div>
        <div class="col-md-4 col-md-offset-4">
            <center>
                <!--<img alt="Brand" src="<?php echo base_url(); ?>assets/images/logo.png" height="180" width="180">-->
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 id="silahkan_masuk"class="title">Login Admin</h3>
                    </div>
                    <div class="panel-body">
                        <?php echo validation_errors(); if(isset($message)) echo ' '.$message;?>
                        <form name="form1" method="POST" action="<?php echo base_url(); ?>auth/verify">
                        <fieldset>
                            <div class="form-group">
                                <input required class="form-control" type="text" name="username" id="username">
                            </div>
                            <div class="form-group">
                                <input required class="form-control" type="password" name="password" id="password">
                            </div>
                            &nbsp;
                                <button type="submit" name="submit" value="submit" class="btn btn-sm btn-primary">Login</button>
                        </fieldset>
                      </form>
                    </div>
                </div>
            </center>
        </div>
    </div>
</div>
