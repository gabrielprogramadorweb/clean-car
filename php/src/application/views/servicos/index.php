<?php $this->load->view('base', ['title' => 'Lista de Serviços']); $this->load->view('nav'); ?>
<div class="container mt-5">
    <h1 class="mb-4">Lista de Serviços</h1>
    <?php if(isset($servicos) && is_array($servicos)): ?>
        <?php foreach ($servicos as $servico): ?>
            <div class="servico-card">
                <h4><?= $servico->name; ?></h4>
                <p><?= $servico->descricao; ?></p>
                <p>Preço: R$<?= number_format($servico->price, 2, ',', '.'); ?></p>
            </div>
        <?php endforeach; ?>
    <?php else: ?>
        <p>Nenhum serviço encontrado.</p>
    <?php endif; ?>
</div>
<?php $this->load->view('footer'); ?>