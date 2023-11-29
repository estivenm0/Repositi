<?php

namespace App\Livewire\Forms;

use App\Models\Feedback;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Rule;
use Livewire\Form;

class FeedbackForm extends Form
{
   
    #[Rule('required|max:250')]
    public $content;

    public function store(){
        $this->validate();
        Feedback::create([
            'user_id'=> Auth::user()->id,
            'type'=> 'Recomendar Web',
            'content'=> $this->content,
        ]);
    }


}
