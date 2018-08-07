<section class="content">
      <div class="row">
        <div class="col-md-12">    
          <div class="box"> 
          <h3 style="color:green">
						<?php 
						$message=$this->session->userdata('message');
						if ($message) {
							echo $message;
							$this->session->unset_userdata('message');
						}
						?>
					</h3>     
            <!-- /.box-header -->
            <div class="box-body pad">
              <form class="form-horizontal" action="<?php echo base_url();?>save-job" method="POST">
                <div class="form-group">
                  <label for="job_name" class="col-sm-2 control-label">Job Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="job_name" placeholder="Job Position">
                  </div>
                </div>
                <div class="form-group">
                  <label for="company_name" class="col-sm-2 control-label">Company Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="company_name" placeholder="Job Offer Company">
                  </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Select Job Category</label>
                    <div class="col-sm-10">
                      <select class="form-control" name="category_id">
                      <?php foreach($category_info as $job_category){?>
                        <option value="<?php echo $job_category->category_id;?>">
                          <?php echo $job_category->category_name;?>                            
                        </option>  
                      <?php } ?>                  
                      </select>
                    </div>
                </div>
                
                <div class="form-group">
                  <label for="job_requirements" class="col-sm-2 control-label">Job Requirements</label>
                  <div class="col-sm-10">
                    <textarea class="textarea" placeholder="Job Requirements" name="job_requirements"
                    style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                    </textarea>
                  </div>
                </div> 
              
                <div class="form-group">
                  <label for="vacancy_amount" class="col-sm-2 control-label">Vacancy Amount</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" name="vacancy_amount" placeholder="Vacancy Amount">
                  </div>
                </div>
                <div class="form-group">
                  <label for="last_date" class="col-sm-2 control-label">Last Date</label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control" name="last_date" placeholder="Last Date of Application">
                  </div>
                </div>
                <div class="box-footer">                
                <button type="submit" class="btn-lg btn btn-info pull-right">Submit</button>
              </div>
                         
              </form>
            </div>
          </div>
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
