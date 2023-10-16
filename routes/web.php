<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/* routes/web.php*/

Route::get('/god', function () {
    return ('homeeeeeeeeeee');
});

Route::get('/geme', function () {
    return view('mypage.home');
});





Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

Route::get('/profile', function () {
    return view('pages.profile');
})->name('profile');

Route::post('/reg', function () {
    return ('thankyou');
});
//gemefolder
Route::get('logo', function () {
    return view('employees.logo');
})->name('logo');




Route::get('/employees/index', [EmployeeController::class, 'index'])->name('employees.index');
Route::get('/employees/create', [EmployeeController::class, 'create'])->name('employees.create');
Route::post('/store', [EmployeeController::class, 'store'])->name('employees.store');
Route::get('/employees/{employee}', [EmployeeController::class, 'show'])->name('employees.show');
Route::get('/employees/{employee}/edit', [EmployeeController::class, 'edit'])->name('employees.edit');
Route::put('/employees/{employee}', [EmployeeController::class, 'update'])->name('employees.update');
Route::delete('/employees/{employee}', [EmployeeController::class, 'destroy'])->name('employees.destroy');

Route::get('/employees/page', [EmployeeController::class, 'page'])->name('employees.page');
//admin
Route::get('/adminlte/dashboard', [EmployeeController::class, 'dashboard'])->name('admin.dashboard');
