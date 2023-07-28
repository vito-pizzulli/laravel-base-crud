<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PageController as AdminPageController;

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

Route::get('/',[AdminPageController::class,'index'])->name('admin.shores.index');
Route::get('/create/shores', [AdminPageController::class, 'create'])->name('admin.shores.create');
Route::post('/', [AdminPageController::class, 'store'])->name('admin.shores.store');
Route::get('/edit/shores/{id}', [AdminPageController::class, 'edit'])->name('admin.shores.edit');
Route::put('/shores/{id}', [AdminPageController::class, 'update'])->name('admin.shores.update');
Route::get  ('admin/shores/{id}',        [AdminPageController::class, 'show'  ])->name('admin.shores.show');
Route::delete('/shores/{id}', [AdminPageController::class, 'destroy'])->name('admin.shores.destroy');