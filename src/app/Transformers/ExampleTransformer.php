<?php

namespace App\Transformers;

use App\Models\Entities\Example;
use League\Fractal\TransformerAbstract;


class ExampleTransformer extends TransformerAbstract
{
    public function transform(Example $example)
    {
        return $example->toArray();
    }
}