<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$tempuserslno = $this->uri->segment(3, 0);
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Stock Track | Delete User</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
		integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
		<link href="<?php echo base_url();?>res/css/uiss.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
    integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
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
          <div class="col-xs-12 col-md-4"></div>
          <div class="col-xs-12 col-md-4">
            <?php
            $query = $this->db->query("SELECT * FROM user WHERE usertype='employee' AND userslno=".$tempuserslno.";");
            foreach ($query->result() as $row)
            {
              echo "<div class='thumbnail'>
                <div class='caption'>
                  <div class='alert alert-warning' role='alert'>
                    <h4 class='text-center'>Do you want to delete this user?</h4>
                  </div>
                  <h3 class='text-uppercase text-center'><i class='fa fa-user-o'></i> ".$row->username."</h3>
                  <h5 class='text-center'><i class='fa fa-envelope-o'></i> ".$row->useremail."</h5>
                  <br />
                  <form action='".base_url()."index.php/welcome/deluser' method='post'>
                    <input type='hidden' value='".$row->userslno."' name='userslno'>
                    <button class='btn btn-danger text-uppercase btn-block' type='submit'>Delete</button>
                  </form>
                </div>
              </div>";
            }
            ?>
          </div>
          <div class="col-xs-12 col-md-4"></div>
        </div>
      </div>
    </section>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
  </body>
</html>
