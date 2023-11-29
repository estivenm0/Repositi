<?php

namespace App\Livewire\Admin;

use App\Models\Tag;
use Livewire\Attributes\On;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\WithPagination;

class Tags extends Component
{
   use WithPagination;

   #[Rule('required|max:100')]
   public $name;
   public $modal = false;
   public ?Tag $tag; 
    public function render()
    {
        $tags = Tag::orderBy('id', 'desc')->paginate(20);
        
        return view('livewire.admin.tags', [
            'tags' => $tags
        ]);
    }


    public function save(){
        $this->validate();
        $this->validate([
            'name'=>'unique:tags,name'
        ]);

        Tag::create(['name'=> $this->name]);

        $this->reset();
        $this->dispatch('created', 'mensaje exitoso');
    }

    public function setTag(Tag $tag) {
        $this->tag = $tag;
        $this->name = $tag->name;
        $this->modal = true;
    }

    public function closeModal() {
        $this->reset();
        $this->modal = false;
    }

    public function delete(Tag $tag)  {
        $tag->delete();
    }

    // #[On('r')]
    // public function r() {
    //     $this->modal = true;
    // }

    public function update()
    {   
        $this->validate();
        $id =$this->tag->id;
        $this->validate([
            'name'=>'unique:tags,name,'.$id
        ]);
        $this->tag->update(['name'=> $this->name]);

        $this->closeModal();
        
    }

}
