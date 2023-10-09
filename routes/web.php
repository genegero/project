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

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/profile', function () {
    return view('profile');
})->name('profile');
Route::post('/reg', function () {
    return ('thankyou');
});
//model,mgration and controller

/*Route::get('emp', [EmployeeController::class, 'index']);
Route::get('employe', [EmployeeController::class, 'create']);
Route::post('storee', [EmployeeController::class, 'store'])->name('employee.store');
Route::get('create', [EmployeeController::class, 'create'])->name('employees.create');
Route::get('index', [EmployeeController::class, 'index'])->name('employees.index');
Route::get('show', [EmployeeController::class, 'show']);
*/


Route::get('/employees/index', [EmployeeController::class, 'index'])->name('employees.index');
Route::get('/employees/create', [EmployeeController::class, 'create'])->name('employees.create');
Route::post('/store', [EmployeeController::class, 'store'])->name('employees.store');
Route::get('/employees/{employee}', [EmployeeController::class, 'show'])->name('employees.show');
Route::get('/employees/{employee}/edit', [EmployeeController::class, 'edit'])->name('employees.edit');
Route::put('/employees/{employee}', [EmployeeController::class, 'update'])->name('employees.update');
Route::delete('/employees/{employee}', [EmployeeController::class, 'destroy'])->name('employees.destroy');
