<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable=[];
    use HasFactory;

/**
 * Get the user that owns the Course
 *
 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
 */
public function teacher()
{
    return $this->belongsTo(Teacher::class);
}
/**
 * The roles that belong to the Course
 *
 * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
 */
public function students()
{
    return $this->belongsToMany(Student::class);
}

}
