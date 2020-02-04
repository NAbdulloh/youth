<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="<?= base_url('assets/css/bootstrap.css');?>" rel="stylesheet" />
    <link href="<?= base_url('assets/css/font-awesome.css');?>" rel="stylesheet" />
    <link href="<?= base_url('assets/css/custom.css');?>" rel="stylesheet" />
    <link href="<?= base_url('assets/css/navbar.css');?>" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<body>
    <div class="container">
        <div class="row text-center ">
            <div class="col-md-12">
                <br /><br />
                <h2>Youth</h2>
                <br />
            </div>
        </div>
         <div class="row ">
            <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <strong> Enter Details To Login </strong>  
                </div>
                <div class="panel-body">
                  <form method="post" action="<?= base_url('C_login/login');?>">
                    <br />
                    <div class="form-group input-group">
                      <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                      <input type="text" class="form-control" placeholder="Your Username" name="username"/>
                    </div>
                    <div class="form-group input-group">
                      <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                      <input type="password" class="form-control"  placeholder="Your Password" name="password"/>
                    </div>
                    <div class="form-group">
                      <label class="checkbox-inline">
                      <input type="checkbox" /> Remember me
                      </label>
                    </div>
                      <input type="submit" value="submit" name="submit">
                  </form>
                </div>       
              </div>
            </div>       
        </div>
    </div>
</body>
</html>
