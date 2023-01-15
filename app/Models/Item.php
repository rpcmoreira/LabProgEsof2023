<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    
    private $name;
    private $cat;
    private $desc;
    private $price = 0.00;

    protected $fillable = [
        'id',
        'item_id',
        'name',
        'category',
        'price',
    ];



    public function getName() : string
    {
        return $this->name;
    }

    public function getCategory() : string
    {
        return $this->cat;
    }

    public function getDescription() : string
    {
        return $this->desc;
    }

    public function getPrice() : float
    {
        return $this->price;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }
    public function setCategory(string $cat)
    {
        $this->cat = $cat;
    }
    public function setPrice(float $price)
    {
        $this->price = $price;
    }
}
