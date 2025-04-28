<?php

namespace App\Livewire\Users;

use App\Models\User;
use Livewire\Component;

class UserCreate extends Component
{
    public $name , $email, $password;

    public function render()
    {
        return view('livewire.users.user-create');
    }

    public function submit(){
        $this->validate([
           'name'=>'required',
           'email'=>'required|email',
           'password'=>'required|min:6', 
        ]);
        User::create([
            'name'=>$this->name,
            'email'=>$this->email,
            'password'=>$this->password,
        ]);

        return to_route('user.index')->with('success','user created');
    }
}
