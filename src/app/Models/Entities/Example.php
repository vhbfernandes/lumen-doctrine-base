<?php

namespace App\Models\Entities;

use Carbon\Carbon;

class Example extends BaseEntity
{
    private $id;

    private $date;

    private $example_name;

    private $example_data;

    public function __construct(string $name, string $data)
    {
        $this->date = Carbon::now();
        $this->example_name = $name;
        $this->example_data = $data;
    }
}