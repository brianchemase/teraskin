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
                <th>Display Name</th>
                <th class="text-center">
                  
                  # of users with this role
                </th>
                <th class="">
                  
                  Action
                </th>
                
              </tr>
            </thead>

            <tbody>
              <tr>
                <td>New for you</td>
                <td class="text-center">
                  1
                </td>
                <td class="text-">
                  <div class="row ">
                    <div class="col-2 mx-2">
                      <button type="button" class="btn btn-white btn-sm" data-bs-toggle="modal" data-bs-target="#editUserModal">
                        <i class="bi-pencil-fill me-1"></i>
                      </button>
                    </div>
                    <div class="col-2 mx-2">
                      <button type="button" class="btn btn-white btn-sm" >
                        <i class="bi-lock me-1"></i>
                      </button>
                    </div>
                  </div>
                </td>
               
              </tr>

             
              <tr>
                <td>New for you</td>
                <td class="text-center">
                  1
                </td>
                <td class="text-">
                  <div class="row ">
                    <div class="col-2 mx-2">
                      <button type="button" class="btn btn-white btn-sm" data-bs-toggle="modal" data-bs-target="#editUserModal">
                        <i class="bi-pencil-fill me-1"></i>
                      </button>
                    </div>
                    <div class="col-2 mx-2">
                      <button type="button" class="btn btn-white btn-sm" >
                        <i class="bi-lock me-1"></i>
                      </button>
                    </div>
                  </div>
                </td>
               
              </tr>

              <tr>
                <td>New for you</td>
                <td class="text-center">
                  1
                </td>
                <td class="text-">
                  <div class="row ">
                    <div class="col-2 mx-2">
                      <button type="button" class="btn btn-white btn-sm" data-bs-toggle="modal" data-bs-target="#editUserModal">
                        <i class="bi-pencil-fill me-1"></i>
                      </button>
                    </div>
                    <div class="col-2 mx-2">
                      <button type="button" class="btn btn-white btn-sm" >
                        <i class="bi-lock me-1"></i>
                      </button>
                    </div>
                  </div>
                </td>
               
              </tr>

              <tr>
                <td>New for you</td>
                <td class="text-center">
                  1
                </td>
                <td class="text-">
                  <div class="row ">
                    <div class="col-2 mx-2">
                      <button type="button" class="btn btn-white btn-sm" data-bs-toggle="modal" data-bs-target="#editUserModal">
                        <i class="bi-pencil-fill me-1"></i>
                      </button>
                    </div>
                    <div class="col-2 mx-2">
                      <button type="button" class="btn btn-white btn-sm" >
                        <i class="bi-lock me-1"></i>
                      </button>
                    </div>
                  </div>
                </td>
               
              </tr>
             
            </tbody>
          </table>
        </div>
        <!-- End Table -->

        <hr>

      

        <!-- <div class="d-flex justify-content-end">
          <div class="d-flex gap-3">
            <button type="button" class="btn btn-white" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
          </div>
        </div> -->
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