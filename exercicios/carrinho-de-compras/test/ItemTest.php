<?php  declare(strict_types=1);

use PHPUnit\Framework\TestCase;

use Carrinho\Item;

use Carrinho\Categoria;

final class ItemTest extends TestCase{

    public function testGetNome(){

        $item = new Item("Maça", 8.99, Categoria::Fruta);

        $this->assertEquals("Maça", $item->getNome());

    }

}

?>

