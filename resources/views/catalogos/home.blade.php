@extends('catalogos.plantilla')
@section('title', 'Home Catalogos')
@section('content')

<div class="container-fluid">
<!-- ******************************************************************************************************************* -->
<!-- MOD 1: -->
         <div class="Mod1">
             <div class="row rowmod1">   <!-- d-block: los pone verticales -->
               <div class="col-xl-2 colmod11" >
                    <button class="boton1"><p href="" style="color:white">PROGRAMA</p></button> 
                    <div class="boton2"><a href="{{route('catalogos.index')}}" style="color:black">LISTADO LIBROS</a></div> 
                    <div class="boton2"><a href="{{route('catalogos.create')}}" style="color:black">CREAR</a></div> 
                    <div class="boton2"><a href="error404.php" style="color:black">ERROR 404</a></div> 
                    <div class="boton2"><a href="{{route('contactanos.index')}}" style="color:black">CONTACTAR</a></div> 
                    <div class="boton2"><a href="{{route('cookies.formcookie')}}" style="color:black">COOKIES 1</a></div> 
                    <div class="boton2"><a href="{{route('cookies.crearcookie')}}" style="color:black">COOKIES 2</a></div> 
                    <div class="boton2"><a href="{{route('catalogos.prueba')}}" style="color:black">ACCESO RESTRINGIDO</a></div> 
                    <div class="boton2"><a href="{{route('dashboard')}}" style="color:black">LOGUIN</a></div> 
                    <br>
                    <button class="boton1"><a href="{{route('login')}}" style="color:white">Log in</a></button>
               </div>
<!--............................................................................................................... -->
          <div class="col-xl-10 colmod12">
                    <div class="ContainerImg">
                        <img repeat="no repeat" src="img/FondoPantall7.jpg" style="width: 1056px height= 540px">;
                        <div class="textoImg">Software de gestion librerías</div>
                        <div class="CentrarImg"><a href="{{route('catalogos.index')}}" style="color:white">Ir a Programa</a></div>  
                    </div>
        </div>           
       </div><!-- row -->
      </div><!--mod1 -->
<!--............................................................................................................... -->

<!-- ******************************************************************************************************************* -->
<!-- MOD 2: -->
         <div class="Mod2">
             <div class="row rowmod2">   <!-- d-block: los pone verticales -->
               <div class="col-xl-3 colmod2" ></div>
<!--............................................................................................................... -->
               <div class="col-xl-9 colmod2" >

               </div>
           </div><!-- row -->
       </div><!--mod2 -->
<!--............................................................................................................... -->
<!-- ******************************************************************************************************************* -->
<!-- MOD 3: -->
         <div class="Mod3">
             <div class="row rowmod3">   <!-- d-block: los pone verticales -->
               <div class="col-xl-3 colmod3" ></div>
<!--............................................................................................................... -->
               <div class="col-xl-9 colmod3" ></div>  <!-- align-self-start -->
           </div><!-- row -->
       </div><!--mod3 -->
<!--............................................................................................................... -->
<!-- ******************************************************************************************************************* -->
<!-- MOD 4: -->
         <div class="Mod4">
             <div class="row rowmod4">   <!-- d-block: los pone verticales -->
               <div class="col-xl-3 colmod4" ></div>
<!--............................................................................................................... -->
               <div class="col-xl-9 colmod4" ></div>  <!-- align-self-start -->
           </div><!-- row -->
       </div><!--mod4 -->
<!--............................................................................................................... -->


<!-- ******************************************************************************************************************* -->
<!-- funciones -->
<!-- ******************************************************************************************************************* -->
<?php


?>

</div><!-- container -->


@endsection
