<?php

namespace App\Controllers\admin;

use App\Controllers\BaseController;
use App\Models\UserModel;
use App\Models\PermissionModel;

class AdminController extends BaseController
{

    private $usersmodel, $permissionmodel;

    public function __construct() {

        $this->usersmodel = new UserModel();

        $this->permissionmodel = new PermissionModel();
    }

    public function viewUsers() {

        $data['users'] = $this->usersmodel->findAll();

        return view('admin/view_users', $data);
    }

    public function createUsers() {

        return view('admin/create_user', ['title' => 'Create User']);
    }

    public function viewPermissions() {

        $data['title'] = 'View permissions';

        $data['users'] = $this->permissionmodel->findAll();

        return view('admin/view_permissions', $data);
    }
}
