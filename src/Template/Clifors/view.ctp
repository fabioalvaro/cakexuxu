<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Alterar Clifor'), ['action' => 'edit', $clifor->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Excluir Clifor'), ['action' => 'delete', $clifor->id], ['confirm' => __('Você tem certeza que deseja excluir # {0}?', $clifor->id)]) ?> </li>
        <li><?= $this->Html->link(__('Listar Clifors'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo Clifor'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Listar Kardexs'), ['controller' => 'Kardexs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo Kardex'), ['controller' => 'Kardexs', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="clifors view large-9 medium-8 columns content">
    <h3><?= h($clifor->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Nome') ?></th>
            <td><?= h($clifor->nome) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($clifor->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Doc') ?></th>
            <td><?= $this->Number->format($clifor->doc) ?></td>
        </tr>
        <tr>
            <th><?= __('Tipodoc') ?></th>
            <td><?= $this->Number->format($clifor->tipodoc) ?></td>
        </tr>
        <tr>
            <th><?= __('Tipoclifor') ?></th>
            <td><?= $this->Number->format($clifor->tipoclifor) ?></td>
        </tr>
        <tr>
            <th><?= __('Ativo') ?></th>
            <td><?= $this->Number->format($clifor->ativo) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($clifor->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($clifor->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Kardexs Relacionados ') ?></h4>
        <?php if (!empty($clifor->kardexs)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Tiposmovimento Id') ?></th>
                <th><?= __('Clifor Id') ?></th>
                <th><?= __('Produto Id') ?></th>
                <th><?= __('Estoque Id') ?></th>
                <th><?= __('Ativo') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($clifor->kardexs as $kardexs): ?>
            <tr>
                <td><?= h($kardexs->id) ?></td>
                <td><?= h($kardexs->created) ?></td>
                <td><?= h($kardexs->tiposmovimento_id) ?></td>
                <td><?= h($kardexs->clifor_id) ?></td>
                <td><?= h($kardexs->produto_id) ?></td>
                <td><?= h($kardexs->estoque_id) ?></td>
                <td><?= h($kardexs->ativo) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Visualizar'), ['controller' => 'Kardexs', 'action' => 'view', $kardexs->id]) ?>

                    <?= $this->Html->link(__('Alterar'), ['controller' => 'Kardexs', 'action' => 'edit', $kardexs->id]) ?>

                    <?= $this->Form->postLink(__('Excluir'), ['controller' => 'Kardexs', 'action' => 'delete', $kardexs->id], ['confirm' => __('Você tem certeza que deseja excluir # {0}?', $kardexs->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
</div>
