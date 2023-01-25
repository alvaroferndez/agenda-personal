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

      tr>td:nth-child(4){
            border: none;
            display: flex;
            justify-content: space-evenly;
      }

      a{
            width: 30%;
            text-align: center;
      }

      tr>td:nth-child(4)>a:hover{
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

      #nueva_hora{
            border: 1px solid black;
            border-radius: 10px;
            padding: 5px;
      }

      #nueva_hora:hover{
            background-color: #AFE1E1;
      }
</style>

<x-app-layout>
      <div>
            <table>
                  <tr>
                        <th>Día</th>
                        <th>Hora</th>
                        <th>Codigo asignatura</th>
                  </tr>
                  @foreach ($horas as $hora)
                  <tr>
                        <td>{{ $hora->diasH }}</td>
                        <td>{{ $hora->horaH }}</td>
                        <td>{{ $hora->nombreAs }}</td>
                        <td>
                        <a href="/horas/eliminar/{{$hora->diasH}}/{{$hora->horaH}}" onclick="return eliminarHora('Eliminar Hora')"> Eliminar</a>
                        </td>
                  </tr>
                  @endforeach
            </table>
            <a href="/horas/crear" id="nueva_hora">Nueva hora</a>
      </div>
</x-app-layout>

<script>
      function eliminarHora(value) {
            action = confirm(value) ? true : event.preventDefault()
      }
</script>