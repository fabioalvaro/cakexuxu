<?php

use Cake\ORM\TableRegistry;

$merda = TableRegistry::get('merda');

$query = $merda->find();

foreach ($query as $row) {
    echo $row->title;
}