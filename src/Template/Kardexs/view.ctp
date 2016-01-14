<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Alterar Kardex'), ['action' => 'edit', $kardex->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Excluir Kardex'), ['action' => 'delete', $kardex->id], ['confirm' => __('Você tem certeza que deseja excluir # {0}?', $kardex->id)]) ?> </li>
        <li><?= $this->Html->link(__('Listar Kardexs'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo Kardex'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Listar Tiposmovimentos'), ['controller' => 'Tiposmovimentos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo Tiposmovimento'), ['controller' => 'Tiposmovimentos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Listar Clifors'), ['controller' => 'Clifors', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo Clifor'), ['controller' => 'Clifors', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Listar Produtos'), ['controller' => 'Produtos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo Produto'), ['controller' => 'Produtos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Listar Estoques'), ['controller' => 'Estoques', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo Estoque'), ['controller' => 'Estoques', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="kardexs view large-9 medium-8 columns content">
    <h3><?= h($kardex->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Tiposmovimento') ?></th>
            <td><?= $kardex->has('tiposmovimento') ? $this->Html->link($kardex->tiposmovimento->name, ['controller' => 'Tiposmovimentos', 'action' => 'view', $kardex->tiposmovimento->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Clifor') ?></th>
            <td><?= $kardex->has('clifor') ? $this->Html->link($kardex->clifor->id, ['controller' => 'Clifors', 'action' => 'view', $kardex->clifor->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Produto') ?></th>
            <td><?= $kardex->has('produto') ? $this->Html->link($kardex->produto->id, ['controller' => 'Produtos', 'action' => 'view', $kardex->produto->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Estoque') ?></th>
            <td><?= $kardex->has('estoque') ? $this->Html->link($kardex->estoque->id, ['controller' => 'Estoques', 'action' => 'view', $kardex->estoque->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($kardex->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Ativo') ?></th>
            <td><?= $this->Number->format($kardex->ativo) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($kardex->created) ?></td>
        </tr>
    </table>
</div>
