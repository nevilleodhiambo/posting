<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesController extends Controller
{
    public function index(){
        $roles = Role::all();
        return view('roles/index', compact('roles'));
    }
    public function create(){
        $permissions = Permission::all();
        return view('roles/create', compact('permissions'));
    }

    public function store(Request $request){
        // return $request->all();
        $role = new Role();
        $role->name = $request->name;
        $role->syncPermissions($request->permission_ids);
        $role->save();
        return redirect()->route('roles.index');
    }

    public function edit($id){
        $permissions = Permission::all();
        $role = Role::where('id', $id)->first();
        return view('roles/edit', compact('role', 'permissions'));
    }
    public function update(Request $request, $id){
        $role = Role::where('id', $id)->first();
        $role->name = $request->name;
        $role->syncPermissions($request->permission_ids);
        $role->save();
        return redirect()->route('roles.index');
    }
    public function destroy($id){
        $role = Role::where('id', $id)->first();
        $role->delete();
        return redirect()->route('roles.index');
    }
   
}
