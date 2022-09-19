<?php

namespace App\Models\Share;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function mediable(){
        return $this->morphTo();
    }
}
