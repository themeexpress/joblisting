<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Job Listing</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url();?>/FrontendAsset/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url();?>/FrontendAsset/css/shop-item.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Job Finder</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <div class="col-lg-3">
          <h1 class="my-4">Job Category</h1>
          <div class="list-group">
            <?php foreach($job_category as $category){?>
            <a href="#" class="list-group-item"><?php echo $category->category_name; ?></a>
            <?php } ?>
           
          </div>
        </div>
        <!-- /.col-lg-3 -->

        <div class="col-lg-9">

          <!-- /.card -->
          <?php foreach($job_details_info as $job_details){?>
          <div class="card card-outline-secondary my-4">

            <div class="card-header">
              <span style="color:#06b52d;font-size:28px"><?php echo $job_details->job_name; ?></span> &nbsp; | &nbsp; <span style="color:#007bff;font-size:22px">Company:&nbsp;<?php echo $job_details->company_name; ?></span>
            </div>
            <div class="card-body">
              <p><strong>Vacancy : <?php echo $job_details->vacancy_amount; ?></strong></h4>
              <h4><u>Job Requirements</u></h4>
                <?php echo $job_details->job_requirements; ?>          
              <hr>              
              <small class="text-muted">Published Date <?php echo $job_details->published_date; ?> </small> | 
              <small class="text-muted">Last <?php echo $job_details->last_date; ?> </small>
              <hr>      
              <a href="<?php echo base_url()?>member-login" class="btn btn-success">Apply Online</a>
            </div>
          </div>
          <?php } ?>
          <!-- /.card -->
        
        </div>
        <!-- /.col-lg-9 -->

      </div>

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Job Listing 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url();?>/FrontendAsset/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url();?>/FrontendAsset/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
