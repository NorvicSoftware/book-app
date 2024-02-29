<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Editorial extends Model
{
    use HasFactory;
    protected $table = 'editorials';

    protected  $fillable = ['name', 'address', 'phone'];
    protected $primaryKey = 'id';

    public function books(): HasMany{
        return $this->hasMany(Book::class);
    }


}
