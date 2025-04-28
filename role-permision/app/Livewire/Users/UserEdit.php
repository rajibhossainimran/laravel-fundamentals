<?php

namespace App\Livewire\Users;

use App\Models\User;
use Livewire\Component;

class UserEdit extends Component
{

    public $user, $name, $email , $password;

    public function mount($id){
        $this->user=User::find($id);
        $this->name = $this->user->name;
        $this->email= $this->user->email;
       
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


        return to_route('user.index')->with('success','user updated');
    }
}
