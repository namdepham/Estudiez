<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ClassLopHoc extends Model
{
    /**
     * @var bool
     */
    public $timestamps = false;

    use HasFactory;

    /**
     * @var string $table
     */
    protected $table = "classes";

    /**
     * @var array[] $fillable
     */
    protected $fillable = [
        'id_subject',
        'started_at',
        'ended_at'
    ];

    public function subject(): belongsTo
    {
        return $this->belongsTo(Subject::class);
    }

}
