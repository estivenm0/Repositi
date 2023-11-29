<?php

namespace App\Livewire\Admin;

use App\Models\Feedback;
use Livewire\Component;
use Livewire\WithPagination;

class Feedbacks extends Component
{
    use WithPagination;
    public function render()
    {   
        $feedbacks = Feedback::paginate(5);
        return view('livewire.admin.feedbacks', [
            'feedbacks' => $feedbacks
        ]);
    }


    public function delete(Feedback $feedback){
        $feedback->delete();
    }
}
