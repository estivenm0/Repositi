<?php

namespace App\Livewire\Admin;

use App\Livewire\Forms\WebForm;
use App\Models\Tag;
use App\Models\Web;
use App\Services\WebScrapingService;

use Livewire\Component;
use Livewire\WithPagination;

class Webs extends Component
{

    use WithPagination;

    public WebForm $form;


    public $tags;
    public $inpTags= [];
    public $modal= false;

    public function render()
    {
        $this->tags = Tag::all();
        return view('livewire.admin.webs', [
           'webs'=>  Web::orderBy('id', 'desc')->paginate(5)
        ]);
    }

 
    public function save()  {
        $this->validate();
        $this->validate(['form.URL'=> 'unique:webs,URL']);
        
        $web = $this->form->store();

        foreach($this->inpTags as $tag){
            $web->tags()->attach($tag->id);
        }
        $this->inpTags = [];
        $this->form->reset();
        
        $this->dispatch('created');

    }

    public function addTag() {
        $index = $this->form->tag;

        if (is_numeric($index) && $index >= 0 
        && $index < count($this->tags) && !$this->exists($this->tags[$index])) {
            array_push($this->inpTags, $this->tags[$index]);
            $this->reset('form.tag');
        } else {
            $this->form->tag = "ya existe";
        }
       
    }

    public function removeTag(int $index) {
        if (isset($this->inpTags[$index])) {
            unset($this->inpTags[$index]);
        }
    }

    private function exists($modelo) {
        return in_array($modelo, $this->inpTags);
    }
    

    public function scrape(WebScrapingService $scraper ) {
        $this->validate(['form.URL'=> 'required|url']);
        $result= $scraper->scrapeWebsite($this->form->URL);
        $this->form->name = (string)$result['title'];
        $this->form->favicon = $result['favicon'];
        $this->form->description = $result['description'];
        $this->dispatch('scraped');
    }

    public function active(Web $web) {
        if($web && $web->active){
            $web->active = false;
        }else{
            $web->active = true;
        }
        $web->save();
    }

    public function setWeb(Web $web)  {
        if($web){
            $this->form->setWeb($web);
            foreach ($web->tags as $tag) {
                $this->inpTags[] = $tag;
            }
        }
        $this->modal = true;

    }

    public function update() {
        $id = $this->form->web->id;
        $this->validate(['form.URL'=> 'unique:webs,URL,'.$id ]);
        $web = $this->form->update();

        $tagIds = array_column($this->inpTags, 'id');
        
        $web->tags()->sync($tagIds);
    
        $this->closeModal();
    }


    public function closeModal() 
    {
        $this->modal = false;
        $this->inpTags = [];
        $this->form->reset(); 
    }
}
