<?php

namespace App\Livewire\User;

use App\Livewire\Forms\FeedbackForm;
use App\Models\Feedback;
use App\Models\Space;
use App\Models\SpaceWebs;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;
use PhpParser\Node\Expr\Cast\String_;

class Panel extends Component
{
    use WithPagination;
    public Space $space;

    public FeedbackForm $form;

    public function render()
    {
        $this->space = Space::where('user_id', Auth::user()->id)->whereNull('parent_id')->first();
        $webs =DB::table('webs')->join('space_webs', 'webs.id', '=', 'space_webs.web_id')
        ->where('space_webs.space_id', $this->space->id)
        ->orderBy('space_webs.id', 'desc')
        ->paginate(15);

        return view('livewire.user.panel', [
            'webs' => $webs
        ]);
    }



    public function remove(Space $space, String $web)  {
       $space->webs()->detach($web); 
    }

    public function saveFeedback(){
        $this->form->store();
        $this->reset('form.content');
        $this->dispatch('created');
    }
}
