<?php

namespace App\Livewire\User;

use App\Models\Space;
use App\Models\Web as ModelsWeb;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Livewire\Component;

class Web extends Component
{

    public ModelsWeb $web;

    public $liked = false;

  

    public function render()
    {
        return view('livewire.user.web');
    }

    public function mount(ModelsWeb $web)
    {
        $this->liked = Auth::user()->hasLike($web);
    }


    public function like(string $id)
    {
        $space = Space::where('id', Auth::user()->id)->first();

        if ($space->webs()->wherePivot('web_id', $id)->exists()) {
            $space->webs()->detach($id);
            $this->liked = false;
        } else {
            $space->webs()->attach($id);
            $this->liked = true;
        }
    }

    public function placeholder(array $params = [])
    {
        return View('components.placeholders.web', $params);
    }

}
