<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;

Route::get('konnektive-crm-doc', function() {
    return Redirect::to('https://konnektive.atlassian.net/wiki/spaces/KCKB/overview?homepageId=132972690');
});
