<?php

namespace App\Livewire\Forms;

use App\Models\Web;
use App\Services\WebScrapingService;
use Livewire\Attributes\Rule;
use Livewire\Form;
use Illuminate\Support\Str;
class WebForm extends Form
{
    #[Rule('required|url|max:250')]
    public $URL= '';

    #[Rule('required|min:2|max:150')]
    public $name= '';

    #[Rule('url|max:250')]
    public $favicon= '';

    #[Rule('min:10|max:400')]
    public $description= '';

    public $type= NULL;

    public $tag= '';

    public ?Web $web;

    public function store() : Web {
        $data = $this->all();

        $data['slug'] = Str::slug($data['name']);
        return Web::create($data);
    }

    public function setWeb(Web $web){
            $this->web = $web;
            $this->URL = $web->URL;
            $this->name = $web->name;
            $this->favicon = $web->favicon;
            $this->description = $web->description;        
            $this->type = $web->type;        
    }

    public function update() : Web {
        $this->validate();
        
        $this->web->update($this->all());

        return $this->web;
    }

   
}
