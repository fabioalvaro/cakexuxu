<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Tiposmovimento'), ['action' => 'edit', $tiposmovimento->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tiposmovimento'), ['action' => 'delete', $tiposmovimento->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tiposmovimento->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Tiposmovimentos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tiposmovimento'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="tiposmovimentos view large-9 medium-8 columns content">
    <h3><?= h($tiposmovimento->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($tiposmovimento->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($tiposmovimento->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Active') ?></th>
            <td><?= $this->Number->format($tiposmovimento->active) ?></td>
        </tr>
    </table>
</div>
