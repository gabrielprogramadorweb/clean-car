<?php $this->load->view('base', ['title' => 'Lista de Usuários']); $this->load->view('nav'); ?>
<div class="container mt-5">
    <h1 class="mb-4">Lista de Produtos</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Preço</th>
                <th>Quantidade</th>
            </tr>
        </thead>
        <tbody>
            <?php if(isset($produtos) && is_array($produtos)): ?>
            <?php foreach ($produtos as $produto): ?>
            <tr>
                <td><?= $produto->id; ?></td>
                <td><?= $produto->name; ?></td>
                <!-- Formatando o preço -->
                <td>R$ <?= number_format($produto->price, 2, ',', '.'); ?></td>
                <td><?= $produto->qty; ?></td>
            </tr>
            <?php endforeach; ?>
            <?php else: ?>
            <tr>
                <td colspan="4">Nenhum produto encontrado</td>
            </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>
<?php $this->load->view('footer'); ?>