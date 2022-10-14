<?php

namespace App\Containers\AppSection\Authorization\UI\API\Controllers;

use App\Containers\AppSection\Authorization\Actions\AttachPermissionsToUserAction;
use App\Containers\AppSection\Authorization\UI\API\Requests\AttachPermissionsToUserRequest;
use App\Containers\AppSection\User\UI\API\Transformers\UserTransformer;
use App\Ship\Parents\Controllers\ApiController;

class AttachPermissionsToUserController extends ApiController
{
    /**
     * @param AttachPermissionsToUserRequest $request
     * @return \App\Containers\AppSection\User\Models\User
     */
    public function attachPermissionsToUser(AttachPermissionsToUserRequest $request)
    {
        $user = app(AttachPermissionsToUserAction::class)->run($request);
        return $this->transform($user, UserTransformer::class, ['permissions']);
    }

}
