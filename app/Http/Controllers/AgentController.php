<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgentController extends Controller
{
    //

    public function Dashboard()
    {
        $data = [
            'title' => 'Agents',
            // Add other data if needed
        ];
        return view('dashboard')->with($data);
    }


    public function index()
    {
        $data = [
            'title' => 'Agents',
            // Add other data if needed
        ];
        return view('agents.index')->with($data);
    }

    public function createIndividualAgent()
    {
        $data = [
            'title' => 'Create Individual Agent',
        ];
        return view('agents.create_individual')->with($data);
    }

    public function createSoleProprietorship()
    {
        $data = [
            'title' => 'Create Sole Proprietorship',
        ];
        return view('agents.create_sole')->with($data);
    }

    public function createCorporate()
    {
        $data = [
            'title' => 'Create Corporate Agent',
        ];
        return view('agents.create_corporate')->with($data);
    }

    

    public function viewAccountManagers()
    {
        $data = [
            'title' => 'View Account Managers',
        ];
        return view('agents.account_managers')->with($data);
    }

    public function viewAggregators()
    {
        $data = [
            'title' => 'View Aggregators',
        ];
        return view('agents.aggregators')->with($data);
    }
}
