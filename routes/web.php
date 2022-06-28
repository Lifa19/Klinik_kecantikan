<?php

use Illuminate\Support\Facades\{
    Route,
    Auth
};
use App\Http\Controllers\{
    HomeController,
    PermissionController,
    AcademyController,
    ProductController,
    TreatmentController,
    EmployeeController,
    CustomerController,
    PlasmaController,
    MemberController,
    PrivateClassController,
    HifuController,
    SeminarController,
    SulamabController,
    WomenController,
    TubuhController,
    WajahController,
    WhiteningController,
    WorkshopController,
    BookingController,
    BasketController,
    ProfileController,
    DiscountController,
};


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application/ These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group/ Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');

});
Route::get('client/wajah', [WajahController::class, 'wajah'])->name('wajah');
Route::get('client/tubuh', [TubuhController::class, 'tubuh'])->name('tubuh');
Route::get('client/women', [WomenController::class, 'women'])->name('women');
Route::get('client/hifu', [HifuController::class, 'hifu'])->name('hifu');
Route::get('client/sulam', [SulamabController::class, 'sulam'])->name('sulam');
Route::get('client/plasma', [plasmaController::class, 'plasma'])->name('plasma');
Route::get('client/whitening', [WhiteningController::class, 'whitening'])->name('whitening');
Route::get('client/seminar', [SeminarController::class, 'seminar'])->name('seminar');
Route::get('client/workshop', [WorkshopController::class, 'workshop'])->name('workshop');
Route::get('client/privateclass', [PrivateClassController::class, 'privateclass'])->name('privateclass');
Route::get('client/product', [ProductController::class, 'product'])->name('product');
Route::get('client/academy', [WorkshopController::class, 'academy'])->name('academy');
Route::get('client/treatment', [SulamabController::class, 'treatment'])->name('treatment');

Auth::routes();

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin', [HomeController::class, 'admin'])->name('adminHome');
    Route::resource('permissions', PermissionController::class);
    Route::resource('academy', AcademyController::class);
    Route::resource('product', ProductController::class);
    Route::resource('treatment', TreatmentController::class);
    Route::resource('employee', EmployeeController::class);
    Route::resource('customer', CustomerController::class);
    Route::resource('member', MemberController::class);
    Route::resource('privateclass', PrivateClassController::class);
    Route::resource('hifu', HifuController::class);
    Route::resource('plasma', PlasmaController::class);
    Route::resource('seminar', SeminarController::class);
    Route::resource('sulamab', SulamabController::class);
    Route::resource('women', WomenController::class);
    Route::resource('tubuh', TubuhController::class);
    Route::resource('wajah', WajahController::class);
    Route::resource('whitening', WhiteningController::class);
    Route::resource('workshop', WorkshopController::class);
    Route::resource('/profile', ProfileController::class);
    Route::resource('/discount', DiscountController::class);
});

Route::get('/user', [HomeController::class, 'pelanggan'])->name('userHome');
Route::get('pelanggan/editprofile', [ProfileController::class, 'editprofile'])->name('editprofile')->withoutMiddleware('userprofile');
Route::middleware(['auth', 'role:pelanggan','userprofile'])->group(function () {
    Route::get('pelanggan/wajah', [WajahController::class, 'wajahh'])->name('wajahh');
    Route::get('pelanggan/tubuh', [TubuhController::class, 'tubuhh'])->name('tubuhh');
    Route::get('pelanggan/women', [WomenController::class, 'womenn'])->name('womenn');
    Route::get('pelanggan/hifu', [HifuController::class, 'hifuu'])->name('hifuu');
    Route::get('pelanggan/sulam', [SulamabController::class, 'sulamm'])->name('sulamm');
    Route::get('pelanggan/plasma', [PlasmaController::class, 'plasmaa'])->name('plasmaa');
    Route::get('pelanggan/whitening', [WhiteningController::class, 'whiteningg'])->name('whiteningg');
    // Route::get('pelanggan/product', [ProductController::class, 'productt'])->name('productt');
    Route::get('pelanggan/privateclass', [PrivateclassController::class, 'privateclasss'])->name('privateclasss');
    Route::get('pelanggan/workshop', [WorkshopController::class, 'workshopp'])->name('workshopp');
    Route::get('pelanggan/seminar', [SeminarController::class, 'seminarr'])->name('seminarr');
    Route::get('pelanggan/detail', [BookingController::class, 'detail'])->name('detail');
    Route::resource('basket', BasketController::class);
    Route::get('pelanggan/profile', [ProfileController::class, 'profilePelanggan'])->name('profilePelanggan');
    Route::get('pelanggan/treatment', [TreatmentController::class, 'treatmentt'])->name('treatmentt');
    Route::get('pelanggan/academy', [AcademyController::class, 'academyy'])->name('academyy');
    Route::get('pelanggan/product', [ProductController::class, 'producttt'])->name('producttt');
    Route::resource('booking', BookingController::class, ['except' => ['store']]);
    Route::post('booking/{id}', [BookingController::class, 'store'])->name('booking.store');
    Route::get('admin/member/index', [MemberController::class, 'store'])->name('store');



});

Route::middleware(['auth', 'role:karyawan'])->group(function () {
    Route::get('/karyawan', [HomeController::class, 'karyawan'])->name('karyawanHome');
});



