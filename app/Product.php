<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $primaryKey = 'id';
    // THêm vào danh sách loại trừ khi tương tác với CSDL
    protected $guarded = ['_token', 'submit'];
}
