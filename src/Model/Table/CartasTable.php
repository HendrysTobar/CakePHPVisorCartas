<?php
    //Esto se debe poner en src/Model/Table
    namespace App\Model\Table;

    use Cake\ORM\Table;
    use Cake\Utility\Text;
    
    class CartasTable extends Table
    {
        public function initialize(array $config)
        {
            
        }

        public function beforeSave($event, $entity, $options)
        {
            if($entity->isNew() && !$entity->nombre_corto)
            {
                $entity->nombre_corto = $nombre_slugged = Text::slug($entity->nombre);
                                          
            }
        }



    }
    

?>

