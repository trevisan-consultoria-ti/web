<?php
    require_once('../../functions.php');
    require_once('functions.php');

    index();

    const STR_ENTITIES = 'Produtos';
    const STR_ENTITY ='Produto';
?>

    <?php include(HEADER_TEMPLATE); ?>

    <header>
        <div class="row">
            <div class="col-sm-6">
                <h2><?= STR_ENTITIES ?></h2>
            </div>
            <div class="col-sm-6 text-right h2">
                <a class="btn btn-outline-primary" href="add.php"><i class="fas fa-plus"></i> Novo <?= STR_ENTITY ?></a>
                <a class="btn btn-outline-default" href="index.php"><i class="fas fa-sync-alt"></i> Atualizar</a>
            </div>
        </div>
    </header>

    <?php if (!empty($_SESSION['message'])) : ?>
        <div class="alert alert-<?php echo $_SESSION['type']; ?> alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <?php echo $_SESSION['message']; ?>        
        </div>
        <?php clear_messages(); ?>
    <?php endif; ?>

    <hr>

    <table class="table table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>PDV</th>
            <th>Descrição</th>
            <th>Estoque</th>
            <th>Opções</th>
        </tr>
    </thead>
    <tbody>
    <?php if ($products) : ?>
    <?php foreach ($products as $product) : ?>
        <tr>
            <td><?= $product['id']; ?></td>
            <td><?= $product['keyid']; ?></td>
            <td><?= $product['descricao']; ?></td>
            <td><?= numberToStr($product['estoque'], 0); ?></td>
            <td class="actions text-right">                
                <a href="edit.php?id=<?php echo $product['id']; ?>" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i> Editar</a>
                <a href="#" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete-modal" data-customer="<?php echo $product['id']; ?>">
                    <i class="fas fa-trash"></i> Excluir
                </a>
            </td>
        </tr>
    <?php endforeach; ?>
    <?php else : ?>
        <tr>
            <td colspan="6">Nenhum registro encontrado.</td>
        </tr>
    <?php endif; ?>
    </tbody>
    </table>

    <?php include('modal.php'); ?>

    <?php include(FOOTER_TEMPLATE); ?>