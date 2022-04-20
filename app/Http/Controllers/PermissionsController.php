<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use App\Traits\RolesNPermissions;

class PermissionsController extends Controller
{
    use RolesNPermissions;
    private $requiredPermissions;

    public function __construct()
    {
        $this->middleware(['can:admin.permissions']);
        $this->requiredPermissions = ['admin.menu', 'admin.rent', 'admin.sale', 'admin.toys', 'admin.events', 'admin.news', 'admin.contact', 'admin.users', 'admin.roles', 'admin.profile'];
    }
    public function index(Request $request)
    {
        $roles = Role::all(['id', 'name']);
        $permissions = Permission::whereIn('name', $this->requiredPermissions)->get(['id', 'name']); /* ->orderBy('id')->pluck('name') */

        return view('admin.sections.permissions', compact('roles', 'permissions'));
    }

    public function setByAjax(){
        $input = json_decode(request('data'));

        $role = Role::findById($input->role);
        $permission = Permission::findById($input->permission);

        $this->PermissionHandler($permission, $role, $input->isChecked);

        return response()->json(json_encode($input));
    }
}
