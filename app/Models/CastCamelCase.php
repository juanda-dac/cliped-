<?php

namespace App\Models;
use Illuminate\Support\Str;

trait CastCamelCase
{
    public function getAttribute($key)
    {
        $key = Str::snake($key);
        return parent::getAttribute($key);
    }

    public function setAttribute($key, $value)
    {
        $key = Str::snake($key);
        return parent::setAttribute($key, $value);
    }

    public function attributesToArray()
    {
        $attributes = parent::attributesToArray();
        return collect($attributes)
            ->mapWithKeys(function ($value, $key){
                return [Str::camel($key) => $value];
            })
            ->toArray();
    }
}
