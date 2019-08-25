<?php

namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    public function user()
    {
        $this->belongsTo(User::class);
    }

    public function replies()
    {
        $this->hasMany(Reply::class);
    }

    public function category(){
return $this->belongsTo(Category::class);
    }
}
