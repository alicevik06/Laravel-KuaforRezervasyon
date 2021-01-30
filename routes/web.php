    <?php

    use App\Http\Controllers\Admin\MessageController;
    use App\Http\Controllers\HomeController;
    use App\Http\Controllers\UserController;
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

    Route::get('/home2', function () {
        return view('welcome');
    });

    Route::redirect('/anasayfa', '/home')->name('anasayfa');

    Route::get('/', function () {
        return view('home.index');
    });


    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/aboutus', [HomeController::class, 'aboutus'])->name('aboutus');
    Route::get('/sss', [HomeController::class, 'sss'])->name('sss');
    Route::get('/iletisim', [HomeController::class, 'iletisim'])->name('iletisim');
    Route::post('/sendmessage', [HomeController::class, 'sendmessage'])->name('sendmessage');
    Route::get('/ekip', [HomeController::class, 'ekip'])->name('ekip');
    Route::get('/basindabiz', [HomeController::class, 'basindabiz'])->name('basindabiz');

    Route::get('/hizmet/{id}/{slug}', [HomeController::class, 'hizmet'])->name('hizmet');

    //Route::get('/test/{id}/{name}', [HomeController::class, 'test'])->where(['id'=>'[0-9]+','name'=>'[A-Za-z]+' ]);
    Route::get('/test/{id}/{name}', [HomeController::class, 'test'])->whereNumber('id')->whereAlpha('name')->name('test');

    //Admin
Route::middleware('auth')->prefix('admin')->group(function (){

    Route::get('/', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin_home')->middleware('auth');;

    Route::get('category', [App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('admin_category');
    Route::get('category/add', [App\Http\Controllers\Admin\CategoryController::class, 'add'])->name('admin_category_add');
    Route::post('category/create', [App\Http\Controllers\Admin\CategoryController::class, 'create'])->name('admin_category_create');
    Route::get('category/edit/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'edit'])->name('admin_category_edit');
    Route::post('category/update/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'update'])->name('admin_category_update');
    Route::get('category/delete/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'destroy'])->name('admin_category_delete');
    Route::get('category/show', [App\Http\Controllers\Admin\CategoryController::class, 'show'])->name('admin_category_show');

    #Hizmet
    Route::prefix('hizmet')->group(function (){

        Route::get('/', [App\Http\Controllers\Admin\HizmetController::class, 'index'])->name('admin_hizmetler');
        Route::get('create', [App\Http\Controllers\Admin\HizmetController::class, 'create'])->name('admin_hizmet_add');
        Route::post('store', [App\Http\Controllers\Admin\HizmetController::class, 'store'])->name('admin_hizmet_store');
        Route::get('edit/{id}', [App\Http\Controllers\Admin\HizmetController::class, 'edit'])->name('admin_hizmet_edit');
        Route::post('update/{id}', [App\Http\Controllers\Admin\HizmetController::class, 'update'])->name('admin_hizmet_update');
        Route::get('delete/{id}', [App\Http\Controllers\Admin\HizmetController::class, 'destroy'])->name('admin_hizmet_delete');
        Route::get('show', [App\Http\Controllers\Admin\HizmetController::class, 'show'])->name('admin_hizmet_show');
    });

    Route::prefix('messages')->group(function (){

        Route::get('/', [MessageController::class, 'index'])->name('admin_message');
        Route::get('edit/{id}', [MessageController::class, 'edit'])->name('admin_message_edit');
        Route::post('update/{id}', [MessageController::class, 'update'])->name('admin_message_update');
        Route::get('delete/{id}', [MessageController::class, 'destroy'])->name('admin_message_delete');
        Route::get('show', [MessageController::class, 'show'])->name('admin_message_show');
    });

    #Hizmet Image Gallery
    Route::prefix('image')->group(function (){

        Route::get('create/{hizmet_id}', [App\Http\Controllers\Admin\ImageController::class, 'create'])->name('admin_image_add');
        Route::post('store/{hizmet_id}', [App\Http\Controllers\Admin\ImageController::class, 'store'])->name('admin_image_store');
        Route::get('delete/{id}/{hizmet_id}', [App\Http\Controllers\Admin\ImageController::class, 'destroy'])->name('admin_image_delete');
        Route::get('show', [App\Http\Controllers\Admin\ImageController::class, 'show'])->name('admin_image_show');
    });

    #Site Setting


    Route::get('setting', [App\Http\Controllers\Admin\SettingController::class, 'index'])->name('admin_setting');
    Route::post('setting/update', [App\Http\Controllers\Admin\SettingController::class, 'update'])->name('admin_setting_update');



});

    Route::middleware('auth')->prefix('myaccount')->namespace('myaccount')->group(function (){

        Route::get('/', [UserController::class, 'index'])->name('myprofile');
    });


    Route::middleware('auth')->prefix('user')->namespace('user')->group(function (){

        Route::get('/profile', [UserController::class, 'index'])->name('userprofile');
    });



    Route::get('/admin/login', [HomeController::class, 'login'])->name('admin_login');
    Route::post('/admin/logincheck', [HomeController::class, 'logincheck'])->name('admin_logincheck');
    Route::get('/logout', [HomeController::class, 'logout'])->name('logout');


    Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
