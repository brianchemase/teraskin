<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortalSettingController extends Controller
{
    //
    public function listUsers()
    {
        $data = [
            'title' => 'List Users',
        ];
        return view('portal.list_users')->with($data);
    }

    public function addUser()
    {
        $data = [
            'title' => 'Add User',
        ];
        return view('portal.add_user')->with($data);
    }

    public function roles()
    {
        $data = [
            'title' => 'Roles',
        ];
        return view('portal.roles')->with($data);
    }

    public function permissions()
    {
        $data = [
            'title' => 'Permissions',
        ];
        return view('portal.permissions')->with($data);
    }

    public function auditTrail()
    {
        $data = [
            'title' => 'Audit Trail',
        ];
        return view('portal.audit_trail')->with($data);
    }

    public function transactionSettings()
    {
        $data = [
            'title' => 'Transaction Settings',
        ];
        return view('portal.transaction_settings')->with($data);
    }

    public function accountSettings()
    {
        $data = [
            'title' => 'Account Settings',
        ];
        return view('portal.account_settings')->with($data);
    }

    public function keyManagement()
    {
        $data = [
            'title' => 'Key Management',
        ];
        return view('portal.key_management')->with($data);
    }
}
