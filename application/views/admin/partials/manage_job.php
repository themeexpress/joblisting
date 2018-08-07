<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Job Information</h3>
              
              <?php $message=$this->session->userdata('message');
            if ($message) {?>
              <div class="alert alert-info">
                <?php echo $message; ?>
              </div>
              <?php }              
              $this->session->unset_userdata('message');
            
            ?>
                         
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                  
                <tr>
                  <th>Job Name</th>
                  <th>Job Category</th>
                  <th>Job Company</th>
                  <th>Requirements</th>
                  <th>Vacancy No</th>
                  <th>Publication Date</th>
                  <th>Last Date</th>
                  <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php $this->load->helper('text');?>
                <?php foreach($job_details_info_join as $job_details){?>
                <tr>
                  <td><?php echo $job_details->job_name; ?></td>
                  <td><?php //echo word_limiter($v_portfolio->porfolio_description,4);?></td>
                  <td><?php echo $job_details->category_name;  ?></td>
                  <td><?php echo $job_details->company_name;  ?></td>
                  <td><?php echo word_limiter($job_details->job_requirements,4);  ?> </td>
                  <td><?php echo $job_details->vacancy_amount;  ?></td>
                  <td><?php echo $job_details->publication_date;  ?></td>
                  <td><?php echo $job_details->last_date; ?> </td>
                  <td><a href="<?php echo base_url();?>edit-job/<?php echo $job_details->job_id; ?>">Edit</a> | <a href="<?php echo base_url();?>delete-job/<?php echo $job_details->job_id; ?>">Delete</a></td>
                </tr>
                <?php } ?>                
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->