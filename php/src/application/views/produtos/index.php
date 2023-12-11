<?php $this->load->view('base', ['title' => 'Lista de Usuários']); $this->load->view('nav'); ?>
<div class="container mt-5">
    <h1 class="mb-4">Lista de Produtos</h1>
    <div class="row">
        <?php if(isset($produtos) && is_array($produtos)): ?>
            <?php foreach ($produtos as $produto): ?>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="https://png.pngtree.com/png-vector/20231016/ourlarge/pngtree-engine-car-turbo-png-image_10187989.png" class="card-img-top" alt="Imagem do Produto">
                        <div class="card-body">
                            <h1 class="card-title"><?= $produto->name; ?></h1>
                            <p class="card-text">Preço: R$ <?= number_format($produto->price, 2, ',', '.'); ?></p>
                            <p class="card-text">Quantidade: <?= $produto->qty; ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <div class="col-12">
                <p>Nenhum produto encontrado.</p>
            </div>
        <?php endif; ?>
    </div>
</div>
<?php $this->load->view('footer'); ?>
