<?php  declare(strict_types=1);

use PHPUnit\Framework\TestCase;

use CarrinhoDeCompras\Item;

final class ItemTest extends TestCase{

    public function testPassandoParametrosCorretosParaCriacaoDaClasse(){

        $item = new Item();

        $this->expectException(InvalidArgumentException::class);

    }

}

?>

