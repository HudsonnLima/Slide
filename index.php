<?php
/*
CONFIGURAR CAMINHO DA CONEXÃO COM O BANCO DE DADOS
require_once "conf.php";
*/

$produtos = "SELECT * FROM sua tabela";
$data = $pdo->prepare($produtos);
$data->execute();
$count = $data->rowCount();

?>
<!--DEIXA O FUNDO DA JANELA MODAL TRANSPARENTE-->
<style>
  .modal-content {
    -webkit-box-shadow: none;
    box-shadow: none;
    background: transparent;
    border: none;
  }
</style>


<div id="carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-wrap="false" >
<div id="slide" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-wrap="false">

<div class="carousel-indicators">
            <?php
            $controle = 0;
            while($controle < $count){
                $ativo = "";
                if($controle == 0){
                    $ativo = "active";
                }
                echo "<button type='button' data-bs-target='#carouselExampleIndicators' data-bs-slide-to='$controle' class='$ativo'
                aria-current='true' aria-label='Slide $controle'></button>";
                $controle++;
            }
            ?>
        </div>

  <div class="carousel-inner">

  <?php

    foreach ($data as $index => $values) {
?>

    <div class="carousel-item <?php echo $index === 0 ? 'active' : ''; ?>"   class="d-block w-100" width="1200" height="600" alt="">
        <img src="caminho/da/imagem<?= $values['imagem']; ?>" class="d-block w-100" alt="...">
    </div>
<?php 
    }
?>
    
  </div>


  <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>


</div>
