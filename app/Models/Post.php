<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'genre_id',
        'crime_fact',
        'crime_name',
        'crime_date',
        'crime_time',
        'crime_place',
        'suspect_honseki',
        'suspect_address',
        'suspect_work',
        'suspect_name',
        'suspect_birthday',
        'victim_address',
        'victim_work',
        'victim_name',
        'victim_birthday'
    ];

    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }
}
