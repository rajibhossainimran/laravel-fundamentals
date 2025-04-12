<?php

namespace App\Livewire;

use App\Models\Message;
use Flux\Flux;
use Livewire\Attributes\On;
use Livewire\Component;

class Messages extends Component
{
    public $messages,$userId;
    public function render()
    {
        return view('livewire.messages');
    }

    public function mount(){
        $this->messages = Message::get();
    }

    #[On('reloadMessages')]
    public function reloadMessages(){
        $this->messages = Message::get();
    }

    public function edit($id){
        $this->dispatch('ediMessage',$id);
    }


    public function selectDel($id){
        $this->userId = $id;
        Flux::modal('delete-message')->show();
    }

    public function delete(){
        Message::find($this->userId)->delete();
        $this->reloadMessages();
        Flux::modal('delete-message')->close();
    }

}
