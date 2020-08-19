<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    protected $primaryKey = 'isbn';
    protected $fillable = ['isbn','title','author','publisher','description','cover','Category_id'];
}
