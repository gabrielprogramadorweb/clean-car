<?php 
$this->load->view('base', ['title' => 'Home']); 
$this->load->view('nav'); 
?>
<!-- Jumbotron -->
    <div class="jumbotron w-auto h-auto">
    </div>
    <!-- Serviços -->
    <div class="container servicos">
        <h2>Nossos Serviços</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="servico-card">
                    <h4>Lavagem Premium</h4>
                    <p>Deixe seu carro brilhando com nossa lavagem premium.</p>
                    <p>Preço: R$50,00</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="servico-card">
                    <h4>Polimento Profissional</h4>
                    <p>Realizamos polimento para restaurar o brilho original do seu veículo.</p>
                    <p>Preço: R$120,00</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="servico-card">
                    <h4>Proteção de Pintura</h4>
                    <p>Oferecemos serviços de proteção de pintura para manter seu carro sempre novo.</p>
                    <p>Preço: R$80,00</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Contato -->
    <div class="container contato">
        <div class="container mt-5">
    <h1 class="mb-4">Entre em Contato</h1>
    <form action="<?= site_url('contato/enviar_mensagem'); ?>" method="post">
        <div class="form-group">
           
            <input type="text" placeholder="Seu nome?" class="form-control" id="nome" name="nome" required>
        </div>
        <div class="form-group">
            <input type="email" placeholder="Seu Email?" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
            <textarea placeholder="Escreva sua mensagem aqui." class="form-control" id="mensagem" name="mensagem" rows="4" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Enviar Mensagem</button>
    </form>
    <?php $this->load->view('contatoJs'); ?>
</div>
    </div>
   
<?php $this->load->view('footer'); ?>