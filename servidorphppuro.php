<?php
/*clase que publica los métodos del servidor*/

class Servidor {
  public function hola($x) {
    return 'Hola mismisimo '. $x;
  }
  public function buscarPrecio($id){
      $bdProductos=['CocaCola'=>20,
                    'Pepsi'=>15,
                    'Interlagos'=>10,
                    ];
      if(isset($bdProductos[$id])){
          return $bdProductos[$id];
      }else{
          return 'No se encuentra el Producto';
      }
              
  }
}

/*Publicación del servicio*/
try {
  $server = new SOAPServer(
    NULL,
    array(
     'uri' => $_SERVER['HTTP_REFERER'].'servidorphppuro.php'
    )
  );

  $server->setClass('Servidor');
  $server->handle();
}

catch (SOAPFault $f) {
  print $f->faultstring;
}
