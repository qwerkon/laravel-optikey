<?php

namespace Riipandi\LaravelOptiKey\Traits;

trait UlidAsPrimaryKey
{
    public function getIncrementing()
    {
        return false;
    }

    public function getKeyType()
    {
        return 'string';
    }

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    // public function getRouteKeyName()
    // {
    //     return 'ulid';
    // }
}
