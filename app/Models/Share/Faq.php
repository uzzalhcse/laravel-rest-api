<?php

namespace App\Models\Share;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    use HasFactory;

    public function formatResponse(): array
    {
        return [
            'id'=>$this->id,
            'title'=>$this->title,
            'is_featured'=>$this->is_featured,
            'description'=>$this->description,
        ];
    }
}
