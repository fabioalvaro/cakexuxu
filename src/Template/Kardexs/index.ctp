
<!--Inicio do Form Fabio-->
<?= $this->Flash->render() ?>


<form class="form-inline">

    <div class="form-group">
        <label class="sr-only" for="txt_descricao">Descricao</label>
        <div class="input-group">      
            <input type="text" class="form-control" name="txt_descricao" id="txt_descricao" placeholder="Digite uma palavra"> 
        </div>
    </div>

    <button id="btn_buscar_Kardex" type="button" class="btn btn-primary">Buscar</button>
    <button id="btn_limpar" type="button" class="btn btn-primary">Limpar</button>

    <div id="barra" class="progress hidden">
        <div class=" progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%">
            <span class="sr-only">45% Complete</span>
        </div>
    </div> 
</form>


<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Kardex'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tiposmovimentos'), ['controller' => 'Tiposmovimentos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tiposmovimento'), ['controller' => 'Tiposmovimentos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Clifors'), ['controller' => 'Clifors', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Clifor'), ['controller' => 'Clifors', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Produtos'), ['controller' => 'Produtos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Produto'), ['controller' => 'Produtos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Estoques'), ['controller' => 'Estoques', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Estoque'), ['controller' => 'Estoques', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="col-lg-6">
    


    <h2><?= __('Kardexs') ?></h2>        
    <?= $this->Html->link(__('Novo Kardexs'), ['action' => 'add'], ['class' => 'btn btn-primary']) ?>
    <br/><br/>


    <table class="table table-bordered table-hover table-striped">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('tiposmovimento_id') ?></th>
                <th><?= $this->Paginator->sort('clifor_id') ?></th>
                <th><?= $this->Paginator->sort('produto_id') ?></th>
                <th><?= $this->Paginator->sort('estoque_id') ?></th>
                <th><?= $this->Paginator->sort('ativo') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($kardexs as $kardex): ?>
            <tr>
                <td><?= $this->Number->format($kardex->id) ?></td>
                <td><?= h($kardex->created) ?></td>
                <td><?= $kardex->has('tiposmovimento') ? $this->Html->link($kardex->tiposmovimento->name, ['controller' => 'Tiposmovimentos', 'action' => 'view', $kardex->tiposmovimento->id]) : '' ?></td>
                <td><?= $kardex->has('clifor') ? $this->Html->link($kardex->clifor->id, ['controller' => 'Clifors', 'action' => 'view', $kardex->clifor->id]) : '' ?></td>
                <td><?= $kardex->has('produto') ? $this->Html->link($kardex->produto->id, ['controller' => 'Produtos', 'action' => 'view', $kardex->produto->id]) : '' ?></td>
                <td><?= $kardex->has('estoque') ? $this->Html->link($kardex->estoque->id, ['controller' => 'Estoques', 'action' => 'view', $kardex->estoque->id]) : '' ?></td>
                <td><?= $this->Number->format($kardex->ativo) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $kardex->id]) ?>
                    <?= $this->Html->link(__('Alterar'), ['action' => 'edit', $kardex->id]) ?>
                    <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $kardex->id], ['confirm' => __('Você tem certeza que quer apagar # {0}?', $kardex->id)]) ?>
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

<!--Coloque Aqui seu js caso precise...-->
<!-- <script src="/js/Kardexs/index.js"></script> -->