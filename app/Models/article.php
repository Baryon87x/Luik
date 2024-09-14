<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class article extends Model
{
    use HasFactory;

    protected $fillable = [
        'libelle',
        'description',
        'quantité',
        'prix'
    ];


    public function imageArticle(): HasMany
    {
        return $this->hasMany(imageArticle::class);
    }
}
