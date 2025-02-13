<?php

namespace App\Models;

use CodeIgniter\Model;

class UserPermissionModel extends Model
{
    protected $table      = 'user_permissions';
    protected $primaryKey = 'user_permission_id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';

    protected $allowedFields = ['userID', 'permissionID'];

    protected bool $allowEmptyInserts = false;
    // protected bool $updateOnlyChanged = true;

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    // protected $updatedField  = 'updated_at';
}