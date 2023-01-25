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
            border-collapse: collapse;
            width: 100%;
      }

      th {
            height: 70px;
      }

      td {
            height: 30px;
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
</style>

<x-app-layout>
      <table>
      <tr>
            <th>Lunes</th>
            <th>Martes</th>
            <th>Miercoles</th>
            <th>Jueves</th>
            <th>Viernes</th>

      </tr>
      <?php
            $indice_array = 0;
            for($i = 8; $i < 14; $i++){
                  echo "<tr>";
                  for($j = 1; $j < 6; $j++){
                        if(isset($horario[$indice_array]) && ($i == $horario[$indice_array]->horaH) && ($j == $horario[$indice_array]->diasH)){
                              echo '<td style=background-color:'.$horario[$indice_array]->colorAs.'>'.$horario[$indice_array]->nombreAs.'</td>';
                              $indice_array++;
                        }else{
                              echo "<td style=color:gray>Vacío</td>";
                        }
                  }
                  echo "</tr>";
            }
      ?>
      </table>
</x-app-layout>

<script>
</script>