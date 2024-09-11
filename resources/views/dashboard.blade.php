@extends('layouts.main')

@section('title','Terra || Home')

@section('content')

<main id="content" role="main" class="main">
    <!-- Content -->
    <div class="content container-fluid">
      <!-- Page Header -->
      <div class="page-header">
        <div class="row align-items-center">
          <div class="col">
            <h1 class="page-header-title">Dashboard</h1>
          </div>
          <!-- End Col -->

          <div class="col-auto">
            <a class="btn btn-primary" href="add-user">
              <i class="bi-person-plus-fill me-1"></i> Invite users
            </a>
          </div>
          <!-- End Col -->
        </div>
        <!-- End Row -->
      </div>
      <!-- End Page Header -->

      <!-- Stats -->
      <div class="row">
        <div class="col-sm-6 col-lg-4    mb-3 mb-lg-5">
          <!-- Card -->
          <div class="card h-100">
            <div class="card-body">
              <h6 class="card-subtitle mb-2">Total Agents</h6>

              <div class="row align-items-center gx-2">
                <div class="col">
                  <span class="js-counter display-4 text-dark">24</span>
                  <span class="text-body fs-5 ms-1">from 22</span>
                </div>
                <!-- End Col -->

                <div class="col-auto">
                  <span class="badge bg-soft-success text-success p-1">
                    <i class="bi-graph-up"></i> 5.0%
                  </span>
                </div>
                <!-- End Col -->
              </div>
              <!-- End Row -->
            </div>
          </div>
          <!-- End Card -->
        </div>

        <div class="col-sm-6 col-lg-4 mb-3 mb-lg-5">
          <!-- Card -->
          <div class="card h-100">
            <div class="card-body">
              <h6 class="card-subtitle mb-2">Active Agents</h6>

              <div class="row align-items-center gx-2">
                <div class="col">
                  <span class="js-counter display-4 text-dark">12</span>
                  <span class="text-body fs-5 ms-1">from 11</span>
                </div>

                <div class="col-auto">
                  <span class="badge bg-soft-success text-success p-1">
                    <i class="bi-graph-up"></i> 1.2%
                  </span>
                </div>
              </div>
              <!-- End Row -->
            </div>
          </div>
          <!-- End Card -->
        </div>

        <div class="col-sm-6 col-lg-4 mb-3 mb-lg-5">
          <!-- Card -->
          <div class="card h-100">
            <div class="card-body">
              <h6 class="card-subtitle mb-2">Pending Agents</h6>

              <div class="row align-items-center gx-2">
                <div class="col">
                  <span class="js-counter display-4 text-dark">56</span>
                  <span class="display-4 text-dark">%</span>
                  <span class="text-body fs-5 ms-1">from 48.7</span>
                </div>

                <div class="col-auto">
                  <span class="badge bg-soft-danger text-danger p-1">
                    <i class="bi-graph-down"></i> 2.8%
                  </span>
                </div>
              </div>
              <!-- End Row -->
            </div>
          </div>
          <!-- End Card -->
        </div>


      </div>
      <!-- End Stats -->



      <!-- Card -->
      <div class="row justify-content-end mb-3">
        <div class="col-lg">
          <!-- Datatable Info -->
          <div id="datatableCounterInfo" style="display: none;">
            <div class="d-sm-flex justify-content-lg-end align-items-sm-center">
              <span class="d-block d-sm-inline-block fs-5 me-3 mb-2 mb-sm-0">
                <span id="datatableCounter">0</span>
                Selected
              </span>
              <a class="btn btn-outline-danger btn-sm mb-2 mb-sm-0 me-2" href="javascript:;">
                <i class="bi-trash"></i> Delete
              </a>
              <a class="btn btn-white btn-sm mb-2 mb-sm-0 me-2" href="javascript:;">
                <i class="bi-archive"></i> Archive
              </a>
              <a class="btn btn-white btn-sm mb-2 mb-sm-0 me-2" href="javascript:;">
                <i class="bi-upload"></i> Publish
              </a>
              <a class="btn btn-white btn-sm mb-2 mb-sm-0" href="javascript:;">
                <i class="bi-x-lg"></i> Unpublish
              </a>
            </div>
          </div>
          <!-- End Datatable Info -->
        </div>
      </div>
      <!-- End Row -->

      <!-- Card -->
      <div class="card">
        <!-- Header -->
        <div class="card-header card-header-content-md-between">
          <div class="mb-2 mb-md-0">
            <form>
              <!-- Search -->
              <div class="input-group input-group-merge input-group-flush">
                <div class="input-group-prepend input-group-text">
                  <i class="bi-search"></i>
                </div>
                <input id="datatableSearch" type="search" class="form-control" placeholder="Search Transaction"
                  aria-label="Search users">
              </div>
              <!-- End Search -->
            </form>
          </div>

          <div class="d-grid d-sm-flex gap-2">
            <a href="all-transactions.html" class="btn btn-white" type="button">
              <i class="bi-eye me-1"></i> View All
            </a>

            <!-- Dropdown -->
            <div class="dropdown">
              <button type="button" class="btn btn-white w-100" id="showHideDropdown" data-bs-toggle="dropdown"
                aria-expanded="false" data-bs-auto-close="outside">
                <i class="bi-table me-1"></i> Columns <span
                  class="badge bg-soft-dark text-dark rounded-circle ms-1">6</span>
              </button>

              <div class="dropdown-menu dropdown-menu-end dropdown-card" aria-labelledby="showHideDropdown"
                style="width: 15rem;">
                <div class="card card-sm">
                  <div class="card-body">
                    <div class="d-grid gap-3">
                      <!-- Form Switch -->
                      <label class="row form-check form-switch" for="toggleColumn_id">
                        <span class="col-8 col-sm-9 ms-0">
                          <span class="me-2">User</span>
                        </span>
                        <span class="col-4 col-sm-3 text-end">
                          <input type="checkbox" class="form-check-input" id="toggleColumn_id" checked="">
                        </span>
                      </label>
                      <!-- End Form Switch -->

                      <!-- Form Switch -->
                      <label class="row form-check form-switch" for="toggleColumn_users">
                        <span class="col-8 col-sm-9 ms-0">
                          <span class="me-2">Refrence</span>
                        </span>
                        <span class="col-4 col-sm-3 text-end">
                          <input type="checkbox" class="form-check-input" id="toggleColumn_users" checked="">
                        </span>
                      </label>
                      <!-- End Form Switch -->

                      <!-- Form Switch -->
                      <label class="row form-check form-switch" for="toggleColumn_type">
                        <span class="col-8 col-sm-9 ms-0">
                          <span class="me-2">Amount</span>
                        </span>
                        <span class="col-4 col-sm-3 text-end">
                          <input type="checkbox" class="form-check-input" id="toggleColumn_type" checked="">
                        </span>
                      </label>
                      <!-- End Form Switch -->

                      <!-- Form Switch -->
                      <label class="row form-check form-switch" for="toggleColumn_vendor">
                        <span class="col-8 col-sm-9 ms-0">
                          <span class="me-2">Type</span>
                        </span>
                        <span class="col-4 col-sm-3 text-end">
                          <input type="checkbox" class="form-check-input" id="toggleColumn_vendor">
                        </span>
                      </label>
                      <!-- End Form Switch -->

                      <!-- Form Switch -->
                      <label class="row form-check form-switch" for="toggleColumn_stocks">
                        <span class="col-8 col-sm-9 ms-0">
                          <span class="me-2">Description</span>
                        </span>
                        <span class="col-4 col-sm-3 text-end">
                          <input type="checkbox" class="form-check-input" id="toggleColumn_stocks" checked="">
                        </span>
                      </label>
                      <!-- End Form Switch -->

                      <!-- Form Switch -->
                      <label class="row form-check form-switch" for="toggleColumn_sku">
                        <span class="col-8 col-sm-9 ms-0">
                          <span class="me-2">Amount</span>
                        </span>
                        <span class="col-4 col-sm-3 text-end">
                          <input type="checkbox" class="form-check-input" id="toggleColumn_sku" checked="">
                        </span>
                      </label>
                      <!-- End Form Switch -->

                      <!-- Form Switch -->
                      <label class="row form-check form-switch" for="toggleColumn_price">
                        <span class="col-8 col-sm-9 ms-0">
                          <span class="me-2">Fee</span>
                        </span>
                        <span class="col-4 col-sm-3 text-end">
                          <input type="checkbox" class="form-check-input" id="toggleColumn_price" checked="">
                        </span>
                      </label>
                      <!-- End Form Switch -->

                      <!-- Form Switch -->

                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Dropdown -->
          </div>
        </div>
        <!-- End Header -->

        <!-- Table -->
        <div class="table-responsive datatable-custom">
          <table id="datatable"
            class="table table-borderless table-thead-bordered table-nowrap table-align-middle card-table"
            data-hs-datatables-options='{
                 "columnDefs": [{
                    "targets": [0, 4, 7],
                    "width": "5%",
                    "orderable": false
                  }],
                 "order": [],
                 "info": {
                   "totalQty": "#datatableWithPaginationInfoTotalQty"
                 },
                 "search": "#datatableSearch",
                 "entries": "#datatableEntries",
                 "pageLength": 50,
                 "isResponsive": false,
                 "isShowPaging": false,
                 "pagination": "datatablePagination"
               }'>
            <thead class="thead-light">
              <th>
                ID
              </th>
              <th>Users</th>
              <th>Refrence</th>
              <th>Customer Type</th>

              <th>Description</th>
              <th>Amount</th>
              <th>Service Fee</th>
              <th>Type</th>
              <th>Biller ID</th>
              <th>Status</th>
              <th>Time</th>
              </tr>
            </thead>

            <tbody>


              <tr>
                <td class="table-column-pe-0">
                  1
                </td>
                <td class="table-column-ps-0">
                  <a class="d-flex align-items-center" href="#">
                    <div class="flex-shrink-0">
                      <img class="avatar avatar-lg" src="assets/img/400x400/img26.jpg" alt="Image Description">
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <h5 class="text-inherit mb-0">Agent Name</h5>
                      <span>09038847848</span>
                    </div>
                  </a>
                </td>
                <td>093874</td>
                <td>Aggregator</td>
                <td>
                  Aggregator Customer Fee
                </td>
                <td>₦80000</td>
                <td>45</td>
                <td>2</td>
                <td>3</td>
                <td><span class="legend-indicator bg-danger"></span>Blocked</td>
                <td>
                  12:00 AM
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
                  <select id="datatableEntries" class="js-select form-select form-select-borderless w-auto"
                    autocomplete="off" data-hs-tom-select-options='{
                          "searchInDropdown": false,
                          "hideSearch": true
                        }'>
                    <option value="12">12</option>
                    <option value="14" selected="">14</option>
                    <option value="16">16</option>
                    <option value="18">18</option>
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
    <!-- End Content -->

    <!-- Footer -->

    <div class="footer">
      <div class="row justify-content-between align-items-center">
        <div class="col">
          <p class="fs-6 mb-0">&copy; <span class="d-none d-sm-inline-block">2024 Terra Portals.</span></p>
        </div>
        <!-- End Col -->

      </div>
      <!-- End Row -->
    </div>

    <!-- End Footer -->
  </main>



@endsection