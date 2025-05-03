<?php

namespace App\Livewire\Users;

use App\Models\User;
use Livewire\Component;
use Spatie\Permission\Models\Role;

class UserCreate extends Component
{
    public $name , $email, $password,$allRoles;
    public $roles =[];

    public function mount(){
        $this->allRoles = Role::all();
    }

    public function render()
    {
        return view('livewire.users.user-create');
    }

    public function submit(){
        $this->validate([
           'name'=>'required',
           'email'=>'required|email',
           'roles'=>'required',
           'password'=>'required|min:6', 
        ]);
        $user = User::create([
            'name'=>$this->name,
            'email'=>$this->email,
            'password'=>$this->password,
        ]);
        $user->assignRole($this->roles);

        return to_route('user.index')->with('success','user created');
    }
}
