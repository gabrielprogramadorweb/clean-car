<?php $this->load->view('base'); ?>
<!-- Barra de Navegação -->
<nav class="navbar navbar-expand-lg shadow-sm nav-css">
    <a class="navbar-brand" href="<?= base_url('home') ?>"><img src="../../assets/img/logo-1.png"  width="300" height="auto" alt="Sua Imagem"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
            <a class="nav-link btn" href="<?= base_url('home') ?>">Página inicial<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
            <a class="nav-link btn" href="<?= site_url('produtos') ?>">Produtos</a>
            </li>
            <li class="nav-item">
            <a class="nav-link btn" href="<?= site_url('servicos') ?>">Serviços</a>
            </li>
            <li class="nav-item">
            <a class="nav-link btn" href="<?= site_url('contato') ?>">Contato</a>
            </li>
        </ul>
    </div>
</nav>