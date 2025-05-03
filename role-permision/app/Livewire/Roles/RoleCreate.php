<?php

namespace App\Livewire\Roles;

use Livewire\Component;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleCreate extends Component
{

    public $name ;
    public $permissions = []; 
    public $allPermission = [];

    public function mount(){
        $this->allPermission = Permission::all();
    }

    public function render()
    {
        return view('livewire.roles.role-create');
    }

    public function submit(){
        $this->validate([
           'name'=>'required|unique:roles,name',
           'permissions'=>'required',
          
        ]);
        $role = Role::create([
            'name'=>$this->name,
        ]);

        $role->syncPermissions($this->permissions);
        return to_route('role.index')->with('success','role created');
    }
}
