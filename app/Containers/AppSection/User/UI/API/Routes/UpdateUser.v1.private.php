<?php

/**
 * @apiGroup           User
 * @apiName            updateUser
 * @api                {patch} /v1/users/:id Update User
 *
 * @apiVersion         1.0.0
 * @apiPermission      Authenticated User
 *
 * @apiParam           {String}  [password]
 * @apiParam           {String}  [name]
 * @apiParam           {String="male,female,unspecified"}  [gender]
 * @apiParam           {Date}  [birth] format: Y-m-d / e.g. 2015-10-15
 *
 * @apiUse             UserSuccessSingleResponse
 */

use App\Containers\AppSection\User\UI\API\Controllers\UpdateUserController;
use Illuminate\Support\Facades\Route;

Route::patch('users/{id}', [UpdateUserController::class, 'updateUser'])
    ->name('api_user_update_user')
    ->middleware(['auth:api']);
