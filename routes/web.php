<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/le-groupe', [PageController::class, 'groupe'])->name('groupe');
Route::get('/poles-activites', [PageController::class, 'poles'])->name('poles');
Route::get('/poles-activites/nutrition-animale', [PageController::class, 'poleNutrition'])->name('poles.nutrition');
Route::get('/poles-activites/transport-logistique', [PageController::class, 'poleTransport'])->name('poles.transport');
Route::get('/poles-activites/vente-vehicules', [PageController::class, 'poleVehicules'])->name('poles.vehicules');
Route::get('/poles-activites/hydrocarbures', [PageController::class, 'poleHydrocarbures'])->name('poles.hydrocarbures');
Route::get('/carrieres', [PageController::class, 'carrieres'])->name('carrieres');
Route::get('/blog', [PageController::class, 'blog'])->name('blog');
Route::get('/blog/{slug}', [PageController::class, 'blogShow'])->name('blog.show');
Route::get('/partenaires', [PageController::class, 'partenaires'])->name('partenaires');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

Route::post('/contact', [FormController::class, 'submitContact'])->name('contact.submit');
Route::post('/candidature', [FormController::class, 'submitApplication'])->name('candidature.submit');
Route::post('/partenariat', [FormController::class, 'submitPartnership'])->name('partenariat.submit');
