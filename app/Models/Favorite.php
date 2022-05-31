<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Favorite extends Model
{
    use HasFactory;

    public function user(){
        return $this-belongsToMany(User::class);
    }
};
