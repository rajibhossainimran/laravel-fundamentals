<?php

namespace App\Livewire\Users;

use App\Models\User;
use Livewire\Component;
use Spatie\Permission\Models\Role;

class UserEdit extends Component
{

    public $user, $name, $email , $password ,$allRoles;
    public $roles =[];


    public function mount($id){
        $this->user=User::find($id);
        $this->name = $this->user->name;
        $this->email= $this->user->email;
        $this->allRoles = Role::all();
        $this->roles = $this->user->roles()->pluck('name');
       
    }

    public function render()
    {
        return view('livewire.users.user-edit');
    }

    public function submit(){
        $this->validate([
           'name'=>'required',
           'email'=>'required|email',
           'password'=>'required|min:6', 
        ]);
        $this->user->name = $this->name;
        $this->user->email = $this->email;
        $this->user->password = $this->password;

        $this->user->save();
        $this->user->assignRole($this->roles);

        return to_route('user.index')->with('success','user updated');
    }
}
