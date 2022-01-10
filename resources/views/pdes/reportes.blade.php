<!DOCTYPE html>
<html>
<body>
<table style="border: 1px solid #ffff;border-bottom: 1px solid #ffff;">
    @foreach($pdes as $pdess)
      <tr style="border-bottom: 2px solid #ffff;">
        <th >P</th>    
        <th >M</th>    
        <th >R</th>    
        <th >A</th>    
        <th >Estructura Programatica{{ $pdess->anio }}</th>
      </tr>    
      <tr style="border-bottom: 2px solid #ffff;">    
        <?php
          for($x = 1; $x <= 4; $x++){
            // echo $x;
            echo "<td> $pdess->id </td>";
          }
        ?>        
        <td >Eje {{ $pdess->eje }}</td>
      </tr>    
      <tr style="border-bottom: 2px solid #ffff;background-color: #16365C;color: #ffffff;text-align: center;">    
       <?php
          for($x = 1; $x <= 4; $x++){
            // echo $x;
            echo "<td> $pdess->id </td>";
          }
        ?>    
        <td  >Pilar {{ $pdess->pilar }}</td>       
      </tr>    
      <tr style="background-color: #16365C;color: #ffffff;text-align: center;border-bottom: 2px solid #000000;">   
      <?php
          for($x = 1; $x <= 4; $x++){
            // echo $x;
            echo "<td> $pdess->id </td>";
          }
        ?>   
        <td >Meta {{ $pdess->meta }}</td>
      </tr>    
      <tr style="border-bottom: 2px solid #ffff;background-color: #FCD5B4 ;color: #ffffff;text-align: center;">
       <?php
          for($x = 1; $x <= 4; $x++){
            // echo $x;
            echo "<td> $pdess->id </td>";
          }
        ?>         
        <td >Resultado {{ $pdess->resultado }}</td>
      </tr>
      <tr style="border-bottom: 2px solid #ffff;background-color: #FFFFFF ;color: #ffffff;text-align: center;">
        <?php
          for($x = 1; $x <= 4; $x++){
            // echo $x;
            echo "<td> $pdess->id </td>";
          }
        ?> 
          <td >Accion {{ $pdess->accion }} </td>
      </tr>
      <tr style="border-bottom: 2px solid #ffff;">
       <?php
          for($x = 1; $x <= 4; $x++){
            // echo $x;
            echo "<td> $pdess->id </td>";
          }
        ?> 
          <td >Pet {{ $pdess->pet }}</td>
      </tr>
    <hr style="background-color: #FABF8F;">
@endforeach
</table>
</body>
</html>

