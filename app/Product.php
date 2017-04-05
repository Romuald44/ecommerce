<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'produit';

    public $timestamps = false;

    public function categorie()
    {
        return $this->hasOne('App\Categorie', 'id', 'categorieId');
    }
}
