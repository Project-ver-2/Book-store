<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCommentImages extends Model
{
    use HasFactory;
    protected $table = 'product_comment_images';
    protected $primaryKey = 'id';
    protected $guarded = [];

}
