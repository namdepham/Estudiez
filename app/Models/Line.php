<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Models\Subject;

class Line extends Model
{
    use HasFactory;
    protected $table = 'lines';
    /**
     * @var string[]
     */
    protected $fillable = [
        'phonenumber',
        'name',
    ];

    /**
     * @return BelongsToMany
     */
    public function subject (): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Subject::class,'line_subject', 'id_line', 'id_subject');
    }
}
