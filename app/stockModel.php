<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class stockModel extends Model
{
    protected $table = 'compra_table';
    public $timestamps = false;
    use SoftDeletes;
}
