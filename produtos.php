<?php
require_once 'dao/DaoProduto.php';
$DaoProduto = DaoProduto::getInstance();
if (isset($_GET["marca"])) {
    $marca = $_GET["marca"];
    $dadosProdutos = $DaoProduto->getProdutoMarca($marca);
} else {
    $dadosProdutos = $DaoProduto->listar();
}
?>
<h2>Produtos</h2>
<?php
foreach ($dadosProdutos as $rowProduto) {
    ?>
    <div class="img">
        <a href="?pg=detalhes&id=<?=$rowProduto["id"]?>">
            <img src="http://127.0.0.1/crud/fotos/<?=$rowProduto["imagem"]?>" alt="<?=$rowProduto["descricao"]?>" width="300" height="200">
        </a>
        <div class="desc"><?=$rowProduto["descricao"]?></div>
        <div class="desc"><?=$rowProduto["marca"]?></div>
        <div class="desc">R$ <?=$rowProduto["preco"]?></div>
    </div>

    <?php
}
?>


<!-- 4 PRODUTO -->
<div class="promocao">
    <div class="img">
        <a href="#">
            <img src="img/t.jpg" width="300" height="200"/>
        </a>
        <div class="desc">
            Tablets <br>
            R$ 400,00
        </div>
    </div>
</div>
<!-- 5 PRODUTO -->
<div class="promocao">
    <div class="img">
        <a href="#">
            <img src="img/te.jpg" width="300" height="200"/>
        </a>
        <div class="desc">
            teclado-standard <br>
            R$ 39,90
        </div>
    </div>
</div>
<!-- 6 PRODUTO -->
<div class="promocao">
    <div class="img">
        <a href="#">
            <img src="img/mo.jpg" width="300" height="200"/>
        </a>
        <div class="desc">
            mouse <br>
            R$ 18,90

        </div>
    </div>
</div>
<!-- 7 PRODUTO -->
<div class="promocao">
    <div class="img">
        <a href="#">
            <img src="img/ro.jpg" width="300" height="200"/>
        </a>
        <div class="desc">
            roteador <br>
            R$ 70,90

        </div>
    </div>
</div>
<!-- 8 PRODUTO -->
<div class="promocao">
    <div class="img">
        <a href="#">
            <img src="img/pt.jpg" width="300" height="200"/>
        </a>
        <div class="desc">
            pasta termica <br>
            R$ 18,90

        </div>
    </div>
</div>
