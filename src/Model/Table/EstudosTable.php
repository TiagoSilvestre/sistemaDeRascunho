<?php 

namespace App\Model\Table;

use Cake\ORM\Table;

class EstudosTable extends Table
{
    public function rest(){
        var_dump(TableRegistry::get('Estudos'));
    }
    
}
