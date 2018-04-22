<?php
  class Coche {
    var $ruedas;
    var $color;
    var $motor;

    function __construct(){ //Metodo constructor;
      $this->ruedas=4;
      $this->color="";
      $this->motor=1600;
    }

    function arrancar(){
      echo "estoy arrancando<br>";
    }
    function girar (){
      echo "estoy girando";
    }
    function frenar (){
      echo "estoy frenando";
    }
    function establece_color($color_coche,$nombre_coche){
      $this->color=$color_coche;
      echo "El color de " . $nombre_coche . " es " .$this->color."<br>" ;
    }
  }

  //----------------------------------------------------

  class Camion extends Coche {


    function __construct(){ //Metodo constructor;
        parent::__construct();
      $this->ruedas=8;
      $this->color="";
      $this->motor=2600;
    }
    function establece_color($color_camion,$nombre_camion){
      $this->color=$color_camion;
      echo "El color de " . $nombre_camion . " es " .$this->color."<br>" ;
    }

      function arrancar(){
      parent::arrancar();
      echo "Camión arrancado";
    }

  }