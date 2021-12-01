<!DOCTYPE html>
<html>

<body>
<h5 style="background-color: #C4BD97;color: #ffffff;border-bottom: 2px solid #000000;text-align: center;">Estructura Programatica</h5>
<table style="border: 1px solid #ddd;border-bottom: 1px solid #000000;">
    <thead>
    <tr>
        <th colspan="2" style="background-color: #FABF8F;color: #ffffff;text-align: center;border-bottom: 2px solid #000000;"><strong>Eje</strong></th>
        <th colspan="3" style="background-color: #16365C;color: #ffffff;text-align: center;border-bottom: 2px solid #000000;"><strong>Pilar</strong></th>
        <th colspan="3" style="background-color: #538DD5;color: #ffffff;text-align: center;border-bottom: 2px solid #000000;"><strong>Meta</strong></th>
        <th colspan="3" style="text-align: center;border-bottom: 2px solid #000000;"><strong>Accion</strong></th>

    </tr>
    </thead>
    <tbody>
    @foreach($pdes as $pdess)
        <tr style="border-bottom: 2px solid #000000;">
            <td colspan="2" style="background-color: #FABF8F;color: #000000; text-align: center;border-bottom: 2px solid #000000;">{{ $pdess->anio }}</td>
            @if($pdess->pilar1 != null)
                <td colspan="3" style="background-color: #16365C;color: #ffffff;border-bottom: 2px solid #000000;">

                    {{ $pdess->pilar1 }}
                </td>
            @endif



         
                
                 
                
                



            <td colspan="3" style="background-color: #538DD5;color: #000000;border-bottom: 2px solid #000000;">{{ $pdess->meta1 }}</td>
            <td colspan="3" style="text-align: center;border-bottom: 2px solid #000000;">{{ $pdess->accion }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>

