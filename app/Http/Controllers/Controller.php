<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\User;
use App\Models\Web;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\View\View;
use Laravel\Jetstream\Jetstream;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;



    public function index() : View 
    {
        $samples = Web::where('active', true)->inRandomOrder()->take(3)->get();
        $webs = Web::count();
        $users = User::count();
        $tags = Tag::count();
        return view('repositi.landing', compact(['webs', 'tags', 'users', 'samples']));    
    }

    public function about(): View {
        $about = Jetstream::localizedMarkdownPath('about.md');
        
        return View('repositi.about-us', [
            'about'=> Str::markdown(file_get_contents($about))
        ]); 
    }


    public function wuest(string $tag = Null)
    {
        if(Auth::check()){
            return redirect()->to('webs');
        }else{
            $tags = Tag::all();

            if($tag){

                $webs = Web::where('active', true)
                ->whereHas('tags', function ($query) use ($tag) {
                    $query->where('name', 'LIKE', '%' . $tag . '%');
                })
                ->paginate(8);
            }else{
                $webs = Web::where('active', true)->inRandomOrder()->paginate(8);
            }

            return View('repositi.webs-guest', compact(['webs', 'tags', 'tag']));
        }
    }
}
