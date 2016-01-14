
<!--Inicio do Form Fabio-->
<?= $this->Flash->render() ?>


<form class="form-inline">

    <div class="form-group">
        <label class="sr-only" for="txt_descricao">Descricao</label>
        <div class="input-group">      
            <input type="text" class="form-control" name="txt_descricao" id="txt_descricao" placeholder="Digite uma palavra"> 
        </div>
    </div>

    <button id="btn_buscar_Clifor" type="button" class="btn btn-primary">Buscar</button>
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
        <li><?= $this->Html->link(__('New Clifor'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Kardexs'), ['controller' => 'Kardexs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Kardex'), ['controller' => 'Kardexs', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="col-lg-6">
    


    <h2><?= __('Clifors') ?></h2>        
    <?= $this->Html->link(__('Novo Clifors'), ['action' => 'add'], ['class' => 'btn btn-primary']) ?>
    <br/><br/>


    <table class="table table-bordered table-hover table-striped">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('nome') ?></th>
                <th><?= $this->Paginator->sort('doc') ?></th>
                <th><?= $this->Paginator->sort('tipodoc') ?></th>
                <th><?= $this->Paginator->sort('tipoclifor') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($clifors as $clifor): ?>
            <tr>
                <td><?= $this->Number->format($clifor->id) ?></td>
                <td><?= h($clifor->nome) ?></td>
                <td><?= $this->Number->format($clifor->doc) ?></td>
                <td><?= $this->Number->format($clifor->tipodoc) ?></td>
                <td><?= $this->Number->format($clifor->tipoclifor) ?></td>
                <td><?= h($clifor->created) ?></td>
                <td><?= h($clifor->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $clifor->id]) ?>
                    <?= $this->Html->link(__('Alterar'), ['action' => 'edit', $clifor->id]) ?>
                    <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $clifor->id], ['confirm' => __('Você tem certeza que quer apagar # {0}?', $clifor->id)]) ?>
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
<!-- <script src="/js/Clifors/index.js"></script> -->