<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    protected $guarded = [];
    protected $dates   = ['date'];

    public function getDollarsAttribute()
    {
        return (int) $this->price;
    }

    public function getSentsAttribute()
    {
        return ($this->price - $this->dollars) * 100;
    }
}
