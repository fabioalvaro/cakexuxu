<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Estoque'), ['action' => 'edit', $estoque->estoque_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Estoque'), ['action' => 'delete', $estoque->estoque_id], ['confirm' => __('Are you sure you want to delete # {0}?', $estoque->estoque_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Estoques'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Estoque'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="estoques view large-9 medium-8 columns content">
    <h3><?= h($estoque->estoque_id) ?></h3>
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
