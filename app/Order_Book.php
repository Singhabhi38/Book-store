<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order_Book extends Model
{
    protected $table = 'order_books';
    protected $fillable = array('order_id','book_id','amount','price');
}
