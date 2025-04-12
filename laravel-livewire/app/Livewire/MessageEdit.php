<?php

namespace App\Livewire;

use App\Models\Message;
use Flux\Flux;
use Livewire\Attributes\On;
use Livewire\Component;

class MessageEdit extends Component
{
    public $title, $body,$userId;
    public function render()
    {
        return view('livewire.message-edit');
    }

    #[On('ediMessage')]
    public function ediMessage($id){
        $message = Message::find($id);
        $this->userId = $id;
        $this->title = $message->title;
        $this->body = $message->body;

        Flux::modal('edit-messag')->show();

    }

    public function update(){
        $message = Message::find($this->userId);
        $message->title = $this->title;
        $message->body = $this->body;
        $message->save();

        Flux::modal('edit-messag')->close();

        $this->dispatch('reloadMessages');
        session()->flash('success', '✅ Update successfully!');

    }
}
