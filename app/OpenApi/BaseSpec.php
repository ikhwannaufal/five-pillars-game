<?php

namespace App\OpenApi;

use OpenApi\Attributes as OA;

#[OA\OpenApi(
    info: new OA\Info(
        title: 'Story API',
        version: '1.0',
        description: 'Branching story node API for Deadline & Adhan'
    )
)]
class BaseSpec
{
}
