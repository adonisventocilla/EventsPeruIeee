<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Goutte\Client as GoutteClient;
use Illuminate\Http\Request;
use Symfony\Component\BrowserKit\Client;

class WelcomeController extends Controller
{
   
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(GoutteClient $client)
    {
        // $crawler = $client->request('GET', 'https://events.vtools.ieee.org/events/search/advanced?utf8=%E2%9C%93&sub=true&store_values=true&search=&category_id=&subcategory_id=&meeting%5Bregion_spoid%5D=R9&meeting%5Bsection_spoid%5D=R90721&meeting%5Bou_spoid%5D=&society=&meeting_after=01+Sep+2019+12%3A00+AM&meeting_before=&geo_distance=&geo_search=&order=start_time&per_page=30');
        // $inlineTitleClass = 'col_title tooltip-active';
        // $crawler->filter("[class='$inlineTitleClass']")->each(function ($eventNode){
        //     $dateEvent = $eventNode->filter("[href]")->first();
        //     echo $dateEvent->text().'<br>';
        // });
        //dd($title->html());
        //dd($crawler);
        return view('welcome');
    }
}
