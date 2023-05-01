
           
    
            <!-- start page title -->
            <div class="row">
              <div class="col-12">
              <div class="page-title-box d-sm-flex align-items-center justify-content-between">
              <h3 class="mb-sm-0">Dashboard</h3>
  
  
  
              </div>
              </div>
              </div>
              <!-- end page title -->

  
              <div class="row">
              <div class="col-xl-12">
              
               
            

              <div class="card">
              <div class="card-body pb-0">
              <div class="float-end d-none d-md-inline-block">
              <div class="dropdown card-header-dropdown">
              <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span class="text-muted">Report<i class="ri ri-file-user-line"></i></span>
              </a>
             
              </div>
              </div>
             
              <div class="text-center pt-3">
              
              <div class="col-sm-4 mb-3 mb-sm-0">
             
             
              </div>
              </div>
              <div class="card-body py-0 px-2">
                  <h3 class="mx-2 my-4">Learner Details</h3>
                  <div class="mx-2 my-4">
                  <span class="" href="#"> name: {{ Auth::user()->name }}</span></br>
                  <span class="" href="#"> exam number: {{ Auth::user()->exam_number }}</span>
                  
                  </div>
              </div>
              </div><!-- end card -->
              </div>
              <!-- end col -->
              
              <!-- end row -->
  
              <div class="row">
              <div class="col-xl-8">
              <div class="card">
              <div class="card-body">
              <div class="dropdown float-end">
              <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="mdi mdi-dots-vertical"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-end">
              <!-- item-->
              <a href="javascript:void(0);" class="dropdown-item">Sales Report</a>
              <!-- item-->
              <a href="javascript:void(0);" class="dropdown-item">Export Report</a>
              <!-- item-->
              <a href="javascript:void(0);" class="dropdown-item">Profit</a>
              <!-- item-->
              <a href="javascript:void(0);" class="dropdown-item">Action</a>
              </div>
              </div>
  
              <h4 class="card-title mb-4">Lessons</h4>
  
              <div class="table-responsive">
              <table class="table table-centered mb-0 align-middle table-hover table-nowrap">
              <thead class="table-light">
              <tr>
              <th>Name</th>
              <th>Position</th>
              <th>Status</th>
              <th>Age</th>
              <th>Start date</th>
              <th style="width: 120px;">Salary</th>
              </tr>
              </thead><!-- end thead -->
              <tbody>
              <tr>
              <td><h6 class="mb-0">Charles Casey</h6></td>
              <td>Web Developer</td>
              <td>
              <div class="font-size-13"><i class="ri-checkbox-blank-circle-fill font-size-10 text-success align-middle me-2"></i>Active</div>
              </td>
              <td>
              23
              </td>
              <td>
              04 Apr, 2021
              </td>
              <td>$42,450</td>
              </tr>
              <!-- end -->
              <tr>
              <td><h6 class="mb-0">Alex Adams</h6></td>
              <td>Python Developer</td>
              <td>
              <div class="font-size-13"><i class="ri-checkbox-blank-circle-fill font-size-10 text-warning align-middle me-2"></i>Deactive</div>
              </td>
              <td>
              28
              </td>
              <td>
              01 Aug, 2021
              </td>
              <td>$25,060</td>
              </tr>
              <!-- end -->
              <tr>
              <td><h6 class="mb-0">Prezy Kelsey</h6></td>
              <td>Senior Javascript Developer</td>
              <td>
              <div class="font-size-13"><i class="ri-checkbox-blank-circle-fill font-size-10 text-success align-middle me-2"></i>Active</div>
              </td>
              <td>
              35
              </td>
              <td>
              15 Jun, 2021
              </td>
              <td>$59,350</td>
              </tr>
              <!-- end -->
              <tr>
              <td><h6 class="mb-0">Ruhi Fancher</h6></td>
              <td>React Developer</td>
              <td>
              <div class="font-size-13"><i class="ri-checkbox-blank-circle-fill font-size-10 text-success align-middle me-2"></i>Active</div>
              </td>
              <td>
              25
              </td>
              <td>
              01 March, 2021
              </td>
              <td>$23,700</td>
              </tr>
              <!-- end -->
              <tr>
              <td><h6 class="mb-0">Juliet Pineda</h6></td>
              <td>Senior Web Designer</td>
              <td>
              <div class="font-size-13"><i class="ri-checkbox-blank-circle-fill font-size-10 text-success align-middle me-2"></i>Active</div>
              </td>
              <td>
              38
              </td>
              <td>
              01 Jan, 2021
              </td>
              <td>$69,185</td>
              </tr>
              <!-- end -->
              <tr>
              <td><h6 class="mb-0">Den Simpson</h6></td>
              <td>Web Designer</td>
              <td>
              <div class="font-size-13"><i class="ri-checkbox-blank-circle-fill font-size-10 text-warning align-middle me-2"></i>Deactive</div>
              </td>
              <td>
              21
              </td>
              <td>
              01 Sep, 2021
              </td>
              <td>$37,845</td>
              </tr>
              <!-- end -->
              <tr>
              <td><h6 class="mb-0">Mahek Torres</h6></td>
              <td>Senior Laravel Developer</td>
              <td>
              <div class="font-size-13"><i class="ri-checkbox-blank-circle-fill font-size-10 text-success align-middle me-2"></i>Active</div>
              </td>
              <td>
              32
              </td>
              <td>
              20 May, 2021
              </td>
              <td>$55,100</td>
              </tr>
              <!-- end -->
              </tbody><!-- end tbody -->
              </table> <!-- end table -->
              </div>
              </div><!-- end card -->
              </div><!-- end card -->
              </div>
              <!-- end col -->
              <div class="col-xl-4">
              <div class="card">
              <div class="card-body">
              <div class="float-end">
              <select class="form-select shadow-none form-select-sm">
              <option selected>Apr</option>
              <option value="1">Mar</option>
              <option value="2">Feb</option>
              <option value="3">Jan</option>
              </select>
              </div>
              <h4 class="card-title mb-4">Assessment Performance</h4>
  
              <div class="row">
              <div class="col-4">
              <div class="text-center mt-4">
              <h5>3475</h5>
              <p class="mb-2 text-truncate">Market Place</p>
              </div>
              </div>
              <!-- end col -->
              <div class="col-4">
              <div class="text-center mt-4">
              <h5>458</h5>
              <p class="mb-2 text-truncate">Last Week</p>
              </div>
              </div>
              <!-- end col -->
              <div class="col-4">
              <div class="text-center mt-4">
              <h5>9062</h5>
              <p class="mb-2 text-truncate">Last Month</p>
              </div>
              </div>
              <!-- end col -->
              </div>
              <!-- end row -->
  
              <div class="mt-4">
              <div id="donut-chart" class="apex-charts"></div>
              </div>
              </div>
              </div><!-- end card -->
              </div><!-- end col -->
              </div>
           
  