<?php
/**
 * Description of ArticlesTable
 *
 * @author fabio
 */

namespace App\Model\Table;

use Cake\ORM\Table;

class ArticlesTable extends Table{
    //put your code here
    
    public function initialize(array $config) {
        $this->addBehavior('Timestamp');
    }
}
