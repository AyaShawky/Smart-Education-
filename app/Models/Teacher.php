<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    /**
     * Get all of the comments for the Teacher
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
   /**
    * Get all of the comments for the Teacher
    *
    * @return \Illuminate\Database\Eloquent\Relations\HasMany
    */
   public function courses()
   {
       return $this->hasMany(Course::class);
   }
}
