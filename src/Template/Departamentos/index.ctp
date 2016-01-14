
<!--Inicio do Form Fabio-->
<?= $this->Flash->render() ?>


<form class="form-inline">

    <div class="form-group">
        <label class="sr-only" for="txt_descricao">Descricao</label>
        <div class="input-group">      
            <input type="text" class="form-control" name="txt_descricao" id="txt_descricao" placeholder="Digite uma palavra"> 
        </div>
    </div>

    <button id="btn_buscar_Departamento" type="button" class="btn btn-primary">Buscar</button>
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
        <li><?= $this->Html->link(__('New Departamento'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Produtos'), ['controller' => 'Produtos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Produto'), ['controller' => 'Produtos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="col-lg-6">
    


    <h2><?= __('Departamentos') ?></h2>        
    <?= $this->Html->link(__('Novo Departamentos'), ['action' => 'add'], ['class' => 'btn btn-primary']) ?>
    <br/><br/>


    <table class="table table-bordered table-hover table-striped">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('descricao') ?></th>
                <th><?= $this->Paginator->sort('ativo') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($departamentos as $departamento): ?>
            <tr>
                <td><?= $this->Number->format($departamento->id) ?></td>
                <td><?= h($departamento->descricao) ?></td>
                <td><?= $this->Number->format($departamento->ativo) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $departamento->id]) ?>
                    <?= $this->Html->link(__('Alterar'), ['action' => 'edit', $departamento->id]) ?>
                    <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $departamento->id], ['confirm' => __('Você tem certeza que quer apagar # {0}?', $departamento->id)]) ?>
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
<!-- <script src="/js/Departamentos/index.js"></script> -->