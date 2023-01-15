<?php

use \App\Models\Item;
use PHPUnit\Framework\TestCase;
final class ItemFactoryTest extends TestCase{
    public function testClassConstructor(){
    $item = Item::create([
        'name' => 'Drill Bit',
        'category' => 'Others',
        'price' => 54.52,
    ]);
    $this->assertSame('Drill Bit', $item->name);
    $this->assertSame("Others", $item->category);
    $this->assertEmpty($item->description);
    $this->assertSame(54.10, $item->price);

}
// Os testes serão colocados aqui
}