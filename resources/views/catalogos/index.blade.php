@include('catalogos.header')
@yield('content')


    <hr  style=size:2px color="grey" width="90%" /> 
    <h5> index=> Listado de nuestro catálogo:</h5>    
    <p>fuente:</p> 
    <?php $tamano_fuente; ?>
    


<!-- ORM ELOQUENT(CRUD) Read Leer registros en la vista pasados por el controlador -->
        <table>
            <tr><th>LISTADO ARTICULOS</th></tr>
            <tr></tr>
            <th>ID</th>            
            <th>AUTOR</th>
            <th>TITULO</th>
            <th>GENERO</th>
            <th>
                <form action="{{route('catalogos.create')}}" method="GET">
                    @csrf
                    <button type="submit"> Nuevo Libro</button>
                </form>
            </th>
            </tr>
        </table>    
        @foreach($catalogos as $catalogo)
        

        <form action="{{route('catalogos.edit', $catalogo)}}" method="">    
        <table>
            <!--
                 {{$catalogo}}
                 {{$catalogo->id}} {{$catalogo->autor}}
                 <a href="">{{$catalogo->autor}}</a>
               
                <a href="{{route('catalogos.show', $catalogo)}}">
                {{$catalogo->id}} {{$catalogo->autor}} {{$catalogo->titulo}} {{$catalogo->categoria}}
                </a>
            -->

        <tr><td><input type="text" name="autor" value="{{$catalogo->id}}"></td></tr>
        <tr>
            <td><input type="text" name="autor" value="{{$catalogo->autor}}"></td>
            <td><input type="text" name="titulo" value="{{$catalogo->titulo}}"></td>
            <td><input type="text" name="genero" value="{{$catalogo->genero}}"></td>
            <td><button type="submit" name="btnEditar">Editar</button></td>
            <td><a href="{{route('catalogos.show', $catalogo)}}">Eliminar</a></td>
        </tr>
        </form>    
        </table>   
        @endforeach

        

<!-- *************************************************************************************************************** -->  
@include('catalogos.footer')

