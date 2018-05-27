<?php

namespace App\Models\Mappings;

use App\Models\Entities\Example;
use LaravelDoctrine\Fluent\EntityMapping;
use LaravelDoctrine\Fluent\Fluent;

class ExampleMapping extends EntityMapping
{
    public function mapFor()
    {
        return Example::class;
    }

    public function map(Fluent $builder)
    {
        $builder->increments('id');
        $builder->dateTime('date');
        $builder->string('example_name');
        $builder->text('example_data');
    }
}