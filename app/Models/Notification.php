<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;

    protected $casts = [
        'id' => 'string',
        'data' => 'array',
    ];
    protected $appends = ['time'];

    public function getTimeAttribute(){
        return Carbon::parse($this->created_at)->diffForHumans();
    }

    public function formatResponse(){
        return [
            'id'=>$this->id,
            'data'=>$this->data,
            'time'=>$this->time,
            'is_read'=> !is_null($this->read_at)
        ];
    }
}
