<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Toastr;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
       $roles = Role::whereNotIn('name', ['admin'])->get();
        return view('admin.roles.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //create new roles
        $validated = $request->validate(['name' => ['required',' min:3', 'unique:roles']]);

        Role::create($validated);
        Toastr::success('Role added successfully');
        return to_route('admin.roles.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Role $role)
    {
        //
        $permissions = Permission::all();
        return view('admin.roles.edit', compact('role', 'permissions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Role $role)
    {
        //
        $validated = $request->validate(['name' => 'required']);
        $role->update($validated);

        Toastr::success('Item updated successfully');
        return to_route('admin.roles.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {
        //
        $role->delete();

        Toastr::success('Item deleted successfully');
        return back();
    }

    public function givePermission(Request $request , Role $role)
    {
        # code...
        if($role->hasPermissionTo($request->permission)){
            return back();
        }

        $role->givePermissionTo($request->permission);
        Toastr::success('permission added successfully');
        return back();
    }

    public function revokePermission(Role $role , Permission $permission)
    {
        # 
        if($role->hasPermissionTo($permission)){
            $role->revokePermissionTo($permission);
            return back();
        }

        Toastr::success('permission revoked successfully');
        return back();
    }
}
