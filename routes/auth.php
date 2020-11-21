<?php
/*
 * Stride Authentication Backend
 *
 * @copyright	Copyright (c) 2020 Martin Becker (https://martin-becker.ovh)
 * @license		GNU AGPLv3 (GNU Affero General Public License v3.0)
 * @link		https://stride.thiritin.com
 */

use App\Http\Controllers\Auth\ConsentController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;

/**
 * Prefix: /auth/
 * Namespace: Auth
 * Name: Auth
 */

Route::post('login', LoginController::class);
Route::post('consent', ConsentController::class);
