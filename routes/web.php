<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AgentController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\PortalSettingController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('Dash', [AgentController::class, 'Dashboard'])->name('DashboardHome');
// Routes for Agents
Route::get('add-agent', [AgentController::class, 'createIndividualAgent'])->name('agent.create.individual');
Route::get('add-sole', [AgentController::class, 'createSoleProprietorship'])->name('agent.create.sole');
Route::get('add-corporate', [AgentController::class, 'createCorporate'])->name('agent.create.corporate');
Route::get('agents', [AgentController::class, 'index'])->name('agents.index');
Route::get('account-managers', [AgentController::class, 'viewAccountManagers'])->name('agents.account_managers');
Route::get('aggregators', [AgentController::class, 'viewAggregators'])->name('agents.aggregators');

// Routes for Customers
Route::get('customers', [CustomerController::class, 'index'])->name('customers.index');
Route::get('service-overview', [CustomerController::class, 'serviceOverview'])->name('customers.service_overview');

// Routes for Transactions
Route::get('transactions', [TransactionController::class, 'index'])->name('transactions.index');

// Routes for Reports & Analytics
Route::get('wallet-logs/main', [ReportController::class, 'mainWallet'])->name('report.wallet_logs.main');
Route::get('wallet-logs/revenue', [ReportController::class, 'revenueWallet'])->name('report.wallet_logs.revenue');
Route::get('maps/transactions', [ReportController::class, 'transactionsMap'])->name('report.maps.transactions');
Route::get('maps/agents', [ReportController::class, 'agentsMap'])->name('report.maps.agents');
Route::get('reports/overview', [ReportController::class, 'overviewReport'])->name('report.reports.overview');
Route::get('reports/state-count', [ReportController::class, 'stateCountReport'])->name('report.reports.state_count');
Route::get('reports/charge-back', [ReportController::class, 'chargeBackReport'])->name('report.reports.charge_back');
Route::get('reports/dispute', [ReportController::class, 'disputeReport'])->name('report.reports.dispute');
Route::get('reports/terminal', [ReportController::class, 'terminalReport'])->name('report.reports.terminal');
Route::get('reports/performance', [ReportController::class, 'performanceReport'])->name('report.reports.performance');
Route::get('tickets', [ReportController::class, 'tickets'])->name('report.tickets');
Route::get('system-monitor', [ReportController::class, 'systemMonitor'])->name('report.system_monitor');
Route::get('transaction-summary', [ReportController::class, 'transactionSummary'])->name('report.transaction_summary');

// Routes for Portal Settings
Route::get('users', [PortalSettingController::class, 'listUsers'])->name('portal.users.list');
Route::get('add-user', [PortalSettingController::class, 'addUser'])->name('portal.users.add');
Route::get('roles', [PortalSettingController::class, 'roles'])->name('portal.roles');
Route::get('permission', [PortalSettingController::class, 'permissions'])->name('portal.permissions');
Route::get('audit-trail', [PortalSettingController::class, 'auditTrail'])->name('portal.audit_trail');
Route::get('transaction-rate', [PortalSettingController::class, 'transactionSettings'])->name('portal.transaction_settings');
Route::get('account-settings', [PortalSettingController::class, 'accountSettings'])->name('portal.account_settings');
Route::get('key-management', [PortalSettingController::class, 'keyManagement'])->name('portal.key_management');