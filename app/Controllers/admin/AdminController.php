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

        $data['permissions'] = $this->permissionmodel->findAll();

        return view('admin/view_permissions', $data);
    }

    public function createPermission() {

        if ($this->request->getMethod() === 'POST') {

            $formdata = [
                'name' => $this->request->getPost('name')
            ];

            $this->permissionmodel->insert($formdata);

            return redirect()->to(base_url('view_permissions'))->with('msg_success', 'Permission added');
        }

        return view('admin/create_permission', ['title' => 'Create permission']);
    }

    public function editPermission($permissionID) {

        if ($this->request->getMethod() === 'POST') {

            $formdata = [
                'name' => $this->request->getPost('name')
            ];

            $permission_id = $this->request->getPost('permission_id');

            $this->permissionmodel->update($permission_id, $formdata);

            return redirect()->to(base_url('view_permissions'))->with('msg_success', 'Permission Updated');
        }

        $data = [
            'title' => 'Create permission',
            'permission' => $this->permissionmodel->find($permissionID),
        ];

        return view('admin/edit_permission', $data);
    }

    public function deletePermission($permissionID) {

        $this->permissionmodel->delete($permissionID);

        return redirect()->to(base_url('view_permissions'))->with('msg_success', 'Permission deleted');
    }
}
