<?php
include 'common.php';
?>
<html>
    <head>
      <link href="../bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <script src="../bootstrap-3.3.7-dist/js/jquery-3.2.1.min.js" type="text/javascript"></script>
        <script src="../bootstrap-3.3.7-dist/js/bootstrap.min.js" type="text/javascript"></script>
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title></title>
    </head>
    <body>
            <nav class="navbar navbar-inverse"> 
                <div class="container">      
              <div class="navbar-header">      
                  <a href="../index.php" class="navbar-brand">COLLEGE HACK</a>         
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
              </div>
                    <?php if (!isset($_SESSION['id'])) { ?>
                <div class="collapse navbar-collapse" id="mynavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="../signup.php"><span class="glyphicon glyphicon-user">SignUp</span></a></li>
                        <li><a data-toggle="modal" data-target="#login"><span class="glyphicon glyphicon-log-in"> Login</span></a></li>
                        <li><a href="../contactus.php"><span class="glyphicon glyphicon-phone">Contact Us</span></a></li>
                    </ul>
                    </div> <?php } 
                    else
                     { ?>
                    <div class="collapse navbar-collapse" id="mynavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="../Settings.php"><span class="glyphicon glyphicon-user">Settings </span></a></li>
                        <li><a href="../logout.php"><span class="glyphicon glyphicon-log-out">Logout </span></a></li>
                    </ul>
                    </div> <?php }?>
                </div>
            </nav>
            
        </div>
        <!--modal -->
        <div id="login" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" style="float:right;">&times;</button>
                        <h4>  Login </h4>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="../Login_Check.php">
                            <div class='form-group'>
                                <input type='text' name='user' placeholder="Username" class="form-control">
                            </div>
                            <div class='form-group'>
                                <input type='password' name='pass' placeholder="Password" class="form-control">
                            </div>
                            <div class='form-group'>
                            <button type='submit' class='btn btn-primary' name='submit'>Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

