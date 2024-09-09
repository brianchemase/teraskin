<aside
    class="js-navbar-vertical-aside navbar navbar-vertical-aside navbar-vertical navbar-vertical-fixed navbar-expand-xl navbar-bordered bg-white  ">
    <div class="navbar-vertical-container">
      <div class="navbar-vertical-footer-offset">
        <!-- Logo -->

        <a class="navbar-brand" href="Dash" aria-label="Front">
          <img class="navbar-brand-logo" src="assets/svg/logos/logo.png" alt="Logo" data-hs-theme-appearance="default">
          <img class="navbar-brand-logo" src="assets/svg/logos/logo.png" alt="Logo" data-hs-theme-appearance="dark">
          <img class="navbar-brand-logo-mini" src="assets/svg/logos/icon.png" alt="Logo"
            data-hs-theme-appearance="default">
          <img class="navbar-brand-logo-mini" src="assets/svg/logos/icon.png" alt="Logo"
            data-hs-theme-appearance="dark">
        </a>

        <!-- End Logo -->

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

<div class="navbar-vertical-content">
    <div id="navbarVerticalMenu" class="nav nav-pills nav-vertical card-navbar-nav">

        <!-- Dashboards -->
        <div class="nav-item">
            <a class="nav-link active" href="#">
                <i class="bi-house-door nav-icon"></i>
                <span class="nav-link-title">Dashboards</span>
            </a>
        </div>

        <!-- Agents Section -->
        <div class="nav-item">
            <a class="nav-link dropdown-toggle collapsed" href="#" role="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalMenuAgents" aria-expanded="false" aria-controls="navbarVerticalMenuAgents">
                <i class="bi-people nav-icon"></i>
                <span class="nav-link-title">Agents</span>
            </a>
            <div id="navbarVerticalMenuAgents" class="nav-collapse collapse" data-bs-parent="#navbarVerticalMenu">
                <a class="nav-link" href="{{ route('agent.create.individual') }}">Individual Agent</a>
                <a class="nav-link" href="{{ route('agent.create.sole') }}">Sole Proprietorship</a>
                <a class="nav-link" href="{{ route('agent.create.corporate') }}">Corporate</a>
                <a class="nav-link" href="{{ route('agents.index') }}">View Agents</a>
                <a class="nav-link" href="{{ route('agents.account_managers') }}">View Account Managers</a>
                <a class="nav-link" href="{{ route('agents.aggregators') }}">View Aggregators</a>
            </div>
        </div>

        <!-- Customers Section -->
        <div class="nav-item">
            <a class="nav-link dropdown-toggle collapsed" href="#" role="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalMenuCustomer" aria-expanded="false" aria-controls="navbarVerticalMenuCustomer">
                <i class="bi-person-check nav-icon"></i>
                <span class="nav-link-title">Customers</span>
            </a>
            <div id="navbarVerticalMenuCustomer" class="nav-collapse collapse" data-bs-parent="#navbarVerticalMenu">
                <a class="nav-link" href="{{ route('customers.index') }}">Customer Overview</a>
                <a class="nav-link" href="{{ route('customers.service_overview') }}">Service Overview</a>
            </div>
        </div>

        <!-- Transactions Section -->
        <div class="nav-item">
            <a class="nav-link" href="{{ route('transactions.index') }}">
                <i class="bi-bar-chart nav-icon"></i>
                <span class="nav-link-title">Transactions</span>
            </a>
        </div>

        <!-- Reports & Analytics Section -->
        <div class="nav-item">
            <a class="nav-link dropdown-toggle collapsed" href="#" role="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalMenuReports" aria-expanded="false" aria-controls="navbarVerticalMenuReports">
                <i class="bi-shield-lock nav-icon"></i>
                <span class="nav-link-title">Report & Analytics</span>
            </a>
            <div id="navbarVerticalMenuReports" class="nav-collapse collapse" data-bs-parent="#navbarVerticalMenu">
                <a class="nav-link" href="{{ route('report.wallet_logs.main') }}">Main Wallet Logs</a>
                <a class="nav-link" href="{{ route('report.wallet_logs.revenue') }}">Revenue Wallet Logs</a>
                <a class="nav-link" href="{{ route('report.maps.transactions') }}">Transactions Map</a>
                <a class="nav-link" href="{{ route('report.maps.agents') }}">Agents Map</a>
                <a class="nav-link" href="{{ route('report.reports.overview') }}">Overview Report</a>
                <a class="nav-link" href="{{ route('report.reports.state_count') }}">State Count Report</a>
                <a class="nav-link" href="{{ route('report.reports.charge_back') }}">Charge Back Report</a>
                <a class="nav-link" href="{{ route('report.reports.dispute') }}">Dispute Report</a>
                <a class="nav-link" href="{{ route('report.reports.terminal') }}">Terminal Report</a>
                <a class="nav-link" href="{{ route('report.reports.performance') }}">Performance Report</a>
            </div>
        </div>

        <!-- Portal Settings Section -->
        <div class="nav-item">
            <a class="nav-link dropdown-toggle collapsed" href="#" role="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalMenuSettings" aria-expanded="false" aria-controls="navbarVerticalMenuSettings">
                <i class="bi-lock nav-icon"></i>
                <span class="nav-link-title">Portal Settings</span>
            </a>
            <div id="navbarVerticalMenuSettings" class="nav-collapse collapse" data-bs-parent="#navbarVerticalMenu">
                <a class="nav-link" href="{{ route('portal.users.list') }}">List Users</a>
                <a class="nav-link" href="{{ route('portal.users.add') }}">Add User</a>
                <a class="nav-link" href="{{ route('portal.roles') }}">Roles</a>
                <a class="nav-link" href="{{ route('portal.permissions') }}">Permissions</a>
                <a class="nav-link" href="{{ route('portal.audit_trail') }}">Audit Trail</a>
                <a class="nav-link" href="{{ route('portal.transaction_settings') }}">Transaction Settings</a>
                <a class="nav-link" href="{{ route('portal.account_settings') }}">Account Settings</a>
                <a class="nav-link" href="{{ route('portal.key_management') }}">Key Management</a>
            </div>
        </div>

        <!-- Logout -->
        <div class="nav-item">
            <a class="nav-link text-danger" href="#">
                <i class="bi-arrow-left-circle nav-icon"></i>
                <span class="nav-link-title">Logout</span>
            </a>
        </div>
    </div>
</div>
