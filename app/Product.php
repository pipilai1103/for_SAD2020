<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  /**
     * 與模型關聯的資料表。
     *
     * @var string
     */
    protected $table = 'my_products';

}
