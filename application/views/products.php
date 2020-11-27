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
    <title>Stock Track | Products</title>

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
            <h1 class="text-center text-uppercase">Products</h1>
          </div>
        </div>
      </div>
    </header>
    <section>
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <div class="table-responsive">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>#</th>
                    <th class="text-center">Name</th>
                    <th class="text-center">Manufacturer</th>
                    <th class="text-center">Part No</th>
                    <th class="text-center">Description</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $count = 0;
                  $query = $this->db->query("SELECT * FROM product;");
                  foreach ($query->result() as $row)
                  {
                    $count++;
                    echo "<tr>
                      <th scope='row'>$count</th>
                      <td class='text-center'>".$row->prod_name."</td>
                      <td class='text-center'>".$row->prod_manu."</td>
                      <td class='text-center'>".$row->prod_partno."</td>
                      <td class='text-center'>".$row->prod_desc."</td>
                    </tr>";
                  }
                  ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
  </body>
</html>
