<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Subject extends Model
{
    use HasFactory  ;
    protected $table = 'subjects';

    /**
     * @var string[]
     */
    protected $fillable = [
        'name'
    ];

    /**
     * Relationship with resources.
     *
     * @return BelongsToMany
     */
    public function resources(): belongsToMany
    {
        return $this->belongsToMany(Resource::class, 'subject_resource');
    }

    /**
     * Relationship with classes
     * @return HasMany
     */
    public function classes(): hasMany
    {
        return $this->hasMany(ClassLopHoc::class, 'id_subject', 'id');
    }

    /**
     * @return BelongsToMany
     */
    public function line (): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Line::class,'line_subject', 'id_subject', 'id_line');
    }

    /**
     * @return BelongsToMany
     */
    public function users(): belongsToMany
    {
        return $this->belongsToMany(User::class,'user_subject', 'id_sub', 'id_user')->withPivot('name', 'id');
    }

    /**
     * @return BelongsTo
     */
    public function userSubject(): BelongsTo
    {
        return $this->belongsTo(UserSubject::class);
    }
}
