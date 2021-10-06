@include('catalogos.header')
@yield('content')

    <hr  style=size:2px color="grey" width="90%" /> 


    <div class="container-fluid">
<!-- ******************************************************************************************************************* -->
<!-- MOD 1: -->
         <div class="Mod1">
         <h3> Listado de nuestro catálogo - Index según rol -</h3>    
         <div class="row rowmod1">   <!-- d-block: los pone verticales -->
               <div class="col-xl-2 colmod11" >
                   <nav2>
                       <ul>
                           <p>Opciones index2</p>
                           <hr  style=size:2px color="grey" width="90%" />
                           <div class="boton3"><a href="{{route('catalogos.home')}}" style="color:white">Volver Inicio</a></div>
                       </ul>
                   </nav2>
               </div>
<!--............................................................................................................... -->
        <div class="col-xl-6 colmod12">
            <!-- ORM ELOQUENT(CRUD) Read Leer registros en la vista pasados por el controlador -->
        <table>
        </table>
        
        @foreach($catalogos as $catalogo)
        <table>        
        <tr>
            <td><input type="text" size="4px" name="autor" value="{{$catalogo->id}}"></td>
            <td><input type="text" size="20px" name="autor" value="{{$catalogo->autor}}"></td>
            <td><input type="text" size="20px" name="titulo" value="{{$catalogo->titulo}}"></td>
            <td><input type="text" size="20px" name="genero" value="{{$catalogo->genero}}"></td>
            <td><a href="{{route('catalogos.edit', $catalogo)}}"></a></td>
            <td><a href="{{route('catalogos.show', $catalogo)}}"></a></td>
        </tr>
        </table>
        @endforeach

        <form action="{{route('catalogos.index')}}"><input type="submit" value="Volver" name="" ></form>
        </div><!-- row -->

        <div class="col-xl-4 colmod12">
            <h6> Aquí utilizamos un Middleware para filtrar la usuario según su rol. En el caso que tenga un rol=1 se 
                considerará administrador y tendrá acceso a modificaciones. Si su rol de la tabla marca 2 no.</h6>
        </div>




       </div><!-- col -->
      </div><!--mod1 -->
<!--............................................................................................................... -->

<!-- ******************************************************************************************************************* -->
<!-- MOD 2: -->
         <div class="Mod2">
             <div class="row rowmod2">   <!-- d-block: los pone verticales -->
               <div class="col-xl-11 colmod2" >
               <br><br><br><br><br>
               <img class="centrar2" repeat="no repeat" src="{{asset('img/Libros.png')}}" style="width: 1056px height= 540px">;
               </div>
<!--............................................................................................................... -->
               <div class="col-xl-1 colmod2" >

               </div>
           </div><!-- row -->
       </div><!--mod1 -->
<!--............................................................................................................... -->
<!-- ******************************************************************************************************************* -->
<!-- MOD 3: -->
         <div class="Mod3">
             <div class="row rowmod3">   <!-- d-block: los pone verticales -->
               <div class="col-xl-3 colmod3" ></div>
<!--............................................................................................................... -->
               <div class="col-xl-9 colmod3" ></div>  <!-- align-self-start -->
           </div><!-- row -->
       </div><!--mod1 -->
<!--............................................................................................................... -->
<!-- ******************************************************************************************************************* -->
<!-- MOD 4: -->
         <div class="Mod4">
             <div class="row rowmod4">   <!-- d-block: los pone verticales -->
               <div class="col-xl-3 colmod4" ></div>
<!--............................................................................................................... -->
               <div class="col-xl-9 colmod4" ></div>  <!-- align-self-start -->
           </div><!-- row -->
       </div><!--mod1 -->
<!--............................................................................................................... -->


<!-- ******************************************************************************************************************* -->
<!-- funciones -->
<!-- ******************************************************************************************************************* -->
<?php


?>

</div><!-- container -->

<!-- *************************************************************************************************************** -->  
@include('catalogos.footer')


