<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class UserSubject extends Model
{
    protected $table = "user_subject";

    protected $fillable = [
        'id_sub',
        'id_user'
    ];
    use HasFactory;

    public function users(): belongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function subjects():belongsTo
    {
        return $this->belongsTo(Subject::class);
    }
}
