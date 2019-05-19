<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use BrianFaust\Commentable\HasComments;

class Post extends Model
{
    use HasComments;
}
