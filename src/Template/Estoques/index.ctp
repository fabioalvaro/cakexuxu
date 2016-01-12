
<div class="col-lg-6">
                        <h2><?= __('Estoques') ?></h2>        
<?= $this->Html->link(__('Novo Estoque'), ['action' => 'add'],['class' => 'btn btn-primary']) ?>
<br/><br/>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th><?= $this->Paginator->sort('id') ?></th>
                                        <th><?= $this->Paginator->sort('descricao') ?></th>
                                        <th><?= $this->Paginator->sort('active') ?></th>
                                        <th class="actions"><?= __('Actions') ?></th>
                                    </tr>

                                </thead>
                                <tbody>
            <?php foreach ($estoques as $estoque): ?>
                                    <tr>
                                        <td><?= $this->Number->format($estoque->id) ?></td>
                                        <td><?= h($estoque->descricao) ?></td>
                                        <td><?= $this->Number->format($estoque->active) ?></td>
                                        <td class="actions">
                                            <?= $this->Html->link(__('view'), ['action' => 'view', $estoque->id]) ?>
                                            <?= $this->Html->link(__('Editar'), ['action' => 'edit', $estoque->id]) ?>
                                            <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $estoque->id], ['confirm' => __('Are you sure you want to delete # {0}?', $estoque->id)]) ?>
                                        </td>
                                    </tr>
            <?php endforeach; ?>

                                </tbody>
                            </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
                        </div>
                    </div>
