<?php

namespace App\Livewire\User;

use App\Models\Tag;
use App\Models\Web;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

class Webs extends Component
{
    use WithPagination;

    #[Url()]
    public $sort= 'desc';

    #[Url()]
    public $search;

    public $tags;

    public $selectTag;

    public $selecteds= [];

    public $type ;

    public function mount(){
        $this->tags = Tag::orderBy('name', 'asc')->get();
    }

    public function render()
    {
        return view('livewire.user.webs');
    }

    public function addTag($value){
        if(!in_array($value, $this->selecteds)){
            $this->selecteds[] = $value;
        }

    }
    public function removeTag($index){
       unset($this->selecteds[$index]);
    }

    public function updatingSelectTag($value){
        $this->addTag($value); 
    }

    public function updated($attribute){
        if($attribute === 'selectTag' || $attribute === 'type' || $attribute === 'sort' || $attribute === 'search')
        {
            $this->resetPage(); 
        }
    }

    #[Computed]
    public function webs(){
    $query = Web::where('active', true);

    if($this->search){
        return $query->where('name','LIKE', '%'.$this->search.'%')
            ->orWhere('description','LIKE', '%'.$this->search.'%')->paginate(10);
    }

    if ($this->selecteds) {
        $query->whereHas('tags', function ($query) {
            $query->whereIn('name',$this->selecteds);
        }, '>=', count($this->selecteds));
    }

    if ($this->type) {
        $query->where(function ($query) {
            $query->where('type', $this->type);
        });
    }

    return $query->orderBy('id', $this->sort)->paginate(10); 
    }
}
