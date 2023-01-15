<?php

use \App\Models\Item;
use PHPUnit\Framework\TestCase;
final class ItemFactoryTest extends TestCase{
    public function testClassConstructor(){

    $item = new Item();
    $this->assertSame('Drill Bits', $item->name);
    $this->assertSame("Others", $item->category);
    $this->assertSame("Bom para viagens longas", $item->description);
    $this->assertSame(54.10, $item->price);

}
// Os testes serão colocados aqui
}