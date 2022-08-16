<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SubjectResource extends Model
{
    use HasFactory;
    protected $table = 'subject_resource';
    public function subject(): belongsTo
    {
        return $this->belongsTo(Subject::class);
    }

    public function resource():belongsTo
    {
        return $this->belongsTo(Resource::class);
    }
}
