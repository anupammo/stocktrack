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
    <title>Stock Track | Add Log</title>

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
            <h1 class='text-center text-info'>Add Log</h1>
          </div>
        </div>
      </div>
    </header>
    <section>
      <div class="container">
        <div class="row">
          <form method="" action="">
            <div class="form-group col-xs-12 col-sm-4">
              <label class="text-info">Customer</label>
              <select class="form-control">
                <option>Tom</option>
                <option>John</option>
              </select>
            </div>
            <div class="form-group col-xs-12 col-sm-4">
              <label class="text-info">Supplier</label>
              <select class="form-control">
                <option>Harry</option>
                <option>Tim</option>
              </select>
            </div>
            <div class="form-group col-xs-12 col-sm-4">
              <label class="text-info">Product</label>
              <select class="form-control">
                <option>Product A</option>
                <option>Product B</option>
              </select>
            </div>
            <?php
            $tmpusername = $this->session->userdata('username');
            echo "<input type='hidden' value='".$tmpusername."' >";
            ?>
            <div class="form-group col-xs-12 col-sm-4">
              <label class="text-info">Requestor</label>
              <input type="text" class="form-control">
            </div>
            <div class="form-group col-xs-12 col-sm-4">
              <label class="text-info">Subject</label>
              <input type="text" class="form-control">
            </div>
            <div class="form-group col-xs-12 col-sm-4">
              <label class="text-info">RFQ Date</label>
              <input type="date" class="form-control">
            </div>
            <div class="form-group col-xs-12 col-sm-4">
              <label class="text-info">Quote Date</label>
              <input type="date" class="form-control">
            </div>
            <div class="form-group col-xs-12 col-sm-4">
              <label class="text-info">GA-Offer</label>
              <input type="text" class="form-control">
            </div>
            <div class="form-group col-xs-12 col-sm-4">
              <label class="text-info">PO Number</label>
              <input type="text" class="form-control">
            </div>
            <div class="form-group col-xs-12 col-sm-4">
              <label class="text-info">PO Value</label>
              <input type="text" class="form-control">
            </div>
            <div class="form-group col-xs-12 col-sm-4">
              <label class="text-info">Milestones</label>
              <input type="number" class="form-control">
            </div>
            <div class="form-group col-xs-12 col-sm-4">
              <label class="text-info">Status</label>
              <select class="form-control">
                <option>Pending</option>
                <option>PO Awarded</option>
                <option>Cancel/Rejected</option>
              </select>
            </div>
            <div class="form-group col-xs-12">
              <label>Remarks</label>
              <textarea class="form-control" rows="3" name="cust_addr"></textarea>
            </div>
            <div class="form-group col-xs-12 col-sm-4">
              <button type="submit" class="btn btn-success">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </section>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
  </body>
</html>
