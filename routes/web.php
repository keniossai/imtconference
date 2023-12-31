<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EnrolController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\NbaDashboardController;
use App\Http\Controllers\RegistrationDownloadController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\TransactionPayController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\VerificationController;
use App\Http\Controllers\PaystackWebhookController;
use App\Http\Controllers\SpeakerController;
use App\Http\Controllers\CardController;
use App\Http\Controllers\PostsController;
use App\Models\Transaction;
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
// Route::get('/test', function(){
//     return view('test');
// });


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/press-release', [BlogController::class, 'index'])->name('blog');
Route::get('/press-release/{id}/show', [BlogController::class, 'single_post'])->name('post.show');

Route::view('/cards/create',    'cards.create')->name('cards.create');
Route::post('/generate',        [CardController::class, 'generate'])->name('generate');
Route::view('/why_attend',    'concept_note')->name('concept-note');
Route::view('/about',    'about')->name('about');
Route::view('/contact-us',    'contact-us')->name('contact-us');
Route::view('/privacy-policy',  'privacy_policy')->name('privacy-policy');
Route::view('/exhibition',  'exhibition')->name('home.exhibition');

Route::middleware('guest')->group(function () {
    Route::view('/login',                   'auth.login')->name('login');
    Route::view('/reset-password/{token}',  'auth.reset')->name('password.reset');
});

Route::get('/register',         [AuthController::class, 'register'])->name('register');
Route::view('/register/group',  'auth.register.group')->name('register.group');

Route::resource('speakers', SpeakerController::class)->only(['index']);
Route::get('/speakers/{id}/show', [SpeakerController::class, 'show']);

Route::middleware('auth')->group(function () {
    Route::get('/email/verify/{id}/{hash}', [VerificationController::class, 'verify'])
        ->middleware('signed')->name('verification.verify');

    Route::prefix('/users/{user}')->name('users.')->group(function () {
        Route::get('/',             [UserController::class, 'show'])->name('show');

        Route::middleware(['unpaid', 'verified-to-pay'])->group(function () {
            Route::get('/payments', [PaymentController::class, 'show'])->name('payments.show');
            Route::get('/group',    [GroupController::class, 'index'])->name('group.index');
        });
    });

    Route::get('/search',                       [SearchController::class, 'index'])->name('search.index');
    Route::get('/enrols/{enrol}',               [EnrolController::class, 'show'])->name('enrols.show');
    Route::get('/transactions/{transaction}',   [TransactionController::class, 'show'])->name('transactions.show');
    Route::get('/transactions/{transaction}/pay', TransactionPayController::class)->name('transactions.pay');
    Route::get('/dashboards',        [NbaDashboardController::class, 'index'])->name('dashboard.nba');

    Route::get('/dashboard/posts', [PostsController::class, 'index'])->name('posts.index');
    Route::post('/dashboard/posts', [PostsController::class, 'store'])->name('posts.store');
    Route::get('/dashboard/posts{id}', [PostsController::class, 'edit']);
    Route::put('/dashboard/posts/{id}/update', [PostsController::class, 'update']);
    Route::delete('/dashboard/posts/{id}/delete', [PostsController::class, 'destroy']);

    Route::middleware('admin')->group(function () {
        Route::get('/dashboard',        [DashboardController::class, 'index'])->name('dashboard');
        Route::get('/dashboard/speakers',        [DashboardController::class, 'speakers'])->name('dashboard.speakers');
        Route::post('/dashboard/speakers',        [DashboardController::class, 'store'])->name('speaker.store');
        Route::get('/dashboard/speaker/{id}',        [DashboardController::class, 'edit']);
        Route::put('/dashboard/speakers/{id}/update',        [DashboardController::class, 'update']);
        Route::delete('/dashboard/speakers/{id}/delete',        [DashboardController::class, 'destroy']);
        Route::get('/payments',         [PaymentController::class, 'index'])->name('payments.index');
        Route::get('/registration-download', RegistrationDownloadController::class)->name('registration-download');

        Route::get('/transactions/{transaction}/approve', fn (Transaction $transaction) => $transaction->markAsPaid());

        /**
         * @deprecated
         */
        Route::get('/shoot-newsletter', function () {
            $notifiables = \App\Models\User::whereDoesntHave('payments', fn ($query) => $query->paid())->get();

            \Illuminate\Support\Facades\Notification::send($notifiables, new \App\Notifications\Newsletter);
        });
    });

    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});


Route::post('/webhook/paystack',    PaystackWebhookController::class);
