<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Product extends Model
{
    protected $table = 'products'; // we deal with 'products' table

    public $incrementing = false; // because we use a non-incrementing primary key
    public $timestamps = true; // because we have two fields 'created_at' and 'updated_at'

    protected $fillable = ['*'];
    protected $guarded = []; // all fields are writable


}
