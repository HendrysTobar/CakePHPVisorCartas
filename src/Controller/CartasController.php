<?php
//archivo en src/Controller/
namespace App\Controller;
use Cake\Core\Configure;


class CartasController extends AppController
{
    public function index()
    {
        $this->loadComponent('Paginator');
        $cartas = $this->Paginator->paginate($this->Cartas->find());
        $this->set(compact('cartas'));
    }

    public function view($nombre_corto)
    {
        $carta = $this->Cartas->findByNombreCorto($nombre_corto)->firstOrFail();
        $this->set(compact('carta'));
        
    }

    public function add()
    {

        Configure::write('debug', 1);
        
        $carta = $this->Cartas->newEntity();
        
        if($this->request->is("post"))
        {
            $carta = $this->Cartas->patchEntity($carta, $this->request->getData());
            $carta->usuario_id = 1;
          

            $datos =  $this->request->getData();
            var_dump($datos);
            if(!empty($datos))
            {
               
                //Check if image has been uploaded
                if(!empty($datos['imagen']['name']))
                {
                    
                    $file = $datos['imagen']; //put the data into a var for easy use

                    $ext = substr(strtolower(strrchr($file['name'], '.')), 1); //get the extension
                    $arr_ext = array('jpg','png', 'jpeg', 'gif'); //set allowed extensions

                    //only process if the extension is valid
                    if(in_array($ext, $arr_ext))
                    {
                        //do the actual uploading of the file. First arg is the tmp name, second arg is
                        //where we are putting it

                        
                        $destino = WWW_ROOT."\\img\\".$file['name'];
                        debug("Destino es: " . $destino);
                        move_uploaded_file($file['tmp_name'], $destino );

                        //prepare the filename for database entry
                        $carta->url_imagen = $file['name'];
                    }
                }

                if($this->Cartas->save($carta))
                {
                    $this->Flash->success("La carta ha sido guardada satisfactoriamente");
                    return $this->redirect(["action"=>"index"]);
                }
                else
                {
                    $this->Flash->error("No se pudo guardar la carta");
                }

               
            }

        }
        $this->set(compact('carta', $carta));
        

    }

}


?>