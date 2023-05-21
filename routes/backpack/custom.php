<?php

use Illuminate\Support\Facades\Route;

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => array_merge(
        (array) config('backpack.base.web_middleware', 'web'),
        (array) config('backpack.base.middleware_key', 'admin')
    ),
    'namespace'  => 'App\Http\Controllers\Admin',
], function () { // custom admin routes
    Route::crud('user', 'UserCrudController');
    Route::crud('user-profile', 'UserProfileCrudController');
    Route::crud('signature', 'SignatureCrudController');
    Route::crud('profile-completion', 'ProfileCompletionCrudController');
    Route::crud('tag', 'TagCrudController');
    Route::crud('taggable', 'TaggableCrudController');
    Route::crud('template', 'TemplateCrudController');
    Route::crud('template-layout', 'TemplateLayoutCrudController');
    Route::crud('client-group', 'ClientGroupCrudController');
    Route::crud('client', 'ClientCrudController');
    Route::crud('email-layout', 'EmailLayoutCrudController');
}); // this should be the absolute last line of this file