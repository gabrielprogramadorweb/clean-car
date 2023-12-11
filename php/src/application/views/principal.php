<?php $this->load->view('base', ['title' => 'Lista de Usuários']); $this->load->view('nav'); ?>
<div class="container mt-5">
<!--
<h1 class="mb-4">Lista de Usuários</h1>
<?php if(isset($users) && is_array($users)): ?>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Sobrenome</th>
            <th>Email</th>
            <th>Genêro</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($users as $user): ?>
            <tr>
                <td><?= $user->id; ?></td>
                <td><?= isset($user->first_name) ? $user->first_name : 'N/A'; ?></td>
                <td><?= isset($user->last_name) ? $user->last_name : 'N/A'; ?></td>
                <td><?= isset($user->email) ? $user->email : 'N/A'; ?></td>
                <td><?= isset($user->gender) ? $user->gender : 'N/A'; ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
<?php else: ?>
    <div class="alert alert-warning" role="alert">
        Nenhum usuário encontrado.
    </div>
<?php endif; ?>
</div>
<?php $this->load->view('footer'); ?>

