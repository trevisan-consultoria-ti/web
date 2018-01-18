<?php 
  require_once('../../functions.php');
  require_once('functions.php'); 
  edit();

  const STR_ENTITIES = 'Produtos';
  const STR_ENTITY ='Produto';
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Atualizar <?= STR_ENTITY ?></h2>

<form action="edit.php?id=<?php echo $product['id']; ?>" method="post">
  <hr />
  <div class="row">
    <div class="form-group col-2">
      <label for="name">PDV</label>
      <input type="text" class="form-control" name="product['keyid']" value="<?php echo $product['keyid']; ?>">
    </div>

    <div class="form-group col-8">
      <label for="campo2">Descrição</label>
      <input type="text" class="form-control" name="product['descricao']" value="<?php echo $product['descricao']; ?>">
    </div>

    <div class="form-group col-2">
      <label for="campo3">Estoque</label>
      <input type="text" class="form-control" name="product['estoque']" value="<?php echo numberToStr($product['estoque'], 0); ?>">
    </div>
  </div>  
  <div id="actions" class="row">
    <div class="col-md-12">
      <button type="submit" class="btn btn-outline-primary">Salvar</button>
      <a href="index.php" class="btn btn-default">Cancelar</a>
    </div>
  </div>
</form>

<?php include(FOOTER_TEMPLATE); ?>