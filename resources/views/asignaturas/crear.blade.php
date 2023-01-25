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
      <h2>Nueva asignatura</h2>
      <div>
            <form action="/asignaturas/crear" method="POST">
                  @csrf
                  <label>Código:</label>
                  <input type="text" name="codAs" placeholder="codigo">
                  <label>Nombre:</label>
                  <input type="text" name="nombreAs" placeholder="nombre">
                  <label>Nombre Corto:</label>
                  <input type="text" name="nombreCortoAs" placeholder="nombre corto">
                  <label>Profesor:</label>
                  <input type="text" name="profesorAs" placeholder="profesor">
                  <label>Color:</label>
                  <input type="color" name="colorAs" placeholder="color">
                  <input type="hidden" value="{{ Auth::user()->id }}" name="user_id" placeholder="user_id">
                  <input type="submit" value="Guardar">
            </form>
            <a href="/asignaturas" id="volver">Volver a las lista</a>
      </div>
</x-app-layout>