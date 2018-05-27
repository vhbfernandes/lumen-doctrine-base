<?php

namespace App\Models\Entities;

class BaseEntity
{
    public function toArray()
    {
        return get_object_vars($this);
    }
}