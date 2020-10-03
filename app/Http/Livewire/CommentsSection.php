<?php

namespace App\Http\Livewire;

use App\Models\Comment;
use App\Models\Post;
use Livewire\Component;

class CommentsSection extends Component
{

    public $post;
    public $comment;
    public $successMessage;

    public $rules =[
        'comment' => 'required|min:4'
    ];


    public function render()
    {
        return view('livewire.comments-section');
    }

    // This is used when passing in variables to the component.
    // However, it is not needed if naming conventions are followed
    // public function mount(Post $post)
    // {
    //     $this->post = $post;
    // }
        
    public function postComment()
    {
        $this->validate();

        sleep(3);

        $comment = Comment::create([
            'content' => $this->comment,
            'post_id' => $this->post->id,
            'user_id' => auth()->user()->id
        ]);

        $this->post->comments()->save($comment);

        $this->post->refresh();

        $this->successMessage = 'Comment was posted';

        // $this->comment = '';
        // Livewire helper that resets field to original value.
        $this->reset('comment');
    }
}
