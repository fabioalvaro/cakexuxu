<%
/**
 * Fabio Customizou para o Admin
 */
use Cake\Utility\Inflector;

$fields = collection($fields)
    ->filter(function($field) use ($schema) {
        return !in_array($schema->columnType($field), ['binary', 'text']);
    })
    ->take(7);

if (isset($modelObject) && $modelObject->behaviors()->has('Tree')) {
    $fields = $fields->reject(function ($field) {
        return $field === 'lft' || $field === 'rght';
    });
}
%>

<!--Inicio do Form Fabio-->
<?= $this->Flash->render() ?>


<form class="form-inline">

    <div class="form-group">
        <label class="sr-only" for="txt_descricao">Descricao</label>
        <div class="input-group">      
            <input type="text" class="form-control" name="txt_descricao" id="txt_descricao" placeholder="Digite uma palavra"> 
        </div>
    </div>

    <button id="btn_buscar_<%= $singularHumanName %>" type="button" class="btn btn-primary">Buscar</button>
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
        <li><?= $this->Html->link(__('New <%= $singularHumanName %>'), ['action' => 'add']) ?></li>
<%
    $done = [];
    foreach ($associations as $type => $data):
        foreach ($data as $alias => $details):
            if (!empty($details['navLink']) && $details['controller'] !== $this->name && !in_array($details['controller'], $done)):
%>
        <li><?= $this->Html->link(__('List <%= $this->_pluralHumanName($alias) %>'), ['controller' => '<%= $details['controller'] %>', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New <%= $this->_singularHumanName($alias) %>'), ['controller' => '<%= $details['controller'] %>', 'action' => 'add']) ?></li>
<%
                $done[] = $details['controller'];
            endif;
        endforeach;
    endforeach;
%>
    </ul>
</nav>
<div class="col-lg-6">
    


    <h2><?= __('<%= $pluralHumanName %>') ?></h2>        
    <?= $this->Html->link(__('Novo <%= $pluralHumanName %>'), ['action' => 'add'], ['class' => 'btn btn-primary']) ?>
    <br/><br/>


    <table class="table table-bordered table-hover table-striped">
        <thead>
            <tr>
<% foreach ($fields as $field): %>
                <th><?= $this->Paginator->sort('<%= $field %>') ?></th>
<% endforeach; %>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($<%= $pluralVar %> as $<%= $singularVar %>): ?>
            <tr>
<%        foreach ($fields as $field) {
            $isKey = false;
            if (!empty($associations['BelongsTo'])) {
                foreach ($associations['BelongsTo'] as $alias => $details) {
                    if ($field === $details['foreignKey']) {
                        $isKey = true;
%>
                <td><?= $<%= $singularVar %>->has('<%= $details['property'] %>') ? $this->Html->link($<%= $singularVar %>-><%= $details['property'] %>-><%= $details['displayField'] %>, ['controller' => '<%= $details['controller'] %>', 'action' => 'view', $<%= $singularVar %>-><%= $details['property'] %>-><%= $details['primaryKey'][0] %>]) : '' ?></td>
<%
                        break;
                    }
                }
            }
            if ($isKey !== true) {
                if (!in_array($schema->columnType($field), ['integer', 'biginteger', 'decimal', 'float'])) {
%>
                <td><?= h($<%= $singularVar %>-><%= $field %>) ?></td>
<%
                } else {
%>
                <td><?= $this->Number->format($<%= $singularVar %>-><%= $field %>) ?></td>
<%
                }
            }
        }

        $pk = '$' . $singularVar . '->' . $primaryKey[0];
%>
                <td class="actions">
                    <?= $this->Html->link(__('Visualizar'), ['action' => 'view', <%= $pk %>]) ?>
                    <?= $this->Html->link(__('Alterar'), ['action' => 'edit', <%= $pk %>]) ?>
                    <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', <%= $pk %>], ['confirm' => __('Você tem certeza que quer apagar # {0}?', <%= $pk %>)]) ?>
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
<!-- <script src="/js/<%= $pluralHumanName %>/index.js"></script> -->