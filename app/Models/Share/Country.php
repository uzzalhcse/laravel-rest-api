<?php

namespace App\Models\Share;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;
    protected $appends = ['latLng'];

    public function getLatLngAttribute(){
        return [$this->latitude, $this->longitude];
    }
}
