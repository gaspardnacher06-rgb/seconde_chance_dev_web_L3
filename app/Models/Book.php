<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'title',
        'summary',
        'publication_date',
    ];

    protected function casts(): array
    {
        return [
            'publication_date' => 'date',
        ];
    }
}
