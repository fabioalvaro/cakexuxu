<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Alterar Estoque'), ['action' => 'edit', $estoque->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Excluir Estoque'), ['action' => 'delete', $estoque->id], ['confirm' => __('Você tem certeza que deseja excluir # {0}?', $estoque->id)]) ?> </li>
        <li><?= $this->Html->link(__('Listar Estoques'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo Estoque'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="estoques view large-9 medium-8 columns content">
    <h3><?= h($estoque->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Descricao') ?></th>
            <td><?= h($estoque->descricao) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($estoque->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Active') ?></th>
            <td><?= $this->Number->format($estoque->active) ?></td>
        </tr>
    </table>
</div>
