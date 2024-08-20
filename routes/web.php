<?php           

// use App\Http\Controllers\TodoListController;
use App\Http\Controllers\ContactController;
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

Route::get('/clear',function(){
    //\Artisan::call('key:generate');
    \Artisan::call('route:clear');
    \Artisan::call('cache:clear');
});

Route::get('/', function () {
    return view('home');      
})->name('home');
 
Route::get('/about', function () {
    return view('about');      
})->name('about');

// Route::get('/contact', function () {
//     return view('contact');      
// })->name('contact');
                 
Route::get('/book-appointment', function () {
    return view('book-appointment');      
})->name('book-appointment');

//Services         
Route::group(['prefix' => "services"], function () {

    Route::get('/anxiety-disorder', function () {
        return view('services.anxiety-disorder'); 
    })->name('anxiety-disorder');   

    Route::get('/depression-psychosis', function () {
        return view('services.depression-psychosis'); 
    })->name('depression-psychosis'); 

    Route::get('/stress-management', function () {
        return view('services.stress-management'); 
    })->name('stress-management'); 

    Route::get('/insomnia', function () {
        return view('services.insomnia'); 
    })->name('insomnia'); 

    Route::get('/childhood-problems', function () {
        return view('services.childhood-problems'); 
    })->name('childhood-problems'); 

    Route::get('/sexual-disorders', function () {
        return view('services.sexual-disorders'); 
    })->name('sexual-disorders'); 

    Route::get('/deaddiction', function () {
        return view('services.deaddiction'); 
    })->name('deaddiction'); 

    Route::get('/counselling', function () {
        return view('services.counselling'); 
    })->name('counselling'); 

    Route::get('/old-age-problems', function () {
        return view('services.old-age-problems'); 
    })->name('old-age-problems'); 

});       

//Gallery      
Route::group(['prefix' => "gallery"], function () {

    Route::get('/videos', function () {
        return view('gallery.videos'); 
    })->name('videos');             
    Route::get('/media', function () {
        return view('gallery.media'); 
    })->name('media');  
    Route::get('/images', function () {
        return view('gallery.images'); 
    })->name('images'); 

});      
  
// Route::get('/saveItemRoute', [TodoListController::class, 'saveItem'])->name('saveItem');
// Route::post('/contact/save', [ContactController::class, 'sendEmail'])->name('saveContact');


//--------


Route::get('/book-appointment',[ContactController::class, 'bookAppointment'])->name('book-appointment');
Route::get('/contact',[ContactController::class, 'viewForm'])->name('contact');
Route::post('/contact/save', [ContactController::class, 'sendEmail'])->name('saveContact');