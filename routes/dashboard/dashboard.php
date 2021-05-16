<?php

use Illuminate\Support\Facades\Route;

// BACK END ROUTES


Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(), 'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){

        Route::prefix('dashboard')->name('dashboard.')->middleware(['auth'])->group(function () {
            // All Dashboard Home Route
            Route::get('/', 'HomeController@index');
            // All Users Routes
            Route::get('users/update_approve', 'UsersController@approve')->name('users.update_approve');
            // All Users Routes
            Route::resource('users', 'UsersController')->except('show');
            // All Generals Routes
            Route::resource('general', 'GeneralController');
            // All Skills Routes
            Route::resource('skills', 'SkillsController');
            // All Hobbies Routes
            Route::resource('hobbies', 'HobbiesController');
            // All Educations Routes
            Route::resource('educations', 'EducationsController');
            // All Experiences Routes
            Route::resource('experiences', 'ExperiencesController');

            // Show The User Profile Routes
            Route::get('user/{username}/profile', 'ProfileController@index')->name('user.profile');
            // Edit The User Profile Routes
            Route::get('user/{username}/profile/edit', 'ProfileController@edit')->name('user.profile.edit');
            // Edit The User Profile Routes
            Route::post('user/{username}/profile/update', 'ProfileController@update')->name('user.profile.update');
            // Show User Edit Page
        });
    });
