<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/* src/View/Helper/LinkHelper.php (using other helpers) */

namespace App\View\Helper;

use Cake\View\Helper;

class fabioalvaroHelper extends Helper
{
    public $helpers = ['Html'];

    public function makeEdit($title, $url)
    {
        // Use the HTML helper to output
        // Formatted data:

        $link = $this->Html->link($title, $url, ['class' => 'edit']);

        return '<div class="editOuter">' . $link . '</div>';
    }
    public function bold($text)
    {
          return '<strong>' . $text . '</strong>';
    }
}