<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    public $timestamps = false;

    protected $fillable = [
        'cat_name',
        'disp_position',
    ];

    public function forums()
    {
        return $this->hasMany(Forum::class, 'cat_id', 'id');
    }
}
