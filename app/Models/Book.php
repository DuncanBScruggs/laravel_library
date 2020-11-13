<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $table = 'books';
    protected $primaryKey = 'book_id';
    public $incrementing = true;
    public $timestamps = true;


    public function checkouts(){
        return $this -> hasMany('App\Models\Checkout', 'ref_book_id', 'book_id');
    }
}

