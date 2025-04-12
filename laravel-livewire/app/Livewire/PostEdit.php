<?php

namespace App\Livewire;

use App\Models\Post;
use Flux\Flux;
use Livewire\Attributes\On;
use Livewire\Component;

class PostEdit extends Component
{
    public $title, $body,$userId;
    public function render()
    {
        return view('livewire.post-edit');
    }

    #[On('editPost')]
    public function editPost($id){
        $post= Post::find($id);
        $this->userId = $id;
        $this->title= $post->title;
        $this->body=$post->body;
        Flux::modal('edit-post')->show();
    }

    public function update(){
        $post = Post::find($this->userId);
        $post->title = $this->title;
        $post->body = $this->body;
        $post->save();

        Flux::modal('edit-post')->close();
        $this->dispatch('reloadPosts');

    }
}
