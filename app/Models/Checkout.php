<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Checkout extends Model
{
    use HasFactory;
    protected $table = 'checkouts';
    protected $primaryKey = 'id';
    public $incrementing = true;


    public function book(){
        return $this -> belongsTo('App\Models\Book', 'ref_book_id');
    }
}
