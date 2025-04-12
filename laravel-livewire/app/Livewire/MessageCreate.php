<?php

namespace App\Livewire;

use App\Models\Message;
use Flux\Flux;
use Livewire\Component;

class MessageCreate extends Component
{
    public  $title,$body;

    public function render()
    {
        return view('livewire.message-create');
    }

    public function createm(){
        $this->validate([
            'title'=>'required',
            'body'=>'required',
        ]);
        Message::create([
            'title'=>$this->title,
            'body'=>$this->body,
        ]);
        $this->clearForm();
        Flux::modal('edit-message')->close();
        $this->dispatch('reloadMessages');

        session()->flash('success', '✅ Message created successfully!');

    }

    public function clearForm(){
        $this->title='';
        $this->body='';
    }
}
