<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Models\Permission as ModelsPermission;
use Spatie\Permission\Traits\HasRoles;

class Permission extends ModelsPermission
{
    use HasFactory, HasRoles;
}
