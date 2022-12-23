<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Item>
 */
class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $min = 0;
        $max = 150;
        $decimals = 2;

        $divisor = pow(10, $decimals);
        $price = mt_rand($min, $max * $divisor) / $divisor;

        $vendor = random_int(0, 200);
        $cat = Arr::random(array(
            'Art', 'Collectibles', 'Electronics', 'Fashion',
            'Home and Garden', 'Music', 'Office Supplies', 'Sports', 'Others'
        ));

        switch ($cat) {
            case 'Art':
                $name = Arr::random(array('Painting', 'Sculpture', 'Paint', 'Brushes'));
                break;
            case 'Collectibles':
                $name = Arr::random(array('FunkoPop', 'Comics', 'Action Figure', 'Memorabilia'));
                break;
            case 'Electronics':
                $name = Arr::random(array('Game Console', 'Computer', 'SmartPhone', 'Headphones'));
                break;
            case 'Fashion':
                $name = Arr::random(array('Shirt', 'Pants', 'Socks', 'Sneakers'));
                break;
            case 'Home and Garden':
                $name = Arr::random(array('Furniture', 'Rug', 'Lamp', 'Kitchen Utensils'));
                break;
            case 'Music':
                $name = Arr::random(array('Instrument', 'CD', 'Instrument Acessory', 'Amplifier'));
                break;
            case 'Office Supplies':
                $name = Arr::random(array('Stapler', 'Ruler', 'Pencil', 'Scissors'));
                break;
            case 'Sports':
                $name = Arr::random(array('Golf Club', 'Tennis Racket', 'Bicycle', 'Fitness Watch'));
                break;
            case 'Others':
                $name = Arr::random(array('Gift Card', 'Hair Curler', 'Drill Bits', 'Sunglasses'));
                break;
        }
        
        return [
            'name' => $name,
            'id' => $vendor,
            'category' => $cat,
            'price' => $price,
        ];
    }
}
