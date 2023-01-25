<style>
      body {
            margin: auto;
            padding: 50px;
      }

      main{
            display: flex;
            align-items: center;
            justify-content: center;
      }

      main>div{
            width: 70%;
      }

      table,
      tr,
      th,
      td {
            border: 1px solid black;
      }

      table {
            margin-top: 10%;
            margin-bottom: 5%;
            border-collapse: collapse;
            width: 100%;
      }

      th {
            height: 70px;
      }

      td {
            height: 30px;
      }

      tr>td:nth-child(6){
            border: none;
            display: flex;
            justify-content: space-evenly;
      }

      a{
            width: 25%;
            text-align: center;
      }

      tr>td:nth-child(6)>a:hover{
            background-color: #AFE1E1;
      }

      .button {
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
      }

      #nueva_asignatura{
            border: 1px solid black;
            border-radius: 10px;
            padding: 5px;
      }

      #nueva_asignatura:hover{
            background-color: #AFE1E1;
      }
</style>

<x-app-layout>
      <div>
            <table>
                  <tr>
                        <th>Codigo</th>
                        <th>Nombre</th>
                        <th>Nombre corto</th>
                        <th>Profesor</th>
                        <th>Color</th>
                        <th>Usuario</th>
                  </tr>
                  @foreach ($asignaturas as $asignatura)
                  @if ($asignatura->user_id == Auth::user()->id)
                  <tr>
                        <td>{{ $asignatura->codAs }}</td>
                        <td>{{ $asignatura->nombreAs }}</td>
                        <td>{{ $asignatura->nombreCortoAs }}</td>
                        <td>{{ $asignatura->profesorAs }}</td>
                        <td <?php echo 'style=background-color:'.$asignatura->colorAs?>></td>
                        <td>
                              <a href="/asignaturas/ver/{{$asignatura->codAs}}">Ver</a>
                              <a href="/asignaturas/editar/{{$asignatura->codAs}}">Editar</a>
                              <a href="/asignaturas/eliminar/{{$asignatura->codAs}}" onclick="return eliminarAsignatura('Eliminar Asignatura')"> Eliminar</a>
                        </td>
                  </tr>
                  @endif
                  @endforeach
            </table>
            <a href="/asignaturas/crear" id="nueva_asignatura">Nueva asignatura</a>
      </div>
</x-app-layout>

<script>
      function eliminarAsignatura(value) {
            action = confirm(value) ? true : event.preventDefault()
      }
</script>