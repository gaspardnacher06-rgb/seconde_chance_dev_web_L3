<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'title',
        'summary',
        'publication_date',
        'page_count'
    ];

    protected function casts(): array
    {
        return [
            'publication_date' => 'date',
        ];
    }
    public function autor(){
        return $this->belongsToMany(Author::class);
    }
}
