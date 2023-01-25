<style>
      main {

            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding-top: 25vh;
      }

      #contenedor{
            margin-bottom: 10%;
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
      <div id="contenedor">
            <p> Código: {{ $asignatura->codAs}}</p>
            <p> Nombre: {{ $asignatura->nombreAs}}</p>
            <p> Nombre corto: {{ $asignatura->nombreCortoAs}}</p>
            <p> Profesor: {{ $asignatura->profesorAs}}</p>
            <p> Color: {{ $asignatura->colorAs}}</p>
      </div>
      <a href="/asignaturas" id="volver">Volver a las lista</a>
</x-app-layout>