<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    //

    public function mainWallet()
    {
        $data = [
            'title' => 'Main Wallet Logs',
        ];
        return view('reports.wallet_main')->with($data);
    }

    public function revenueWallet()
    {
        $data = [
            'title' => 'Revenue Wallet Logs',
        ];
        return view('reports.wallet_revenue')->with($data);
    }

    public function transactionsMap()
    {
        $data = [
            'title' => 'Transactions Map',
        ];
        return view('reports.map_transactions')->with($data);
    }

    public function agentsMap()
    {
        $data = [
            'title' => 'Agent Map',
        ];
        return view('reports.map_agents')->with($data);
    }

    public function overviewReport()
    {
        $data = [
            'title' => 'Overview Report',
        ];
        return view('reports.overview')->with($data);
    }

    public function stateCountReport()
    {
        $data = [
            'title' => 'State Count Report',
        ];
        return view('reports.state_count')->with($data);
    }

    public function chargeBackReport()
    {
        $data = [
            'title' => 'Charge Back Report',
        ];
        return view('reports.charge_back')->with($data);
    }

    public function disputeReport()
    {
        $data = [
            'title' => 'Dispute Report',
        ];
        return view('reports.dispute')->with($data);
    }

    public function terminalReport()
    {
        $data = [
            'title' => 'Terminal Report',
        ];
        return view('reports.terminal')->with($data);
    }

    public function performanceReport()
    {
        $data = [
            'title' => 'Performance Report',
        ];
        return view('reports.performance')->with($data);
    }

    public function tickets()
    {
        $data = [
            'title' => 'Tickets',
        ];
        return view('reports.tickets')->with($data);
    }

    public function systemMonitor()
    {
        $data = [
            'title' => 'System Monitor',
        ];
        return view('reports.system_monitor')->with($data);
    }

    public function transactionSummary()
    {
        $data = [
            'title' => 'Transaction Summary',
        ];
        return view('reports.transaction_summary')->with($data);
    }
}
