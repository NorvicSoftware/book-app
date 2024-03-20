<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Author extends Model
{
    use HasFactory;
    protected $table = 'authors';

    protected $fillable = ['full_name', 'code', 'birth_date', 'country', 'profile_id'];
    protected $primaryKey = 'id';

    public function profile(): HasOne {
        return $this->hasOne(Profile::class);
    }

    public function books(): BelongsToMany {
        return $this->belongsToMany(Book::class);
    }

    public function users(): BelongsToMany {
        return $this->belongsToMany(User::class);
    }
}
