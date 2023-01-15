<?php

use \App\Models\Item;
use PHPUnit\Framework\TestCase;

final class ItemFactoryTest extends TestCase
{

    public function testClassConstructor()
    {

        $item = new Item();


        $this->assertEmpty($item->getName());
        $this->assertEmpty($item->getCategory());
        $this->assertSame(0.00, $item->getPrice());

        $item->setName('Drill Bit');
        $item->setCategory('Others');
        $item->setPrice(54.10);

        $this->assertSame('Drill Bit', $item->getName());
        $this->assertSame("Others", $item->getCategory());
        $this->assertEmpty($item->getDescription());
        $this->assertSame(54.10, $item->getPrice());
    }
    // Os testes serão colocados aqui
}
