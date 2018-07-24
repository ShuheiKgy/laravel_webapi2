<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restdata extends Model
{
    protected $guarded = ['id'];

    public function getData()
    {
        return $this->name . ':' . $this->message;
    }

}
