<h1>Cartas</h1>


    <!-- Here is where we iterate through our $articles query object, printing out article info -->
    <?php foreach ($cartas as $carta) : ?>
        <div class="centrado">
            <div class="azul">
               
                <?= $this->Html->link($carta->nombre, ['action' => 'view', $carta->nombre_corto]) ?> 
            </div>
          
            <?= $this->Html->image($carta->url_imagen, ["class"=>"centrado"]) ?>     
            
        </div>           
    <?php endforeach; ?>
    <p class="centrado"> 
        <?= $this->Html->link("Agregar nueva carta", ["action"=>"add"], array("class"=>"centrado"))?>
    </p>    
        <p class="centrado"> 
                Sitio web creado usando arquitectura MVC con CakePHP
        </p>
</table>