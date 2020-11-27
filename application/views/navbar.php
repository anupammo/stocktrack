<nav class="navbar navbar-default">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo base_url();?>">Stock Track</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <?php
        $tmpusertype = $this->session->userdata('usertype');
        $tmpusername = $this->session->userdata('username');
        if ($tmpusertype == 'admin') {
          echo "<li class='dropdown'>
            <a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button'
            aria-haspopup='true' aria-expanded='false'>User Mangement <span class='caret'></span></a>
            <ul class='dropdown-menu'>
              <li><a href='".base_url()."index.php/welcome/usermange'>Edit</a></li>
              <li><a href='".base_url()."index.php/welcome/useradd'>Add</a></li>
            </ul>
          </li>
          <li class='dropdown'>
            <a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true'
            aria-expanded='false'>".$tmpusername." <span class='caret'></span></a>
            <ul class='dropdown-menu'>
              <li><a href='".base_url()."index.php/welcome/logout'>Logout</a></li>
            </ul>
          </li>";
        } elseif ($tmpusertype == 'employee') {
          echo "<li><a href='".base_url()."index.php/welcome/addlog'>Add Log</a></li>
          <li class='dropdown'>
            <a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true'
            aria-expanded='false'>Customers <span class='caret'></span></a>
            <ul class='dropdown-menu'>
              <li><a href='".base_url()."index.php/welcome/customers'>View</a></li>
              <li><a href='".base_url()."index.php/welcome/addcustomer'>Add</a></li>
            </ul>
          </li>
          <li class='dropdown'>
            <a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true'
            aria-expanded='false'>Suppliers <span class='caret'></span></a>
            <ul class='dropdown-menu'>
              <li><a href='".base_url()."index.php/welcome/suppliers'>View</a></li>
              <li><a href='".base_url()."index.php/welcome/addsupplier'>Add</a></li>
            </ul>
          </li>
          <li class='dropdown'>
            <a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true'
            aria-expanded='false'>Products <span class='caret'></span></a>
            <ul class='dropdown-menu'>
              <li><a href='".base_url()."index.php/welcome/products'>View</a></li>
              <li><a href='".base_url()."index.php/welcome/addproduct'>Add</a></li>
            </ul>
          </li>
          <li class='dropdown'>
            <a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true'
            aria-expanded='false'>".$tmpusername." <span class='caret'></span></a>
            <ul class='dropdown-menu'>
              <li><a href='".base_url()."index.php/welcome/logout'>Logout</a></li>
            </ul>
          </li>";
        } else {
          redirect('welcome/emplogin', 'refresh');
        }
        ?>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
