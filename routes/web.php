<?php

use App\Models\Department;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/home', function() {
    $deparments = Department::all();
   return view('welcome', compact('deparments'));
});
//
//Route::get('/', function() {
//    $crawler = Goutte::request('GET',
//        'https://www.booking.com/searchresults.html?label=gen173nr-1FCAEoggI46AdIM1gEaPgBiAEBmAExuAEZyAEM2AEB6AEB-AECiAIBqAIDuALM88qIBsACAdICJDA4ZDUxOTlhLWQ0ZWUtNGRkZi1iYWY1LTUzYWRkNTg1YzYyMNgCBeACAQ;sid=d26cb3e040516293245b39ee7fd73f42;dest_id=20117718;dest_type=city;highlighted_hotels=1065070&'
//    );
////    $link = $crawler->filter('.bui-card__image')->link();
//
//    $images =  $crawler->filter('.sr_item_photo_link')->each(function ($node) {
//        return $node->filter('img')->attr('src');
//
//    });
//
//    $names = $crawler->filter('.sr-hotel__name')->each(function ($node)  {
//       return $node->text();
//    });
//
//    $ratings = $crawler->filter('.bui-review-score__badge')->each(function ($node)  {
//       return $node->text();
//    });
//
//
//    foreach ($images as $key => $image)
//    {
//        foreach ($names as $nameKey=>$name)
//
//        {
//            foreach ($ratings as $ratingKey=>$rating)
//            {
//                if ($key == $nameKey && $key == $ratingKey)
//                {
//                    Department::create([
//                        'name'=>$name,
//                        'image_url'=>$image,
//                        'rating'=>$rating,
//                    ]);
//                }
//            }
//        }
//
//    }
//
//
//
//    dd('done');
////    $departments = Department::all();
////
////    foreach ($names as $name)
////    {
////        $departments->name = $name;
////        $departments->save();
////    }
//
//
//    dd('done');
////   $images =  $crawler->filter('.sr_item_photo_link')->each(function ($node) {
////        return $node->filter('img')->attr('src');
////
////    });
////    dd($images);
//
////
////    dd($link);
////    return view('welcome');
//});
