<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Reply extends Model
{
    protected $guarded = [];

     /**
     * Relationshop between Question & Reply
     * 1 Question have many replies
     */

    public function question()
    {
        return $this->belongsTo(Question::model);
    }// end of Question Reply Relationship

    /**
     * Relationshop between User & Reply
     * 1 user have many replies
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }// end of User Reply Relationship

     /**
     * Relationshop between likes & Reply
     * 1 reply have many likes
     */
    public function like()
    {
        return $this->hasMany(Like::class);
    }// end of likes Reply Relationship
}// end of the model
