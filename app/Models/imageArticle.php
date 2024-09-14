<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class imageArticle extends Model
{
    use HasFactory; 

    protected $fillable = [
        'url'
    ];


    public function article(): BelongsTo
    {
        return $this->belongsTo(article::class);
    }
}
