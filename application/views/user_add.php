<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Stock Track | User Management</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
		integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
		<link href="<?php echo base_url();?>res/css/uiss.css" rel="stylesheet">
  </head>
  <body>
    <?php $this->load->view('navbar') ?>
    <header>
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <!-- <img class="img-responsive center-block" src="http://galliance-co.com/wp-content/uploads/2017/05/lg.png"
            alt="Stock Track" title="One stop for all of your needs"> -->
          </div>
        </div>
      </div>
    </header>

    <section>
      <div class="container">
        <div class="row">
          <div class="col-sm-4 col-xs-12"></div>
          <div class="col-sm-4 col-xs-12">
            <h1 class="text-center text-uppercase">Add User</h1>
            <form method="post" action="<?php echo base_url();?>index.php/welcome/adduser">
              <div class="form-group">
               <label for="InputEmail1">Full Name</label>
               <input type="text" class="form-control" name="username" placeholder="Full Name" required>
              </div>
              <div class="form-group">
               <label for="InputEmail1">Email address</label>
               <input type="email" class="form-control" name="useremail" placeholder="Email" required>
              </div>
              <div class="form-group">
               <label for="InputPassword">Password</label>
               <input type="password" class="form-control" name="userpass" placeholder="Password" required>
              </div>
              <input type="hidden" value="employee" name="usertype">
              <button type="submit" class="btn btn-success">Submit</button>
            </form>
          </div>
          <div class="col-sm-4 col-xs-12"></div>
        </div>
      </div>
    </section>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
  </body>
</html>
