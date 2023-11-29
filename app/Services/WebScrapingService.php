<?php
namespace App\Services;

use Error;
use Exception;
use Goutte\Client;

class WebScrapingService
{
    public function scrapeWebsite($url)
    {
         // Inicializa un cliente Goutte
        $client = new Client();

        // Hace una solicitud HTTP a la URL
        $crawler = $client->request('GET', $url);

        $title = '';
        $favicon = '';
        $description = '';
    
        try{
        // Extrae el título de la página si existe
        if ($crawler->filter('title')->count() > 0) {
            $title = $crawler->filter('title')->text();
        }
    
        // Extrae la descripción (si existe)
        if ($crawler->filter('meta[name="Description"]')->count() > 0) {
            $description = $crawler->filter('meta[name="Description"]')->attr('content');
        }else if($crawler->filter('meta[name="description"]')->count() > 0){
            $description = $crawler->filter('meta[name="description"]')->attr('content');
        }

         // Extrae el favicon (si existe)
         if ($crawler->filter('link[rel="icon"]')->count() > 0) {
            $favicon = $crawler->filter('link[rel="icon"]')->attr('href');
        }else if($crawler->filter('link[rel="shortcut icon"]')->attr('href')){
            $favicon = $crawler->filter('link[rel="shortcut icon"]')->attr('href');
        }
    }catch(Exception $e){

    }
    
        return compact(['title', 'favicon', 'description']);
    }
}