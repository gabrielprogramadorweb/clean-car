<?php $this->load->view('base', ['title' => 'Contato']); $this->load->view('nav'); ?>
<div class="container mt-5">
    <h1 class="mb-4">Entre em Contato</h1>
    <form action="<?= site_url('contato/enviar_mensagem'); ?>" method="post">
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" class="form-control" id="nome" name="nome" required>
        </div>
        <div class="form-group">
            <label for="email">E-mail:</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="mensagem">Mensagem:</label>
            <textarea class="form-control" id="mensagem" name="mensagem" rows="4" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Enviar Mensagem</button>
    </form>
</div>
<?php $this->load->view('contatoJs'); ?>
<?php $this->load->view('footer'); ?>