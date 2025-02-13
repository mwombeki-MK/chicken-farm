<?php

namespace App\Models;

use CodeIgniter\Model;

class UserRoleModel extends Model
{
    protected $table      = 'user_roles';
    protected $primaryKey = 'user_role_id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';

    protected $allowedFields = ['userID', 'roleID'];

    protected bool $allowEmptyInserts = false;
    // protected bool $updateOnlyChanged = true;

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    // protected $updatedField  = 'updated_at';
}