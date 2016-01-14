<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Alterar Departamento'), ['action' => 'edit', $departamento->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Excluir Departamento'), ['action' => 'delete', $departamento->id], ['confirm' => __('Você tem certeza que deseja excluir # {0}?', $departamento->id)]) ?> </li>
        <li><?= $this->Html->link(__('Listar Departamentos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo Departamento'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Listar Produtos'), ['controller' => 'Produtos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo Produto'), ['controller' => 'Produtos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="departamentos view large-9 medium-8 columns content">
    <h3><?= h($departamento->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Descricao') ?></th>
            <td><?= h($departamento->descricao) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($departamento->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Ativo') ?></th>
            <td><?= $this->Number->format($departamento->ativo) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Produtos Relacionados ') ?></h4>
        <?php if (!empty($departamento->produtos)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Descricao') ?></th>
                <th><?= __('Custo') ?></th>
                <th><?= __('Ativo') ?></th>
                <th><?= __('Departamento Id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($departamento->produtos as $produtos): ?>
            <tr>
                <td><?= h($produtos->id) ?></td>
                <td><?= h($produtos->descricao) ?></td>
                <td><?= h($produtos->custo) ?></td>
                <td><?= h($produtos->ativo) ?></td>
                <td><?= h($produtos->departamento_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Visualizar'), ['controller' => 'Produtos', 'action' => 'view', $produtos->id]) ?>

                    <?= $this->Html->link(__('Alterar'), ['controller' => 'Produtos', 'action' => 'edit', $produtos->id]) ?>

                    <?= $this->Form->postLink(__('Excluir'), ['controller' => 'Produtos', 'action' => 'delete', $produtos->id], ['confirm' => __('Você tem certeza que deseja excluir # {0}?', $produtos->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
</div>
