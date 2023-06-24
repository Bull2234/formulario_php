<table>
   <thead>
      <tr>
      <th>Nombres</th>
      <th>Apellidos</th>
      <th>Sexo</th>
      <th>Fecha Nac</th>
      <th>Tipo Ide</th>
      <th>Numero Id</th>
      <th>Correo</th>
      <th>Telefono</th>
      <th>Direcion</th>
      <th>Password</th>
      </tr>
   </thead>

<tbody>
<?php
include("conecion.php");

    $sql = "SELECT * FROM estudiante";
    $resultado = mysqli_query($conexion, $sql);
    while ($arr = mysqli_fetch_array($resultado)){
        echo "<tr>";
        echo "<td>" . $arr['nombres'] . "</td>";
        echo "<td>" . $arr['apellidos'] . "</td>";
        echo "<td>" . $arr['sexo'] . "</td>";
        echo "<td>" . $arr['fecha_nac'] . "</td>";
        echo "<td>" . $arr['tipo_id'] . "</td>";
        echo "<td>" . $arr['num_ide'] . "</td>";
        echo "<td>" . $arr['correo'] . "</td>";
        echo "<td>" . $arr['telefono'] . "</td>";
        echo "<td>" . $arr['direcion'] . "</td>";
        echo "<td>" . $arr['contrasena'] . "</td>";
        echo "</tr>";
    }
    mysqli_close($conexion);
    ?>
    </tbody>
    </table>

