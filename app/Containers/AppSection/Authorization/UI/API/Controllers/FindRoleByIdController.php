<?php

namespace App\Containers\AppSection\Authorization\UI\API\Controllers;

use App\Containers\AppSection\Authorization\Actions\FindRoleByIdAction;
use App\Containers\AppSection\Authorization\UI\API\Requests\FindRoleByIdRequest;
use App\Containers\AppSection\Authorization\UI\API\Transformers\RoleAdminTransformer;
use Apiato\Core\Facades\Response;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

class FindRoleByIdController extends ApiController
{
    public function __invoke(FindRoleByIdRequest $request, FindRoleByIdAction $action): JsonResponse
    {
        $role = $action->run($request);

        return Response::createFrom($role)->transformWith(RoleAdminTransformer::class)->ok();
    }
}
