<h1>Agregar Nueva Carta</h1>

<?php
    echo $this->Form->create($carta, array('enctype'=>'multipart/form-data'));
    echo $this->Form->control("usuario_id", ["type" => "hidden" , "value"=>1]);
    echo $this->Form->control("nombre");    
    echo $this->Form->control("texto", ["rows"=>3]);
    echo $this->Form->input('imagen', array('type'=>'file', 'accept'=> 'image/jpeg,image/png'));
    echo $this->Form->button("Guardar Carta");
    
    echo $this->Form->end();


?>