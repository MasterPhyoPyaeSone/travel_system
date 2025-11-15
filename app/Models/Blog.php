<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = 
    [
    'title',
    'img_1',
    'img_2',
    'user_id',
    'body_1',
    'body_2'];

    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class);
    }
}
