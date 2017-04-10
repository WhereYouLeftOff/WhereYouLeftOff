<?php

namespace WhereYouLeftOff;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = ['title', 'user_id', 'edition_id', 'spoilers', 'chapter', 'content'];
}
