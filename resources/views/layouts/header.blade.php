 <!-- ========== HEADER ========== -->

 <header id="header"
    class="navbar navbar-expand-lg navbar-fixed navbar-height navbar-container navbar-bordered bg-white">
    <div class="navbar-nav-wrap">
      <!-- Logo -->
      <a class="navbar-brand" href="Dash" aria-label="Front">
        <img class="navbar-brand-logo" src="assets/svg/logos/logo.png" alt="Logo" data-hs-theme-appearance="default">
        <img class="navbar-brand-logo" src="assets/svg/logos/logo.png" alt="Logo" data-hs-theme-appearance="dark">
        <img class="navbar-brand-logo-mini" src="assets/svg/logos/icon.png" alt="Logo"
          data-hs-theme-appearance="default">
        <img class="navbar-brand-logo-mini" src="assets/svg/logos/icon.png" alt="Logo" data-hs-theme-appearance="dark">
      </a>
      <!-- End Logo -->

      <div class="navbar-nav-wrap-content-start">
        <!-- Navbar Vertical Toggle -->
        <button type="button" class="js-navbar-vertical-aside-toggle-invoker navbar-aside-toggler">
          <i class="bi-arrow-bar-left navbar-toggler-short-align"
            data-bs-template='<div class="tooltip d-none d-md-block" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>'
            data-bs-toggle="tooltip" data-bs-placement="right" title="Collapse"></i>
          <i class="bi-arrow-bar-right navbar-toggler-full-align"
            data-bs-template='<div class="tooltip d-none d-md-block" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>'
            data-bs-toggle="tooltip" data-bs-placement="right" title="Expand"></i>
        </button>

        <!-- End Navbar Vertical Toggle -->

        <!-- Search Form -->
        <div class="dropdown ms-2">
          <!-- Input Group -->
          <div class="d-none d-lg-block">
            <div
              class="input-group input-group-merge input-group-borderless input-group-hover-light navbar-input-group">
              <div class="input-group-prepend input-group-text">
                <i class="bi-search"></i>
              </div>

              <input type="search" class="js-form-search form-control" placeholder="Search in front"
                aria-label="Search in front" data-hs-form-search-options='{
                       "clearIcon": "#clearSearchResultsIcon",
                       "dropMenuElement": "#searchDropdownMenu",
                       "dropMenuOffset": 20,
                       "toggleIconOnFocus": true,
                       "activeClass": "focus"
                     }'>
              <a class="input-group-append input-group-text" href="javascript:;">
                <i id="clearSearchResultsIcon" class="bi-x-lg" style="display: none;"></i>
              </a>
            </div>
          </div>

          <button
            class="js-form-search js-form-search-mobile-toggle btn btn-ghost-secondary btn-icon rounded-circle d-lg-none"
            type="button" data-hs-form-search-options='{
                       "clearIcon": "#clearSearchResultsIcon",
                       "dropMenuElement": "#searchDropdownMenu",
                       "dropMenuOffset": 20,
                       "toggleIconOnFocus": true,
                       "activeClass": "focus"
                     }'>
            <i class="bi-search"></i>
          </button>
          <!-- End Input Group -->



        </div>

        <!-- End Search Form -->
      </div>

      <div class="navbar-nav-wrap-content-end">
        <!-- Navbar -->
        <ul class="navbar-nav">




          <li class="nav-item">
            <!-- Account -->
            <div class="dropdown">
              <a class="navbar-dropdown-account-wrapper" href="javascript:;" id="accountNavbarDropdown"
                data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside"
                data-bs-dropdown-animation="">
                <div class="avatar avatar-sm avatar-circle">
                  <img class="avatar-img" src="assets/img/160x160/img6.jpg" alt="Image Description">
                  <span class="avatar-status avatar-sm-status avatar-status-success"></span>
                </div>
              </a>

              <div
                class="dropdown-menu dropdown-menu-end navbar-dropdown-menu navbar-dropdown-menu-borderless navbar-dropdown-account"
                aria-labelledby="accountNavbarDropdown" style="width: 16rem;">
                <div class="dropdown-item-text">
                  <div class="d-flex align-items-center">
                    <div class="avatar avatar-sm avatar-circle">
                      <img class="avatar-img" src="assets/img/160x160/img6.jpg" alt="Image Description">
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <h5 class="mb-0">Mark Williams</h5>
                      <p class="card-text text-body">mark@site.com</p>
                    </div>
                  </div>
                </div>

                <div class="dropdown-divider"></div>

                <!-- Dropdown -->
                <div class="dropdown">
                  <a class="navbar-dropdown-submenu-item dropdown-item dropdown-toggle" href="javascript:;"
                    id="navSubmenuPagesAccountDropdown1" data-bs-toggle="dropdown" aria-expanded="false">Set status</a>

                  <div
                    class="dropdown-menu dropdown-menu-end navbar-dropdown-menu navbar-dropdown-menu-borderless navbar-dropdown-sub-menu"
                    aria-labelledby="navSubmenuPagesAccountDropdown1">
                    <a class="dropdown-item" href="#">
                      <span class="legend-indicator bg-success me-1"></span> Available
                    </a>
                    <a class="dropdown-item" href="#">
                      <span class="legend-indicator bg-danger me-1"></span> Busy
                    </a>
                    <a class="dropdown-item" href="#">
                      <span class="legend-indicator bg-warning me-1"></span> Away
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#"> Reset status
                    </a>
                  </div>
                </div>
                <!-- End Dropdown -->

                <a class="dropdown-item" href="#">Profile &amp; account</a>
                <a class="dropdown-item" href="#">Settings</a>

                <div class="dropdown-divider"></div>



                <a class="dropdown-item" href="#">Manage team</a>

                <div class="dropdown-divider"></div>

                <a class="dropdown-item" href="#">Sign out</a>
              </div>
            </div>
            <!-- End Account -->
          </li>
        </ul>
        <!-- End Navbar -->
      </div>
    </div>
  </header>

  <!-- ========== END HEADER ========== -->