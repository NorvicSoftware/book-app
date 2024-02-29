<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Book extends Model
{
    use HasFactory;
    protected $table = 'books';

    protected  $fillable = ['title', 'subtitle', 'numberPage', 'language', 'description', 'status', 'gender_id', 'editorial_id', 'price'];
    protected $primaryKey = 'id';

    public function gender(): BelongsTo {
        return $this->belongsTo(Gender::class);
    }

    public function editorial(): BelongsTo {
        return $this->belongsTo(Editorial::class);
    }

    public function authors(): BelongsToMany {
        return $this->belongsToMany(Author::class);
    }

    public function users(): BelongsToMany {
        return $this->belongsToMany(User::class);
    }

}
