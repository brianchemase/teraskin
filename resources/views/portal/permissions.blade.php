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
                    <a class="breadcrumb-link" href="javascript:;">Roles</a>
                  </li>
                  <!-- <li class="breadcrumb-item active" aria-current="page">Overview</li> -->
                </ol>
              </nav>

            <h1 class="page-header-title">Roles</h1>
          </div>
          <!-- End Col -->

          <div class="col-sm-auto">
            <a class="btn btn-primary" href="#">
              <i class="bi-person-plus-fill me-1"></i> Add Role
            </a>
          </div>
          <!-- End Col -->
        </div>
        <!-- End Row -->
      </div>
      <!-- End Page Header -->

      <div class="tab-pane fade active show" id="notifications" role="tabpanel" aria-labelledby="notifications-tab">
        <!-- Table -->
        <div class="table-responsive datatable-custom">
          <table class="table table-thead-bordered table-nowrap table-align-middle table-first-col-px-0">
            <thead class="thead-light">
              <tr>
                <th>Name</th>
                <th class="">
Admin                </th>
                <th>Oprations</th>
                <th>Account Manager</th>
                <th>Compliance</th>
                <th>Information Technology</th>
                <th class="">
                  Developer
                </th>
                <th>
                    Settlement & Reconciliation
                </th>
                
              </tr>
            </thead>

            <tbody>
              <tr>
                <td>Update Notifications Settings</td>
                <td class="">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox1">
                    <label class="form-check-label" for="editUserModalAlertsCheckbox1"></label>
                  </div>
                </td>
                <td class="">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox2">
                    <label class="form-check-label" for="editUserModalAlertsCheckbox2"></label>
                  </div>
                </td>
                <td class="">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox3">
                    <label class="form-check-label" for="editUserModalAlertsCheckbox3"></label>
                  </div>
                </td>
                <td class="">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox3">
                      <label class="form-check-label" for="editUserModalAlertsCheckbox3"></label>
                    </div>
                  </td>
                  <td class="">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox3">
                      <label class="form-check-label" for="editUserModalAlertsCheckbox3"></label>
                    </div>
                  </td>
                  <td class="">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox3">
                      <label class="form-check-label" for="editUserModalAlertsCheckbox3"></label>
                    </div>
                  </td>

                  <td class="">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox3">
                      <label class="form-check-label" for="editUserModalAlertsCheckbox3"></label>
                    </div>
                  </td>
                  
              </tr>

              <tr>
                <td>Update Authentication Settings
                    <i class="bi-question-circle text-body ms-1" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Get important notifications about you or activity you've missed" data-bs-original-title="Get important notifications about you or activity you've missed"></i></td>
                <td class="">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox4">
                    <label class="form-check-label" for="editUserModalAlertsCheckbox4"></label>
                  </div>
                </td>
                <td class="">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox6" checked="">
                      <label class="form-check-label" for="editUserModalAlertsCheckbox6"></label>
                    </div>
                  </td>
                  <td class="">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox6" checked="">
                      <label class="form-check-label" for="editUserModalAlertsCheckbox6"></label>
                    </div>
                  </td>
                  <td class="">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox6" checked="">
                      <label class="form-check-label" for="editUserModalAlertsCheckbox6"></label>
                    </div>
                  </td>
                <td class="">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox5" checked="">
                    <label class="form-check-label" for="editUserModalAlertsCheckbox5"></label>
                  </div>
                </td>
                <td class="">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox6" checked="">
                    <label class="form-check-label" for="editUserModalAlertsCheckbox6"></label>
                  </div>
                </td>
                <td class="">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox6" checked="">
                      <label class="form-check-label" for="editUserModalAlertsCheckbox6"></label>
                    </div>
                  </td>

              </tr>

              <tr>
                <td>Update General System Settings</td>
                <td class="">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox7" checked="">
                    <label class="form-check-label" for="editUserModalAlertsCheckbox7"></label>
                  </div>
                </td>
                <td class="">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox8" checked="">
                    <label class="form-check-label" for="editUserModalAlertsCheckbox8"></label>
                  </div>
                </td>
                <td class=" ">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox9" checked="">
                    <label class="form-check-label" for="editUserModalAlertsCheckbox9"></label>
                  </div>
                </td>
                <td class="">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox8" checked="">
                      <label class="form-check-label" for="editUserModalAlertsCheckbox8"></label>
                    </div>
                  </td>
                  <td class="">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox8" checked="">
                      <label class="form-check-label" for="editUserModalAlertsCheckbox8"></label>
                    </div>
                  </td>
                  <td class="">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox8" checked="">
                      <label class="form-check-label" for="editUserModalAlertsCheckbox8"></label>
                    </div>
                  </td>
                  <td class="">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox8" checked="">
                      <label class="form-check-label" for="editUserModalAlertsCheckbox8"></label>
                    </div>
                  </td>
              </tr>

              <tr>
                <td>Transaction Settings
                </td>
                <td class="">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox10">
                    <label class="form-check-label" for="editUserModalAlertsCheckbox10"></label>
                  </div>
                </td>
                <td class="">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox11" checked="">
                    <label class="form-check-label" for="editUserModalAlertsCheckbox11"></label>
                  </div>
                </td>
                <td class="">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox12">
                    <label class="form-check-label" for="editUserModalAlertsCheckbox12"></label>
                  </div>
                </td>
                <td class="">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox12">
                      <label class="form-check-label" for="editUserModalAlertsCheckbox12"></label>
                    </div>
                  </td>
                  <td class="">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox12">
                      <label class="form-check-label" for="editUserModalAlertsCheckbox12"></label>
                    </div>
                  </td>
                  <td class="">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox12">
                      <label class="form-check-label" for="editUserModalAlertsCheckbox12"></label>
                    </div>
                  </td>
                  <td class="">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox12">
                      <label class="form-check-label" for="editUserModalAlertsCheckbox12"></label>
                    </div>
                  </td>
              </tr>

              <tr>
                <td>Approve Settings                    <i class="bi-question-circle text-body ms-1" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Email me when a new device connected" data-bs-original-title="Email me when a new device connected"></i></td>
                <td class="">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox13">
                    <label class="form-check-label" for="editUserModalAlertsCheckbox13"></label>
                  </div>
                </td>
                <td class="">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox8" checked="">
                      <label class="form-check-label" for="editUserModalAlertsCheckbox8"></label>
                    </div>
                  </td>
                  <td class="">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox8" checked="">
                      <label class="form-check-label" for="editUserModalAlertsCheckbox8"></label>
                    </div>
                  </td>
                  <td class="">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox8" checked="">
                      <label class="form-check-label" for="editUserModalAlertsCheckbox8"></label>
                    </div>
                  </td>
                  <td class="">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox8" checked="">
                      <label class="form-check-label" for="editUserModalAlertsCheckbox8"></label>
                    </div>
                  </td>
                <td class="">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox14" checked="">
                    <label class="form-check-label" for="editUserModalAlertsCheckbox14"></label>
                  </div>
                </td>
                <td class="">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox15" checked="">
                    <label class="form-check-label" for="editUserModalAlertsCheckbox15"></label>
                  </div>
                </td>
              </tr>
              <tr>
                <td>Manage Permissions
                    <i class="bi-question-circle text-body ms-1" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Email me when a new device connected" data-bs-original-title="Email me when a new device connected"></i></td>
                <td class="">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox13">
                    <label class="form-check-label" for="editUserModalAlertsCheckbox13"></label>
                  </div>
                </td>
                <td class="">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox8" checked="">
                      <label class="form-check-label" for="editUserModalAlertsCheckbox8"></label>
                    </div>
                  </td>
                  <td class="">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox8" checked="">
                      <label class="form-check-label" for="editUserModalAlertsCheckbox8"></label>
                    </div>
                  </td>
                  <td class="">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox8" checked="">
                      <label class="form-check-label" for="editUserModalAlertsCheckbox8"></label>
                    </div>
                  </td>
                  <td class="">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox8" checked="">
                      <label class="form-check-label" for="editUserModalAlertsCheckbox8"></label>
                    </div>
                  </td>
                <td class="">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox14" checked="">
                    <label class="form-check-label" for="editUserModalAlertsCheckbox14"></label>
                  </div>
                </td>
                <td class="">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox15" checked="">
                    <label class="form-check-label" for="editUserModalAlertsCheckbox15"></label>
                  </div>
                </td>
              </tr>
              <tr>
                <td>Manage Roles
                    <i class="bi-question-circle text-body ms-1" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Email me when a new device connected" data-bs-original-title="Email me when a new device connected"></i></td>
                <td class="">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox13">
                    <label class="form-check-label" for="editUserModalAlertsCheckbox13"></label>
                  </div>
                </td>
                <td class="">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox8" checked="">
                      <label class="form-check-label" for="editUserModalAlertsCheckbox8"></label>
                    </div>
                  </td>
                  <td class="">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox8" checked="">
                      <label class="form-check-label" for="editUserModalAlertsCheckbox8"></label>
                    </div>
                  </td>
                  <td class="">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox8" checked="">
                      <label class="form-check-label" for="editUserModalAlertsCheckbox8"></label>
                    </div>
                  </td>
                  <td class="">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox8" checked="">
                      <label class="form-check-label" for="editUserModalAlertsCheckbox8"></label>
                    </div>
                  </td>
                <td class="">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox14" checked="">
                    <label class="form-check-label" for="editUserModalAlertsCheckbox14"></label>
                  </div>
                </td>
                <td class="">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox15" checked="">
                    <label class="form-check-label" for="editUserModalAlertsCheckbox15"></label>
                  </div>
                </td>
              </tr>
              <tr>
                <td>View System Activity Log
                    <i class="bi-question-circle text-body ms-1" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Email me when a new device connected" data-bs-original-title="Email me when a new device connected"></i></td>
                <td class="">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox13">
                    <label class="form-check-label" for="editUserModalAlertsCheckbox13"></label>
                  </div>
                </td>
                <td class="">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox8" checked="">
                      <label class="form-check-label" for="editUserModalAlertsCheckbox8"></label>
                    </div>
                  </td>
                  <td class="">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox8" checked="">
                      <label class="form-check-label" for="editUserModalAlertsCheckbox8"></label>
                    </div>
                  </td>
                  <td class="">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox8" checked="">
                      <label class="form-check-label" for="editUserModalAlertsCheckbox8"></label>
                    </div>
                  </td>
                  <td class="">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox8" checked="">
                      <label class="form-check-label" for="editUserModalAlertsCheckbox8"></label>
                    </div>
                  </td>
                <td class="">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox14" checked="">
                    <label class="form-check-label" for="editUserModalAlertsCheckbox14"></label>
                  </div>
                </td>
                <td class="">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox15" checked="">
                    <label class="form-check-label" for="editUserModalAlertsCheckbox15"></label>
                  </div>
                </td>
              </tr>
              <tr>
                <td>Create new agent
                    <i class="bi-question-circle text-body ms-1" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Email me when a new device connected" data-bs-original-title="Email me when a new device connected"></i></td>
                <td class="">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox13">
                    <label class="form-check-label" for="editUserModalAlertsCheckbox13"></label>
                  </div>
                </td>
                <td class="">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox8" checked="">
                      <label class="form-check-label" for="editUserModalAlertsCheckbox8"></label>
                    </div>
                  </td>
                  <td class="">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox8" checked="">
                      <label class="form-check-label" for="editUserModalAlertsCheckbox8"></label>
                    </div>
                  </td>
                  <td class="">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox8" checked="">
                      <label class="form-check-label" for="editUserModalAlertsCheckbox8"></label>
                    </div>
                  </td>
                  <td class="">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox8" checked="">
                      <label class="form-check-label" for="editUserModalAlertsCheckbox8"></label>
                    </div>
                  </td>
                <td class="">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox14" checked="">
                    <label class="form-check-label" for="editUserModalAlertsCheckbox14"></label>
                  </div>
                </td>
                <td class="">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox15" checked="">
                    <label class="form-check-label" for="editUserModalAlertsCheckbox15"></label>
                  </div>
                </td>
              </tr>
              <tr>
                <td>View agents                    <i class="bi-question-circle text-body ms-1" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Email me when a new device connected" data-bs-original-title="Email me when a new device connected"></i></td>
                <td class="">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox13">
                    <label class="form-check-label" for="editUserModalAlertsCheckbox13"></label>
                  </div>
                </td>
                <td class="">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox8" checked="">
                      <label class="form-check-label" for="editUserModalAlertsCheckbox8"></label>
                    </div>
                  </td>
                  <td class="">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox8" checked="">
                      <label class="form-check-label" for="editUserModalAlertsCheckbox8"></label>
                    </div>
                  </td>
                  <td class="">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox8" checked="">
                      <label class="form-check-label" for="editUserModalAlertsCheckbox8"></label>
                    </div>
                  </td>
                  <td class="">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox8" checked="">
                      <label class="form-check-label" for="editUserModalAlertsCheckbox8"></label>
                    </div>
                  </td>
                <td class="">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox14" checked="">
                    <label class="form-check-label" for="editUserModalAlertsCheckbox14"></label>
                  </div>
                </td>
                <td class="">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox15" checked="">
                    <label class="form-check-label" for="editUserModalAlertsCheckbox15"></label>
                  </div>
                </td>
              </tr>
              <tr>
                <td>Edit agent                    <i class="bi-question-circle text-body ms-1" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Email me when a new device connected" data-bs-original-title="Email me when a new device connected"></i></td>
                <td class="">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox13">
                    <label class="form-check-label" for="editUserModalAlertsCheckbox13"></label>
                  </div>
                </td>
                <td class="">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox8" checked="">
                      <label class="form-check-label" for="editUserModalAlertsCheckbox8"></label>
                    </div>
                  </td>
                  <td class="">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox8" checked="">
                      <label class="form-check-label" for="editUserModalAlertsCheckbox8"></label>
                    </div>
                  </td>
                  <td class="">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox8" checked="">
                      <label class="form-check-label" for="editUserModalAlertsCheckbox8"></label>
                    </div>
                  </td>
                  <td class="">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox8" checked="">
                      <label class="form-check-label" for="editUserModalAlertsCheckbox8"></label>
                    </div>
                  </td>
                <td class="">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox14" checked="">
                    <label class="form-check-label" for="editUserModalAlertsCheckbox14"></label>
                  </div>
                </td>
                <td class="">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox15" checked="">
                    <label class="form-check-label" for="editUserModalAlertsCheckbox15"></label>
                  </div>
                </td>
              </tr>
              <tr>
                <td>View transaction history <i class="bi-question-circle text-body ms-1" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Email me when a new device connected" data-bs-original-title="Email me when a new device connected"></i></td>
                <td class="">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox13">
                    <label class="form-check-label" for="editUserModalAlertsCheckbox13"></label>
                  </div>
                </td>
                <td class="">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox8" checked="">
                      <label class="form-check-label" for="editUserModalAlertsCheckbox8"></label>
                    </div>
                  </td>
                  <td class="">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox8" checked="">
                      <label class="form-check-label" for="editUserModalAlertsCheckbox8"></label>
                    </div>
                  </td>
                  <td class="">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox8" checked="">
                      <label class="form-check-label" for="editUserModalAlertsCheckbox8"></label>
                    </div>
                  </td>
                  <td class="">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox8" checked="">
                      <label class="form-check-label" for="editUserModalAlertsCheckbox8"></label>
                    </div>
                  </td>
                <td class="">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox14" checked="">
                    <label class="form-check-label" for="editUserModalAlertsCheckbox14"></label>
                  </div>
                </td>
                <td class="">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox15" checked="">
                    <label class="form-check-label" for="editUserModalAlertsCheckbox15"></label>
                  </div>
                </td>
              </tr>
             <!-- nw -->

             <tr>
                <td>View Pool transaction history
                </td>
                <td class="">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox10">
                    <label class="form-check-label" for="editUserModalAlertsCheckbox10"></label>
                  </div>
                </td>
                <td class="">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox11" checked="">
                    <label class="form-check-label" for="editUserModalAlertsCheckbox11"></label>
                  </div>
                </td>
                <td class="">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox12">
                    <label class="form-check-label" for="editUserModalAlertsCheckbox12"></label>
                  </div>
                </td>
                <td class="">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox12">
                      <label class="form-check-label" for="editUserModalAlertsCheckbox12"></label>
                    </div>
                  </td>
                  <td class="">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox12">
                      <label class="form-check-label" for="editUserModalAlertsCheckbox12"></label>
                    </div>
                  </td>
                  <td class="">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox12">
                      <label class="form-check-label" for="editUserModalAlertsCheckbox12"></label>
                    </div>
                  </td>
                  <td class="">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox12">
                      <label class="form-check-label" for="editUserModalAlertsCheckbox12"></label>
                    </div>
                  </td>
              </tr>

              <tr>
                <td>View Settlement transaction history
                    <i class="bi-question-circle text-body ms-1" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Email me when a new device connected" data-bs-original-title="Email me when a new device connected"></i></td>
                <td class="">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox13">
                    <label class="form-check-label" for="editUserModalAlertsCheckbox13"></label>
                  </div>
                </td>
                <td class="">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox8" checked="">
                      <label class="form-check-label" for="editUserModalAlertsCheckbox8"></label>
                    </div>
                  </td>
                  <td class="">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox8" checked="">
                      <label class="form-check-label" for="editUserModalAlertsCheckbox8"></label>
                    </div>
                  </td>
                  <td class="">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox8" checked="">
                      <label class="form-check-label" for="editUserModalAlertsCheckbox8"></label>
                    </div>
                  </td>
                  <td class="">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox8" checked="">
                      <label class="form-check-label" for="editUserModalAlertsCheckbox8"></label>
                    </div>
                  </td>
                <td class="">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox14" checked="">
                    <label class="form-check-label" for="editUserModalAlertsCheckbox14"></label>
                  </div>
                </td>
                <td class="">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox15" checked="">
                    <label class="form-check-label" for="editUserModalAlertsCheckbox15"></label>
                  </div>
                </td>
              </tr>
              <tr>
                <td>Mark as Failed

                    <i class="bi-question-circle text-body ms-1" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Email me when a new device connected" data-bs-original-title="Email me when a new device connected"></i></td>
                <td class="">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox13">
                    <label class="form-check-label" for="editUserModalAlertsCheckbox13"></label>
                  </div>
                </td>
                <td class="">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox8" checked="">
                      <label class="form-check-label" for="editUserModalAlertsCheckbox8"></label>
                    </div>
                  </td>
                  <td class="">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox8" checked="">
                      <label class="form-check-label" for="editUserModalAlertsCheckbox8"></label>
                    </div>
                  </td>
                  <td class="">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox8" checked="">
                      <label class="form-check-label" for="editUserModalAlertsCheckbox8"></label>
                    </div>
                  </td>
                  <td class="">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox8" checked="">
                      <label class="form-check-label" for="editUserModalAlertsCheckbox8"></label>
                    </div>
                  </td>
                <td class="">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox14" checked="">
                    <label class="form-check-label" for="editUserModalAlertsCheckbox14"></label>
                  </div>
                </td>
                <td class="">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox15" checked="">
                    <label class="form-check-label" for="editUserModalAlertsCheckbox15"></label>
                  </div>
                </td>
              </tr>
              <tr>
                <td>Requery a transaction

                    <i class="bi-question-circle text-body ms-1" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Email me when a new device connected" data-bs-original-title="Email me when a new device connected"></i></td>
                <td class="">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox13">
                    <label class="form-check-label" for="editUserModalAlertsCheckbox13"></label>
                  </div>
                </td>
                <td class="">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox8" checked="">
                      <label class="form-check-label" for="editUserModalAlertsCheckbox8"></label>
                    </div>
                  </td>
                  <td class="">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox8" checked="">
                      <label class="form-check-label" for="editUserModalAlertsCheckbox8"></label>
                    </div>
                  </td>
                  <td class="">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox8" checked="">
                      <label class="form-check-label" for="editUserModalAlertsCheckbox8"></label>
                    </div>
                  </td>
                  <td class="">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox8" checked="">
                      <label class="form-check-label" for="editUserModalAlertsCheckbox8"></label>
                    </div>
                  </td>
                <td class="">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox14" checked="">
                    <label class="form-check-label" for="editUserModalAlertsCheckbox14"></label>
                  </div>
                </td>
                <td class="">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox15" checked="">
                    <label class="form-check-label" for="editUserModalAlertsCheckbox15"></label>
                  </div>
                </td>
              </tr>
              <tr>
                <td>Pin Pads
                    <i class="bi-question-circle text-body ms-1" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Email me when a new device connected" data-bs-original-title="Email me when a new device connected"></i></td>
                <td class="">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox13">
                    <label class="form-check-label" for="editUserModalAlertsCheckbox13"></label>
                  </div>
                </td>
                <td class="">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox8" checked="">
                      <label class="form-check-label" for="editUserModalAlertsCheckbox8"></label>
                    </div>
                  </td>
                  <td class="">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox8" checked="">
                      <label class="form-check-label" for="editUserModalAlertsCheckbox8"></label>
                    </div>
                  </td>
                  <td class="">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox8" checked="">
                      <label class="form-check-label" for="editUserModalAlertsCheckbox8"></label>
                    </div>
                  </td>
                  <td class="">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox8" checked="">
                      <label class="form-check-label" for="editUserModalAlertsCheckbox8"></label>
                    </div>
                  </td>
                <td class="">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox14" checked="">
                    <label class="form-check-label" for="editUserModalAlertsCheckbox14"></label>
                  </div>
                </td>
                <td class="">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox15" checked="">
                    <label class="form-check-label" for="editUserModalAlertsCheckbox15"></label>
                  </div>
                </td>
              </tr>
              <tr>
                <td>Service Status

                    <i class="bi-question-circle text-body ms-1" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Email me when a new device connected" data-bs-original-title="Email me when a new device connected"></i></td>
                <td class="">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox13">
                    <label class="form-check-label" for="editUserModalAlertsCheckbox13"></label>
                  </div>
                </td>
                <td class="">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox8" checked="">
                      <label class="form-check-label" for="editUserModalAlertsCheckbox8"></label>
                    </div>
                  </td>
                  <td class="">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox8" checked="">
                      <label class="form-check-label" for="editUserModalAlertsCheckbox8"></label>
                    </div>
                  </td>
                  <td class="">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox8" checked="">
                      <label class="form-check-label" for="editUserModalAlertsCheckbox8"></label>
                    </div>
                  </td>
                  <td class="">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox8" checked="">
                      <label class="form-check-label" for="editUserModalAlertsCheckbox8"></label>
                    </div>
                  </td>
                <td class="">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox14" checked="">
                    <label class="form-check-label" for="editUserModalAlertsCheckbox14"></label>
                  </div>
                </td>
                <td class="">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox15" checked="">
                    <label class="form-check-label" for="editUserModalAlertsCheckbox15"></label>
                  </div>
                </td>
              </tr>
              <tr>
                <td>Create new agent
                    <i class="bi-question-circle text-body ms-1" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Email me when a new device connected" data-bs-original-title="Email me when a new device connected"></i></td>
                <td class="">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox13">
                    <label class="form-check-label" for="editUserModalAlertsCheckbox13"></label>
                  </div>
                </td>
                <td class="">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox8" checked="">
                      <label class="form-check-label" for="editUserModalAlertsCheckbox8"></label>
                    </div>
                  </td>
                  <td class="">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox8" checked="">
                      <label class="form-check-label" for="editUserModalAlertsCheckbox8"></label>
                    </div>
                  </td>
                  <td class="">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox8" checked="">
                      <label class="form-check-label" for="editUserModalAlertsCheckbox8"></label>
                    </div>
                  </td>
                  <td class="">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox8" checked="">
                      <label class="form-check-label" for="editUserModalAlertsCheckbox8"></label>
                    </div>
                  </td>
                <td class="">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox14" checked="">
                    <label class="form-check-label" for="editUserModalAlertsCheckbox14"></label>
                  </div>
                </td>
                <td class="">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox15" checked="">
                    <label class="form-check-label" for="editUserModalAlertsCheckbox15"></label>
                  </div>
                </td>
              </tr>
              <tr>
                <td>State Count
                    <i class="bi-question-circle text-body ms-1" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Email me when a new device connected" data-bs-original-title="Email me when a new device connected"></i></td>
                <td class="">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox13">
                    <label class="form-check-label" for="editUserModalAlertsCheckbox13"></label>
                  </div>
                </td>
                <td class="">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox8" checked="">
                      <label class="form-check-label" for="editUserModalAlertsCheckbox8"></label>
                    </div>
                  </td>
                  <td class="">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox8" checked="">
                      <label class="form-check-label" for="editUserModalAlertsCheckbox8"></label>
                    </div>
                  </td>
                  <td class="">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox8" checked="">
                      <label class="form-check-label" for="editUserModalAlertsCheckbox8"></label>
                    </div>
                  </td>
                  <td class="">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox8" checked="">
                      <label class="form-check-label" for="editUserModalAlertsCheckbox8"></label>
                    </div>
                  </td>
                <td class="">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox14" checked="">
                    <label class="form-check-label" for="editUserModalAlertsCheckbox14"></label>
                  </div>
                </td>
                <td class="">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox15" checked="">
                    <label class="form-check-label" for="editUserModalAlertsCheckbox15"></label>
                  </div>
                </td>
              </tr>

              <tr>
                <td>Terminals
                </td>
                <td class="">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox10">
                    <label class="form-check-label" for="editUserModalAlertsCheckbox10"></label>
                  </div>
                </td>
                <td class="">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox11" checked="">
                    <label class="form-check-label" for="editUserModalAlertsCheckbox11"></label>
                  </div>
                </td>
                <td class="">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox12">
                    <label class="form-check-label" for="editUserModalAlertsCheckbox12"></label>
                  </div>
                </td>
                <td class="">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox12">
                      <label class="form-check-label" for="editUserModalAlertsCheckbox12"></label>
                    </div>
                  </td>
                  <td class="">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox12">
                      <label class="form-check-label" for="editUserModalAlertsCheckbox12"></label>
                    </div>
                  </td>
                  <td class="">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox12">
                      <label class="form-check-label" for="editUserModalAlertsCheckbox12"></label>
                    </div>
                  </td>
                  <td class="">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox12">
                      <label class="form-check-label" for="editUserModalAlertsCheckbox12"></label>
                    </div>
                  </td>
              </tr>

              <tr>
                <td>Assign Terminals

                    <i class="bi-question-circle text-body ms-1" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Email me when a new device connected" data-bs-original-title="Email me when a new device connected"></i></td>
                <td class="">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox13">
                    <label class="form-check-label" for="editUserModalAlertsCheckbox13"></label>
                  </div>
                </td>
                <td class="">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox8" checked="">
                      <label class="form-check-label" for="editUserModalAlertsCheckbox8"></label>
                    </div>
                  </td>
                  <td class="">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox8" checked="">
                      <label class="form-check-label" for="editUserModalAlertsCheckbox8"></label>
                    </div>
                  </td>
                  <td class="">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox8" checked="">
                      <label class="form-check-label" for="editUserModalAlertsCheckbox8"></label>
                    </div>
                  </td>
                  <td class="">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox8" checked="">
                      <label class="form-check-label" for="editUserModalAlertsCheckbox8"></label>
                    </div>
                  </td>
                <td class="">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox14" checked="">
                    <label class="form-check-label" for="editUserModalAlertsCheckbox14"></label>
                  </div>
                </td>
                <td class="">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox15" checked="">
                    <label class="form-check-label" for="editUserModalAlertsCheckbox15"></label>
                  </div>
                </td>
              </tr>
              <tr>
                <td>Portal Settings
                    <i class="bi-question-circle text-body ms-1" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Email me when a new device connected" data-bs-original-title="Email me when a new device connected"></i></td>
                <td class="">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox13">
                    <label class="form-check-label" for="editUserModalAlertsCheckbox13"></label>
                  </div>
                </td>
                <td class="">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox8" checked="">
                      <label class="form-check-label" for="editUserModalAlertsCheckbox8"></label>
                    </div>
                  </td>
                  <td class="">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox8" checked="">
                      <label class="form-check-label" for="editUserModalAlertsCheckbox8"></label>
                    </div>
                  </td>
                  <td class="">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox8" checked="">
                      <label class="form-check-label" for="editUserModalAlertsCheckbox8"></label>
                    </div>
                  </td>
                  <td class="">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox8" checked="">
                      <label class="form-check-label" for="editUserModalAlertsCheckbox8"></label>
                    </div>
                  </td>
                <td class="">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox14" checked="">
                    <label class="form-check-label" for="editUserModalAlertsCheckbox14"></label>
                  </div>
                </td>
                <td class="">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox15" checked="">
                    <label class="form-check-label" for="editUserModalAlertsCheckbox15"></label>
                  </div>
                </td>
              </tr>
              <tr>
                <td>Manage user

                    <i class="bi-question-circle text-body ms-1" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Email me when a new device connected" data-bs-original-title="Email me when a new device connected"></i></td>
                <td class="">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox13">
                    <label class="form-check-label" for="editUserModalAlertsCheckbox13"></label>
                  </div>
                </td>
                <td class="">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox8" checked="">
                      <label class="form-check-label" for="editUserModalAlertsCheckbox8"></label>
                    </div>
                  </td>
                  <td class="">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox8" checked="">
                      <label class="form-check-label" for="editUserModalAlertsCheckbox8"></label>
                    </div>
                  </td>
                  <td class="">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox8" checked="">
                      <label class="form-check-label" for="editUserModalAlertsCheckbox8"></label>
                    </div>
                  </td>
                  <td class="">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox8" checked="">
                      <label class="form-check-label" for="editUserModalAlertsCheckbox8"></label>
                    </div>
                  </td>
                <td class="">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox14" checked="">
                    <label class="form-check-label" for="editUserModalAlertsCheckbox14"></label>
                  </div>
                </td>
                <td class="">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox15" checked="">
                    <label class="form-check-label" for="editUserModalAlertsCheckbox15"></label>
                  </div>
                </td>
              </tr>
              <tr>
                <td>Pool
                    <i class="bi-question-circle text-body ms-1" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Email me when a new device connected" data-bs-original-title="Email me when a new device connected"></i></td>
                <td class="">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox13">
                    <label class="form-check-label" for="editUserModalAlertsCheckbox13"></label>
                  </div>
                </td>
                <td class="">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox8" checked="">
                      <label class="form-check-label" for="editUserModalAlertsCheckbox8"></label>
                    </div>
                  </td>
                  <td class="">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox8" checked="">
                      <label class="form-check-label" for="editUserModalAlertsCheckbox8"></label>
                    </div>
                  </td>
                  <td class="">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox8" checked="">
                      <label class="form-check-label" for="editUserModalAlertsCheckbox8"></label>
                    </div>
                  </td>
                  <td class="">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox8" checked="">
                      <label class="form-check-label" for="editUserModalAlertsCheckbox8"></label>
                    </div>
                  </td>
                <td class="">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox14" checked="">
                    <label class="form-check-label" for="editUserModalAlertsCheckbox14"></label>
                  </div>
                </td>
                <td class="">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox15" checked="">
                    <label class="form-check-label" for="editUserModalAlertsCheckbox15"></label>
                  </div>
                </td>
              </tr>
              <tr>
                <td>Verify Agent Account

                    <i class="bi-question-circle text-body ms-1" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Email me when a new device connected" data-bs-original-title="Email me when a new device connected"></i></td>
                <td class="">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox13">
                    <label class="form-check-label" for="editUserModalAlertsCheckbox13"></label>
                  </div>
                </td>
                <td class="">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox8" checked="">
                      <label class="form-check-label" for="editUserModalAlertsCheckbox8"></label>
                    </div>
                  </td>
                  <td class="">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox8" checked="">
                      <label class="form-check-label" for="editUserModalAlertsCheckbox8"></label>
                    </div>
                  </td>
                  <td class="">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox8" checked="">
                      <label class="form-check-label" for="editUserModalAlertsCheckbox8"></label>
                    </div>
                  </td>
                  <td class="">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox8" checked="">
                      <label class="form-check-label" for="editUserModalAlertsCheckbox8"></label>
                    </div>
                  </td>
                <td class="">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox14" checked="">
                    <label class="form-check-label" for="editUserModalAlertsCheckbox14"></label>
                  </div>
                </td>
                <td class="">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox15" checked="">
                    <label class="form-check-label" for="editUserModalAlertsCheckbox15"></label>
                  </div>
                </td>
              </tr>
              <tr>
                <td>Activate Agent
                    <i class="bi-question-circle text-body ms-1" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Email me when a new device connected" data-bs-original-title="Email me when a new device connected"></i></td>
                <td class="">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox13">
                    <label class="form-check-label" for="editUserModalAlertsCheckbox13"></label>
                  </div>
                </td>
                <td class="">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox8" checked="">
                      <label class="form-check-label" for="editUserModalAlertsCheckbox8"></label>
                    </div>
                  </td>
                  <td class="">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox8" checked="">
                      <label class="form-check-label" for="editUserModalAlertsCheckbox8"></label>
                    </div>
                  </td>
                  <td class="">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox8" checked="">
                      <label class="form-check-label" for="editUserModalAlertsCheckbox8"></label>
                    </div>
                  </td>
                  <td class="">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox8" checked="">
                      <label class="form-check-label" for="editUserModalAlertsCheckbox8"></label>
                    </div>
                  </td>
                <td class="">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox14" checked="">
                    <label class="form-check-label" for="editUserModalAlertsCheckbox14"></label>
                  </div>
                </td>
                <td class="">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox15" checked="">
                    <label class="form-check-label" for="editUserModalAlertsCheckbox15"></label>
                  </div>
                </td>
              </tr>
              <tr>
                <td>Credit Agent
                    <i class="bi-question-circle text-body ms-1" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Email me when a new device connected" data-bs-original-title="Email me when a new device connected"></i></td>
                <td class="">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox13">
                    <label class="form-check-label" for="editUserModalAlertsCheckbox13"></label>
                  </div>
                </td>
                <td class="">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox8" checked="">
                      <label class="form-check-label" for="editUserModalAlertsCheckbox8"></label>
                    </div>
                  </td>
                  <td class="">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox8" checked="">
                      <label class="form-check-label" for="editUserModalAlertsCheckbox8"></label>
                    </div>
                  </td>
                  <td class="">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox8" checked="">
                      <label class="form-check-label" for="editUserModalAlertsCheckbox8"></label>
                    </div>
                  </td>
                  <td class="">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox8" checked="">
                      <label class="form-check-label" for="editUserModalAlertsCheckbox8"></label>
                    </div>
                  </td>
                <td class="">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox14" checked="">
                    <label class="form-check-label" for="editUserModalAlertsCheckbox14"></label>
                  </div>
                </td>
                <td class="">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox15" checked="">
                    <label class="form-check-label" for="editUserModalAlertsCheckbox15"></label>
                  </div>
                </td>
              </tr>
              <tr>
                <td>Debit Agent

                    <i class="bi-question-circle text-body ms-1" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Email me when a new device connected" data-bs-original-title="Email me when a new device connected"></i></td>
                <td class="">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox13">
                    <label class="form-check-label" for="editUserModalAlertsCheckbox13"></label>
                  </div>
                </td>
                <td class="">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox8" checked="">
                      <label class="form-check-label" for="editUserModalAlertsCheckbox8"></label>
                    </div>
                  </td>
                  <td class="">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox8" checked="">
                      <label class="form-check-label" for="editUserModalAlertsCheckbox8"></label>
                    </div>
                  </td>
                  <td class="">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox8" checked="">
                      <label class="form-check-label" for="editUserModalAlertsCheckbox8"></label>
                    </div>
                  </td>
                  <td class="">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox8" checked="">
                      <label class="form-check-label" for="editUserModalAlertsCheckbox8"></label>
                    </div>
                  </td>
                <td class="">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox14" checked="">
                    <label class="form-check-label" for="editUserModalAlertsCheckbox14"></label>
                  </div>
                </td>
                <td class="">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox15" checked="">
                    <label class="form-check-label" for="editUserModalAlertsCheckbox15"></label>
                  </div>
                </td>
              </tr>
              <tr>
                <td>Role List
                    <i class="bi-question-circle text-body ms-1" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Email me when a new device connected" data-bs-original-title="Email me when a new device connected"></i></td>
                <td class="">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox13">
                    <label class="form-check-label" for="editUserModalAlertsCheckbox13"></label>
                  </div>
                </td>
                <td class="">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox8" checked="">
                      <label class="form-check-label" for="editUserModalAlertsCheckbox8"></label>
                    </div>
                  </td>
                  <td class="">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox8" checked="">
                      <label class="form-check-label" for="editUserModalAlertsCheckbox8"></label>
                    </div>
                  </td>
                  <td class="">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox8" checked="">
                      <label class="form-check-label" for="editUserModalAlertsCheckbox8"></label>
                    </div>
                  </td>
                  <td class="">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox8" checked="">
                      <label class="form-check-label" for="editUserModalAlertsCheckbox8"></label>
                    </div>
                  </td>
                <td class="">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox14" checked="">
                    <label class="form-check-label" for="editUserModalAlertsCheckbox14"></label>
                  </div>
                </td>
                <td class="">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox15" checked="">
                    <label class="form-check-label" for="editUserModalAlertsCheckbox15"></label>
                  </div>
                </td>
              </tr>
              <tr>
                <td>Role Create
                    <i class="bi-question-circle text-body ms-1" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Email me when a new device connected" data-bs-original-title="Email me when a new device connected"></i></td>
                <td class="">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox13">
                    <label class="form-check-label" for="editUserModalAlertsCheckbox13"></label>
                  </div>
                </td>
                <td class="">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox8" checked="">
                      <label class="form-check-label" for="editUserModalAlertsCheckbox8"></label>
                    </div>
                  </td>
                  <td class="">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox8" checked="">
                      <label class="form-check-label" for="editUserModalAlertsCheckbox8"></label>
                    </div>
                  </td>
                  <td class="">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox8" checked="">
                      <label class="form-check-label" for="editUserModalAlertsCheckbox8"></label>
                    </div>
                  </td>
                  <td class="">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox8" checked="">
                      <label class="form-check-label" for="editUserModalAlertsCheckbox8"></label>
                    </div>
                  </td>
                <td class="">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox14" checked="">
                    <label class="form-check-label" for="editUserModalAlertsCheckbox14"></label>
                  </div>
                </td>
                <td class="">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox15" checked="">
                    <label class="form-check-label" for="editUserModalAlertsCheckbox15"></label>
                  </div>
                </td>
              </tr>
              <tr>
                <td>Role Edit
                    <i class="bi-question-circle text-body ms-1" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Email me when a new device connected" data-bs-original-title="Email me when a new device connected"></i></td>
                <td class="">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox13">
                    <label class="form-check-label" for="editUserModalAlertsCheckbox13"></label>
                  </div>
                </td>
                <td class="">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox8" checked="">
                      <label class="form-check-label" for="editUserModalAlertsCheckbox8"></label>
                    </div>
                  </td>
                  <td class="">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox8" checked="">
                      <label class="form-check-label" for="editUserModalAlertsCheckbox8"></label>
                    </div>
                  </td>
                  <td class="">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox8" checked="">
                      <label class="form-check-label" for="editUserModalAlertsCheckbox8"></label>
                    </div>
                  </td>
                  <td class="">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox8" checked="">
                      <label class="form-check-label" for="editUserModalAlertsCheckbox8"></label>
                    </div>
                  </td>
                <td class="">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox14" checked="">
                    <label class="form-check-label" for="editUserModalAlertsCheckbox14"></label>
                  </div>
                </td>
                <td class="">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox15" checked="">
                    <label class="form-check-label" for="editUserModalAlertsCheckbox15"></label>
                  </div>
                </td>
              </tr>
              <tr>
                <td>Role Delete
                    <i class="bi-question-circle text-body ms-1" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Email me when a new device connected" data-bs-original-title="Email me when a new device connected"></i></td>
                <td class="">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox13">
                    <label class="form-check-label" for="editUserModalAlertsCheckbox13"></label>
                  </div>
                </td>
                <td class="">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox8" checked="">
                      <label class="form-check-label" for="editUserModalAlertsCheckbox8"></label>
                    </div>
                  </td>
                  <td class="">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox8" checked="">
                      <label class="form-check-label" for="editUserModalAlertsCheckbox8"></label>
                    </div>
                  </td>
                  <td class="">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox8" checked="">
                      <label class="form-check-label" for="editUserModalAlertsCheckbox8"></label>
                    </div>
                  </td>
                  <td class="">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox8" checked="">
                      <label class="form-check-label" for="editUserModalAlertsCheckbox8"></label>
                    </div>
                  </td>
                <td class="">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox14" checked="">
                    <label class="form-check-label" for="editUserModalAlertsCheckbox14"></label>
                  </div>
                </td>
                <td class="">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox15" checked="">
                    <label class="form-check-label" for="editUserModalAlertsCheckbox15"></label>
                  </div>
                </td>
              </tr>
              <tr>
                <td>Charge Back Notification
                    <i class="bi-question-circle text-body ms-1" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Email me when a new device connected" data-bs-original-title="Email me when a new device connected"></i></td>
                <td class="">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox13">
                    <label class="form-check-label" for="editUserModalAlertsCheckbox13"></label>
                  </div>
                </td>
                <td class="">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox8" checked="">
                      <label class="form-check-label" for="editUserModalAlertsCheckbox8"></label>
                    </div>
                  </td>
                  <td class="">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox8" checked="">
                      <label class="form-check-label" for="editUserModalAlertsCheckbox8"></label>
                    </div>
                  </td>
                  <td class="">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox8" checked="">
                      <label class="form-check-label" for="editUserModalAlertsCheckbox8"></label>
                    </div>
                  </td>
                  <td class="">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox8" checked="">
                      <label class="form-check-label" for="editUserModalAlertsCheckbox8"></label>
                    </div>
                  </td>
                <td class="">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox14" checked="">
                    <label class="form-check-label" for="editUserModalAlertsCheckbox14"></label>
                  </div>
                </td>
                <td class="">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox15" checked="">
                    <label class="form-check-label" for="editUserModalAlertsCheckbox15"></label>
                  </div>
                </td>
              </tr>
              <tr>
                <td>Ticket Notification
                    <i class="bi-question-circle text-body ms-1" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Email me when a new device connected" data-bs-original-title="Email me when a new device connected"></i></td>
                <td class="">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox13">
                    <label class="form-check-label" for="editUserModalAlertsCheckbox13"></label>
                  </div>
                </td>
                <td class="">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox8" checked="">
                      <label class="form-check-label" for="editUserModalAlertsCheckbox8"></label>
                    </div>
                  </td>
                  <td class="">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox8" checked="">
                      <label class="form-check-label" for="editUserModalAlertsCheckbox8"></label>
                    </div>
                  </td>
                  <td class="">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox8" checked="">
                      <label class="form-check-label" for="editUserModalAlertsCheckbox8"></label>
                    </div>
                  </td>
                  <td class="">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox8" checked="">
                      <label class="form-check-label" for="editUserModalAlertsCheckbox8"></label>
                    </div>
                  </td>
                <td class="">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox14" checked="">
                    <label class="form-check-label" for="editUserModalAlertsCheckbox14"></label>
                  </div>
                </td>
                <td class="">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox15" checked="">
                    <label class="form-check-label" for="editUserModalAlertsCheckbox15"></label>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <!-- End Table -->

        <hr>

      

        <div class="d-flex justify-content-end">
          <div class="d-flex gap-3">
            <button type="submit" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>

    

    <!-- Footer -->

    <div class="footer">
        <div class="row justify-content-between align-items-center">
          <div class="col">
            <p class="fs-6 mb-0">&copy; Front. <span class="d-none d-sm-inline-block">2024 Terra Portals.</span></p>
          </div>
          <!-- End Col -->
  
        </div>
        <!-- End Row -->
      </div>
    <!-- End Footer -->
  </main>
@endsection