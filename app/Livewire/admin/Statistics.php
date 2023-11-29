<?php

namespace App\Livewire\Admin;

use App\Models\Category;
use App\Models\Feedback;
use App\Models\Tag;
use App\Models\User;
use App\Models\Web;
use App\Models\Report;
use Livewire\Component;

class Statistics extends Component
{
    public $webs;
    public $users;
    public $feedbacks;
    public $tags;
    public $reports;
    public $recent;

    public function render()
    {
        $this->users= User::count();  
        $this->webs= Web::count();  
        $this->feedbacks= Feedback::count();  
        $this->tags= Tag::count();  
        $this->reports= Report::count();  
        $this->recent = User::latest()->take(5)->get();


        return view('livewire.admin.statistics');
    }

}
