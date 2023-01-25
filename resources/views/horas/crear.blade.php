<style>
      body {
            margin: auto;
            padding: 50px;
      }

      input[type=text],
      select {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
      }

      input[type=submit] {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
      }

      input[type=submit]:hover {
            background-color: #45a049;
      }

      div {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
      }

      #volver{
            border: 1px solid black;
            border-radius: 10px;
            padding: 5px;
      }

      #volver:hover{
            background-color: #AFE1E1;
      }
</style>

<x-app-layout>
      <h2>Nueva hora</h2>
      <div>
            <form action="/horas/crear" method="POST">
                  @csrf

                  <label for="horaH">Hora:</label>
                  <select name="horaH">
                        <option value="8">8:00 - 9:00</option>
                        <option value="9">9:00 - 10:00</option>
                        <option value="10">10:00 - 11:00</option>
                        <option value="11">11:00 - 12:00</option>
                        <option value="12">12:00 - 13:00</option>
                        <option value="13">13:00 - 14:00</option>
                  </select>

                  <label for="diasH">Dia:</label>
                  <select name="diasH">
                        <option value="1">Lunes</option>
                        <option value="2">Martes</option>
                        <option value="3">Miercoles</option>
                        <option value="4">Jueves</option>
                        <option value="5">Viernes</option>
                  <select>
                  <label for="cod_as">Asignatura:</label>
                  <select name="cod_as">
                        @foreach ($asignaturas as $asignatura)
                        <option value="{{ $asignatura->codAs }}">{{ $asignatura->nombreAs }}</option>
                        @endforeach
                  </select>
                  <input type="submit" value="Guardar">
            </form>
            <a href="/horas" id="volver">Volver a la lista</a>
      </div>
</x-app-layout>