<?php

namespace App\Controllers;

use App\Models\UserModel;

class Home extends BaseController
{
    private $usermodel;

    public function __construct() {
        
        $this->usermodel = new UserModel();
    }

    public function index(): string
    {
        return view('login');
    }

    public function userLogin() {

        if ($this->request->getMethod() === 'POST') {

            $user = $this->usermodel->where('username', $this->request->getPost('username'))->first();

            if ($user) {

                $userPermissions = $this->usermodel->getUserPermissions($user['user_id']);

                $userPermissionsName = array_column($userPermissions, 'name');

                session()->set('user_permissions', $userPermissionsName);

                return redirect()->to(base_url('view_users'));
            }

            return redirect()->back()->withInput()->with('msg_error', 'Wrong Credentials');
        }
    }
}
