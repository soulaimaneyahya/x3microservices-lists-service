<?php

namespace App\Http\Controllers;

use App\Models\Lists;
use Symfony\Component\HttpFoundation\JsonResponse;

final class GetListsController extends Controller
{
    public function __invoke(): JsonResponse
    {
        return $this->successResponse(
            Lists::query()->select(['id', 'name'])->get()
        );
    }
}
