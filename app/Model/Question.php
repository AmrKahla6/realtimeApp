<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\User;
class Question extends Model
{

    protected $guarded = [];


    /**
     * Relationshop between Question & User
     * User can Create any question
     * 1 user many question
     */
     public function user()
     {
         return $this->belongsTo(User::class);
     }// end of User Question Relationship

     /**
     * Relationshop between Question & Reply
     * 1 Question have many replies
     */

     public function reply()
     {
         return $this->hasMany(Reply::class);
     }// end of Question Reply Relationship

      /**
     * Relationshop between Question & Category
     * 1 Category have many questions
     */

     public function category()
     {
         return $this->belongsTo(Category::class);
     }// end of Question category Relationship
}// end of Model
