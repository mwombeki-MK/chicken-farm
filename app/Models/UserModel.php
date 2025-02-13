<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table      = 'users';
    protected $primaryKey = 'user_id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    // protected $useSoftDeletes = true;

    protected $allowedFields = ['username', 'email', 'password', 'status'];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    // protected $deletedField  = 'deleted_at';

    public function getUserPermissions($userid) {

        $query = $this->db->table('users utb')
            ->select('ptb.name')
            ->join('user_roles urtb', 'urtb.userID = utb.user_id')
            ->join('roles rtb', 'rtb.role_id = urtb.roleID')
            ->join('role_permissions rptb', 'rptb.roleID = rtb.role_id')
            ->join('permissions ptb', 'ptb.permission_id = rptb.permissionID')
            ->where('utb.user_id', $userid)
            ->get()->getResultArray();

        return $query;
    }
    
}