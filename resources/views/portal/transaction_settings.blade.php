@extends('layouts.main')

@section('title','Terra || Home')

@section('content')

<main id="content" role="main" class="main">
    <!-- Content -->
    <div class="content container-fluid">
      <!-- Page Header -->
      <div class="page-header">
        <div class="row align-items-end">
          <div class="col-sm mb-2 mb-sm-0">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-no-gutter">
                  <li class="breadcrumb-item">
                    <a class="breadcrumb-link" href="javascript:;">Dashboard</a>
                  </li>
                  <li class="breadcrumb-item">
                    <a class="breadcrumb-link" href="javascript:;">Transaction settings</a>
                    <div></div>
                  </li>
                  <!-- <li class="breadcrumb-item active" aria-current="page">Overview</li> -->
                </ol>
              </nav>

            <h1 class="page-header-title">Transaction settings</h1>

           <div class="mt-2">
            <a class="btn btn-primary" href="#">
                <i class="bi-person-plus-fill me-1"></i> Create Rate
              </a>
           </div>
          </div>
          <!-- End Col -->

          <div class="col-sm-auto">
            
          </div>
          <!-- End Col -->
        </div>
        <!-- End Row -->
      </div>
      <!-- End Page Header -->

<!-- Accordion -->
<div class="accordion" id="accordionExample">
    <div class="accordion-item">
      <div class="accordion-header" id="headingOne">
        <a class="accordion-button" role="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            ENERGY
        </a>
      </div>
      <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
        <div class="accordion-body">
            <div class="card">
               
                <!-- Table -->
                <div class="table-responsive datatable-custom position-relative">
                  <table id="datatable" class="table table-lg table-borderless table-thead-bordered table-nowrap table-align-middle card-table" data-hs-datatables-options='{
                           "columnDefs": [{
                              "targets": [0, 7],
                              "orderable": false
                            }],
                           "order": [],
                           "info": {
                             "totalQty": "#datatableWithPaginationInfoTotalQty"
                           },
                           "search": "#datatableSearch",
                           "entries": "#datatableEntries",
                           "pageLength": 15,
                           "isResponsive": false,
                           "isShowPaging": false,
                           "pagination": "datatablePagination"
                         }'>
                    <thead class="thead-light">
                      <tr>
                        
                        <th>Agent Commission</th>
                        <th class="table-column-ps-0">Aggt Commission</th>
                        <th>Charges</th>
                        <th>Minimum </th>
                        <th>Maximum</th>
                        <th>Action</th>
                      </tr>
                    </thead>
        
                    <tbody>
                      <tr>
                        
                        <td>
                            <span class="d-block fs-5">LAGOS</span>
                          </td>
                        <td class="table-column-ps-0">
                          <a class="d-flex align-items-center" href="user-profile.html">
                            <!-- <div class="avatar avatar-circle">
                              <img class="avatar-img" src="assets/img/160x160/img10.jpg" alt="Image Description">
                            </div> -->
                            <div class="ms-3">
                              <span class="d-block h5 text-inherit mb-0">0.5%</span>
                            </div>
                          </a>
                        </td>
                       
                        <td>
                          0
                        </td>
                        <td>
                          0.4%
                        </td>
                        <td>7</td>
                        <td>
                           <a href="" class="badge bg-danger">Delete Sub Rate</a>
                        </td>
                      </tr>
        
                      <tr>
                        
                        <td>
                            <span class="d-block fs-5">LAGOS</span>
                          </td>
                        <td class="table-column-ps-0">
                          <a class="d-flex align-items-center" href="user-profile.html">
                            <!-- <div class="avatar avatar-circle">
                              <img class="avatar-img" src="assets/img/160x160/img10.jpg" alt="Image Description">
                            </div> -->
                            <div class="ms-3">
                              <span class="d-block h5 text-inherit mb-0">0.5%</span>
                            </div>
                          </a>
                        </td>
                       
                        <td>
                          0</span>0
                        </td>
                        <td>
                          0.4%
                        </td>
                        <td>7</td>
                        <td>
                           <a href="" class="badge bg-danger">Delete Sub Rate</a>
                        </td>
                      </tr>
        
                      <tr>
                        
                        <td>
                            <span class="d-block fs-5">LAGOS</span>
                          </td>
                        <td class="table-column-ps-0">
                          <a class="d-flex align-items-center" href="user-profile.html">
                            <!-- <div class="avatar avatar-circle">
                              <img class="avatar-img" src="assets/img/160x160/img10.jpg" alt="Image Description">
                            </div> -->
                            <div class="ms-3">
                              <span class="d-block h5 text-inherit mb-0">0.5%</span>
                            </div>
                          </a>
                        </td>
                       
                        <td>
                          1
                        </td>
                        <td>
                          0.4%
                        </td>
                        <td>7</td>
                        <td>
                           <a href="" class="badge bg-danger">Delete Sub Rate</a>
                        </td>
                      </tr>
        
                      <tr>
                        
                        <td>
                            <span class="d-block fs-5">LAGOS</span>
                          </td>
                        <td class="table-column-ps-0">
                          <a class="d-flex align-items-center" href="user-profile.html">
                            <!-- <div class="avatar avatar-circle">
                              <img class="avatar-img" src="assets/img/160x160/img10.jpg" alt="Image Description">
                            </div> -->
                            <div class="ms-3">
                              <span class="d-block h5 text-inherit mb-0">0.5%</span>
                            </div>
                          </a>
                        </td>
                       
                        <td>
                          0</span>0
                        </td>
                        <td>
                          0.4%
                        </td>
                        <td>7</td>
                        <td>
                           <a href="" class="badge bg-danger">Delete Sub Rate</a>
                        </td>
                      </tr>
        
                
        
                    </tbody>
                  </table>
                </div>
                <!-- End Table -->
        
                <!-- Footer -->
                <div class="card-footer">
                  <div class="row justify-content-center justify-content-sm-between align-items-sm-center">
                    <div class="col-sm mb-2 mb-sm-0">
                      <div class="d-flex justify-content-center justify-content-sm-start align-items-center">
                        <span class="me-2">Showing:</span>
        
                        <!-- Select -->
                        <div class="tom-select-custom">
                          <select id="datatableEntries" class="js-select form-select form-select-borderless w-auto" autocomplete="off" data-hs-tom-select-options='{
                                    "searchInDropdown": false,
                                    "hideSearch": true
                                  }'>
                            <option value="10">10</option>
                            <option value="15" selected="">15</option>
                            <option value="20">20</option>
                          </select>
                        </div>
                        <!-- End Select -->
        
                        <span class="text-secondary me-2">of</span>
        
                        <!-- Pagination Quantity -->
                        <span id="datatableWithPaginationInfoTotalQty"></span>
                      </div>
                    </div>
                    <!-- End Col -->
        
                    <div class="col-sm-auto">
                      <div class="d-flex justify-content-center justify-content-sm-end">
                        <!-- Pagination -->
                        <nav id="datatablePagination" aria-label="Activity pagination"></nav>
                      </div>
                    </div>
                    <!-- End Col -->
                  </div>
                  <!-- End Row -->
                </div>
                <!-- End Footer -->
              </div>
        </div>
      </div>
    </div>
    <div class="accordion-item">
      <div class="accordion-header" id="headingTwo">
        <a class="accordion-button collapsed" role="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            CASHOUT
        </a>
      </div>
      <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
        <div class="accordion-body">
            <div class="card">
               
                <!-- Table -->
                <div class="table-responsive datatable-custom position-relative">
                  <table id="datatable" class="table table-lg table-borderless table-thead-bordered table-nowrap table-align-middle card-table" data-hs-datatables-options='{
                           "columnDefs": [{
                              "targets": [0, 7],
                              "orderable": false
                            }],
                           "order": [],
                           "info": {
                             "totalQty": "#datatableWithPaginationInfoTotalQty"
                           },
                           "search": "#datatableSearch",
                           "entries": "#datatableEntries",
                           "pageLength": 15,
                           "isResponsive": false,
                           "isShowPaging": false,
                           "pagination": "datatablePagination"
                         }'>
                    <thead class="thead-light">
                      <tr>
                        
                        <th>Agent Commission</th>
                        <th class="table-column-ps-0">Aggt Commission</th>
                        <th>Charges</th>
                        <th>Minimum </th>
                        <th>Maximum</th>
                        <th>Action</th>
                      </tr>
                    </thead>
        
                    <tbody>
                      <tr>
                        
                        <td>
                            <span class="d-block fs-5">LAGOS</span>
                          </td>
                        <td class="table-column-ps-0">
                          <a class="d-flex align-items-center" href="user-profile.html">
                            <!-- <div class="avatar avatar-circle">
                              <img class="avatar-img" src="assets/img/160x160/img10.jpg" alt="Image Description">
                            </div> -->
                            <div class="ms-3">
                              <span class="d-block h5 text-inherit mb-0">0.5%</span>
                            </div>
                          </a>
                        </td>
                       
                        <td>
                          0
                        </td>
                        <td>
                          0.4%
                        </td>
                        <td>7</td>
                        <td>
                           <a href="" class="badge bg-danger">Delete Sub Rate</a>
                        </td>
                      </tr>
        
                      <tr>
                        
                        <td>
                            <span class="d-block fs-5">LAGOS</span>
                          </td>
                        <td class="table-column-ps-0">
                          <a class="d-flex align-items-center" href="user-profile.html">
                            <!-- <div class="avatar avatar-circle">
                              <img class="avatar-img" src="assets/img/160x160/img10.jpg" alt="Image Description">
                            </div> -->
                            <div class="ms-3">
                              <span class="d-block h5 text-inherit mb-0">0.5%</span>
                            </div>
                          </a>
                        </td>
                       
                        <td>
                          0</span>0
                        </td>
                        <td>
                          0.4%
                        </td>
                        <td>7</td>
                        <td>
                           <a href="" class="badge bg-danger">Delete Sub Rate</a>
                        </td>
                      </tr>
        
                      <tr>
                        
                        <td>
                            <span class="d-block fs-5">LAGOS</span>
                          </td>
                        <td class="table-column-ps-0">
                          <a class="d-flex align-items-center" href="user-profile.html">
                            <!-- <div class="avatar avatar-circle">
                              <img class="avatar-img" src="assets/img/160x160/img10.jpg" alt="Image Description">
                            </div> -->
                            <div class="ms-3">
                              <span class="d-block h5 text-inherit mb-0">0.5%</span>
                            </div>
                          </a>
                        </td>
                       
                        <td>
                          1
                        </td>
                        <td>
                          0.4%
                        </td>
                        <td>7</td>
                        <td>
                           <a href="" class="badge bg-danger">Delete Sub Rate</a>
                        </td>
                      </tr>
        
                      <tr>
                        
                        <td>
                            <span class="d-block fs-5">LAGOS</span>
                          </td>
                        <td class="table-column-ps-0">
                          <a class="d-flex align-items-center" href="user-profile.html">
                            <!-- <div class="avatar avatar-circle">
                              <img class="avatar-img" src="assets/img/160x160/img10.jpg" alt="Image Description">
                            </div> -->
                            <div class="ms-3">
                              <span class="d-block h5 text-inherit mb-0">0.5%</span>
                            </div>
                          </a>
                        </td>
                       
                        <td>
                          0</span>0
                        </td>
                        <td>
                          0.4%
                        </td>
                        <td>7</td>
                        <td>
                           <a href="" class="badge bg-danger">Delete Sub Rate</a>
                        </td>
                      </tr>
        
                
        
                    </tbody>
                  </table>
                </div>
                <!-- End Table -->
        
                <!-- Footer -->
                <div class="card-footer">
                  <div class="row justify-content-center justify-content-sm-between align-items-sm-center">
                    <div class="col-sm mb-2 mb-sm-0">
                      <div class="d-flex justify-content-center justify-content-sm-start align-items-center">
                        <span class="me-2">Showing:</span>
        
                        <!-- Select -->
                        <div class="tom-select-custom">
                          <select id="datatableEntries" class="js-select form-select form-select-borderless w-auto" autocomplete="off" data-hs-tom-select-options='{
                                    "searchInDropdown": false,
                                    "hideSearch": true
                                  }'>
                            <option value="10">10</option>
                            <option value="15" selected="">15</option>
                            <option value="20">20</option>
                          </select>
                        </div>
                        <!-- End Select -->
        
                        <span class="text-secondary me-2">of</span>
        
                        <!-- Pagination Quantity -->
                        <span id="datatableWithPaginationInfoTotalQty"></span>
                      </div>
                    </div>
                    <!-- End Col -->
        
                    <div class="col-sm-auto">
                      <div class="d-flex justify-content-center justify-content-sm-end">
                        <!-- Pagination -->
                        <nav id="datatablePagination" aria-label="Activity pagination"></nav>
                      </div>
                    </div>
                    <!-- End Col -->
                  </div>
                  <!-- End Row -->
                </div>
                <!-- End Footer -->
              </div>
        </div>
      </div>
    </div>
    <div class="accordion-item">
      <div class="accordion-header" id="headingThree">
        <a class="accordion-button collapsed" role="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            DEPOSIT
        </a>
      </div>
      <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
        <div class="accordion-body">
            <div class="card">
               
                <!-- Table -->
                <div class="table-responsive datatable-custom position-relative">
                  <table id="datatable" class="table table-lg table-borderless table-thead-bordered table-nowrap table-align-middle card-table" data-hs-datatables-options='{
                           "columnDefs": [{
                              "targets": [0, 7],
                              "orderable": false
                            }],
                           "order": [],
                           "info": {
                             "totalQty": "#datatableWithPaginationInfoTotalQty"
                           },
                           "search": "#datatableSearch",
                           "entries": "#datatableEntries",
                           "pageLength": 15,
                           "isResponsive": false,
                           "isShowPaging": false,
                           "pagination": "datatablePagination"
                         }'>
                    <thead class="thead-light">
                      <tr>
                        
                        <th>Agent Commission</th>
                        <th class="table-column-ps-0">Aggt Commission</th>
                        <th>Charges</th>
                        <th>Minimum </th>
                        <th>Maximum</th>
                        <th>Action</th>
                      </tr>
                    </thead>
        
                    <tbody>
                      <tr>
                        
                        <td>
                            <span class="d-block fs-5">LAGOS</span>
                          </td>
                        <td class="table-column-ps-0">
                          <a class="d-flex align-items-center" href="user-profile.html">
                            <!-- <div class="avatar avatar-circle">
                              <img class="avatar-img" src="assets/img/160x160/img10.jpg" alt="Image Description">
                            </div> -->
                            <div class="ms-3">
                              <span class="d-block h5 text-inherit mb-0">0.5%</span>
                            </div>
                          </a>
                        </td>
                       
                        <td>
                          0
                        </td>
                        <td>
                          0.4%
                        </td>
                        <td>7</td>
                        <td>
                           <a href="" class="badge bg-danger">Delete Sub Rate</a>
                        </td>
                      </tr>
        
                      <tr>
                        
                        <td>
                            <span class="d-block fs-5">LAGOS</span>
                          </td>
                        <td class="table-column-ps-0">
                          <a class="d-flex align-items-center" href="user-profile.html">
                            <!-- <div class="avatar avatar-circle">
                              <img class="avatar-img" src="assets/img/160x160/img10.jpg" alt="Image Description">
                            </div> -->
                            <div class="ms-3">
                              <span class="d-block h5 text-inherit mb-0">0.5%</span>
                            </div>
                          </a>
                        </td>
                       
                        <td>
                          0</span>0
                        </td>
                        <td>
                          0.4%
                        </td>
                        <td>7</td>
                        <td>
                           <a href="" class="badge bg-danger">Delete Sub Rate</a>
                        </td>
                      </tr>
        
                      <tr>
                        
                        <td>
                            <span class="d-block fs-5">LAGOS</span>
                          </td>
                        <td class="table-column-ps-0">
                          <a class="d-flex align-items-center" href="user-profile.html">
                            <!-- <div class="avatar avatar-circle">
                              <img class="avatar-img" src="assets/img/160x160/img10.jpg" alt="Image Description">
                            </div> -->
                            <div class="ms-3">
                              <span class="d-block h5 text-inherit mb-0">0.5%</span>
                            </div>
                          </a>
                        </td>
                       
                        <td>
                          1
                        </td>
                        <td>
                          0.4%
                        </td>
                        <td>7</td>
                        <td>
                           <a href="" class="badge bg-danger">Delete Sub Rate</a>
                        </td>
                      </tr>
        
                      <tr>
                        
                        <td>
                            <span class="d-block fs-5">LAGOS</span>
                          </td>
                        <td class="table-column-ps-0">
                          <a class="d-flex align-items-center" href="user-profile.html">
                            <!-- <div class="avatar avatar-circle">
                              <img class="avatar-img" src="assets/img/160x160/img10.jpg" alt="Image Description">
                            </div> -->
                            <div class="ms-3">
                              <span class="d-block h5 text-inherit mb-0">0.5%</span>
                            </div>
                          </a>
                        </td>
                       
                        <td>
                          0</span>0
                        </td>
                        <td>
                          0.4%
                        </td>
                        <td>7</td>
                        <td>
                           <a href="" class="badge bg-danger">Delete Sub Rate</a>
                        </td>
                      </tr>
        
                
        
                    </tbody>
                  </table>
                </div>
                <!-- End Table -->
        
                <!-- Footer -->
                <div class="card-footer">
                  <div class="row justify-content-center justify-content-sm-between align-items-sm-center">
                    <div class="col-sm mb-2 mb-sm-0">
                      <div class="d-flex justify-content-center justify-content-sm-start align-items-center">
                        <span class="me-2">Showing:</span>
        
                        <!-- Select -->
                        <div class="tom-select-custom">
                          <select id="datatableEntries" class="js-select form-select form-select-borderless w-auto" autocomplete="off" data-hs-tom-select-options='{
                                    "searchInDropdown": false,
                                    "hideSearch": true
                                  }'>
                            <option value="10">10</option>
                            <option value="15" selected="">15</option>
                            <option value="20">20</option>
                          </select>
                        </div>
                        <!-- End Select -->
        
                        <span class="text-secondary me-2">of</span>
        
                        <!-- Pagination Quantity -->
                        <span id="datatableWithPaginationInfoTotalQty"></span>
                      </div>
                    </div>
                    <!-- End Col -->
        
                    <div class="col-sm-auto">
                      <div class="d-flex justify-content-center justify-content-sm-end">
                        <!-- Pagination -->
                        <nav id="datatablePagination" aria-label="Activity pagination"></nav>
                      </div>
                    </div>
                    <!-- End Col -->
                  </div>
                  <!-- End Row -->
                </div>
                <!-- End Footer -->
              </div>        </div>
      </div>
    </div>
    <div class="accordion-item">
        <div class="accordion-header" id="headingFour">
          <a class="accordion-button collapsed" role="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
            AIRTIME
          </a>
        </div>
        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
          <div class="accordion-body">
              <div class="card">
                 
                  <!-- Table -->
                  <div class="table-responsive datatable-custom position-relative">
                    <table id="datatable" class="table table-lg table-borderless table-thead-bordered table-nowrap table-align-middle card-table" data-hs-datatables-options='{
                             "columnDefs": [{
                                "targets": [0, 7],
                                "orderable": false
                              }],
                             "order": [],
                             "info": {
                               "totalQty": "#datatableWithPaginationInfoTotalQty"
                             },
                             "search": "#datatableSearch",
                             "entries": "#datatableEntries",
                             "pageLength": 15,
                             "isResponsive": false,
                             "isShowPaging": false,
                             "pagination": "datatablePagination"
                           }'>
                      <thead class="thead-light">
                        <tr>
                          
                          <th>Agent Commission</th>
                          <th class="table-column-ps-0">Aggt Commission</th>
                          <th>Charges</th>
                          <th>Minimum </th>
                          <th>Maximum</th>
                          <th>Action</th>
                        </tr>
                      </thead>
          
                      <tbody>
                        <tr>
                          
                          <td>
                              <span class="d-block fs-5">LAGOS</span>
                            </td>
                          <td class="table-column-ps-0">
                            <a class="d-flex align-items-center" href="user-profile.html">
                              <!-- <div class="avatar avatar-circle">
                                <img class="avatar-img" src="assets/img/160x160/img10.jpg" alt="Image Description">
                              </div> -->
                              <div class="ms-3">
                                <span class="d-block h5 text-inherit mb-0">0.5%</span>
                              </div>
                            </a>
                          </td>
                         
                          <td>
                            0
                          </td>
                          <td>
                            0.4%
                          </td>
                          <td>7</td>
                          <td>
                             <a href="" class="badge bg-danger">Delete Sub Rate</a>
                          </td>
                        </tr>
          
                        <tr>
                          
                          <td>
                              <span class="d-block fs-5">LAGOS</span>
                            </td>
                          <td class="table-column-ps-0">
                            <a class="d-flex align-items-center" href="user-profile.html">
                              <!-- <div class="avatar avatar-circle">
                                <img class="avatar-img" src="assets/img/160x160/img10.jpg" alt="Image Description">
                              </div> -->
                              <div class="ms-3">
                                <span class="d-block h5 text-inherit mb-0">0.5%</span>
                              </div>
                            </a>
                          </td>
                         
                          <td>
                            0</span>0
                          </td>
                          <td>
                            0.4%
                          </td>
                          <td>7</td>
                          <td>
                             <a href="" class="badge bg-danger">Delete Sub Rate</a>
                          </td>
                        </tr>
          
                        <tr>
                          
                          <td>
                              <span class="d-block fs-5">LAGOS</span>
                            </td>
                          <td class="table-column-ps-0">
                            <a class="d-flex align-items-center" href="user-profile.html">
                              <!-- <div class="avatar avatar-circle">
                                <img class="avatar-img" src="assets/img/160x160/img10.jpg" alt="Image Description">
                              </div> -->
                              <div class="ms-3">
                                <span class="d-block h5 text-inherit mb-0">0.5%</span>
                              </div>
                            </a>
                          </td>
                         
                          <td>
                            1
                          </td>
                          <td>
                            0.4%
                          </td>
                          <td>7</td>
                          <td>
                             <a href="" class="badge bg-danger">Delete Sub Rate</a>
                          </td>
                        </tr>
          
                        <tr>
                          
                          <td>
                              <span class="d-block fs-5">LAGOS</span>
                            </td>
                          <td class="table-column-ps-0">
                            <a class="d-flex align-items-center" href="user-profile.html">
                              <!-- <div class="avatar avatar-circle">
                                <img class="avatar-img" src="assets/img/160x160/img10.jpg" alt="Image Description">
                              </div> -->
                              <div class="ms-3">
                                <span class="d-block h5 text-inherit mb-0">0.5%</span>
                              </div>
                            </a>
                          </td>
                         
                          <td>
                            0</span>0
                          </td>
                          <td>
                            0.4%
                          </td>
                          <td>7</td>
                          <td>
                             <a href="" class="badge bg-danger">Delete Sub Rate</a>
                          </td>
                        </tr>
          
                  
          
                      </tbody>
                    </table>
                  </div>
                  <!-- End Table -->
          
                  <!-- Footer -->
                  <div class="card-footer">
                    <div class="row justify-content-center justify-content-sm-between align-items-sm-center">
                      <div class="col-sm mb-2 mb-sm-0">
                        <div class="d-flex justify-content-center justify-content-sm-start align-items-center">
                          <span class="me-2">Showing:</span>
          
                          <!-- Select -->
                          <div class="tom-select-custom">
                            <select id="datatableEntries" class="js-select form-select form-select-borderless w-auto" autocomplete="off" data-hs-tom-select-options='{
                                      "searchInDropdown": false,
                                      "hideSearch": true
                                    }'>
                              <option value="10">10</option>
                              <option value="15" selected="">15</option>
                              <option value="20">20</option>
                            </select>
                          </div>
                          <!-- End Select -->
          
                          <span class="text-secondary me-2">of</span>
          
                          <!-- Pagination Quantity -->
                          <span id="datatableWithPaginationInfoTotalQty"></span>
                        </div>
                      </div>
                      <!-- End Col -->
          
                      <div class="col-sm-auto">
                        <div class="d-flex justify-content-center justify-content-sm-end">
                          <!-- Pagination -->
                          <nav id="datatablePagination" aria-label="Activity pagination"></nav>
                        </div>
                      </div>
                      <!-- End Col -->
                    </div>
                    <!-- End Row -->
                  </div>
                  <!-- End Footer -->
                </div>        </div>
        </div>
      </div>
  </div>

    <!-- Footer -->

    <div class="footer">
      <div class="row justify-content-between align-items-center">
        <div class="col">
          <p class="fs-6 mb-0">&copy; Front. <span class="d-none d-sm-inline-block">2022 Htmlstream.</span></p>
        </div>
        <!-- End Col -->

        <div class="col-auto">
          <div class="d-flex justify-content-end">
            <!-- List Separator -->
            <ul class="list-inline list-separator">
              <li class="list-inline-item">
                <a class="list-separator-link" href="#">FAQ</a>
              </li>

              <li class="list-inline-item">
                <a class="list-separator-link" href="#">License</a>
              </li>

              <li class="list-inline-item">
                <!-- Keyboard Shortcuts Toggle -->
                <button class="btn btn-ghost-secondary btn btn-icon btn-ghost-secondary rounded-circle" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasKeyboardShortcuts" aria-controls="offcanvasKeyboardShortcuts">
                  <i class="bi-command"></i>
                </button>
                <!-- End Keyboard Shortcuts Toggle -->
              </li>
            </ul>
            <!-- End List Separator -->
          </div>
        </div>
        <!-- End Col -->
      </div>
      <!-- End Row -->
    </div>

    <!-- End Footer -->
  </main>
@endsection