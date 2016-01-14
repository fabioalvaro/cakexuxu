<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Alterar Produto'), ['action' => 'edit', $produto->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Excluir Produto'), ['action' => 'delete', $produto->id], ['confirm' => __('Você tem certeza que deseja excluir # {0}?', $produto->id)]) ?> </li>
        <li><?= $this->Html->link(__('Listar Produtos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo Produto'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Listar Departamentos'), ['controller' => 'Departamentos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo Departamento'), ['controller' => 'Departamentos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="produtos view large-9 medium-8 columns content">
    <h3><?= h($produto->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Descricao') ?></th>
            <td><?= h($produto->descricao) ?></td>
        </tr>
        <tr>
            <th><?= __('Departamento') ?></th>
            <td><?= $produto->has('departamento') ? $this->Html->link($produto->departamento->id, ['controller' => 'Departamentos', 'action' => 'view', $produto->departamento->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($produto->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Custo') ?></th>
            <td><?= $this->Number->format($produto->custo) ?></td>
        </tr>
        <tr>
            <th><?= __('Ativo') ?></th>
            <td><?= h($produto->ativo) ?></td>
        </tr>
    </table>
</div>
