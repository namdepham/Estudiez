<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Resource extends Model
{
    use SoftDeletes;
    use HasFactory;

    /**
     * @var string[]
     */
    protected $fillable = [
        'type',
        'content'
    ];

    public function subjects(): belongsToMany
    {
        return $this->belongsToMany(Subject::class, 'subject_resource');
    }

}
