<!DOCTYPE html>
<html>

<body>
<h5 style="background-color: #C4BD97;color: #ffffff;border-bottom: 2px solid #000000;text-align: center;">Estructura Programatica</h5>
<table style="border: 1px solid #ffff;border-bottom: 1px solid #ffff;">
    <thead>
    <tr>
        <th colspan="2" style="background-color: #ffff;color: #0000;text-align: center;border-bottom: 2px solid #000000;"><strong>Año</strong></th>
        <th colspan="7" style="background-color: #16365C;color: #ffffff;text-align: center;border-bottom: 2px solid #000000;"><strong>Pilar</strong></th>
        <th colspan="7" style="background-color: #16365C;color: #ffffff;text-align: center;border-bottom: 2px solid #000000;"><strong>Eje</strong></th>
        <th colspan="7" style="background-color: #16365C;color: #ffffff;text-align: center;border-bottom: 2px solid #000000;"><strong>Meta</strong></th>
        <th colspan="5" style="background-color: #FABF8F;text-align: center;border-bottom: 2px solid #000000;"><strong>Acción</strong></th>
        <th colspan="5" style="background-color: #FABF8F;color: #0000;text-align: center;border-bottom: 2px solid #000000;"><strong>Resultado</strong></th>
        <th colspan="5" style="text-align: center;border-bottom: 2px solid #000000;"><strong>PET</strong></th>
    </tr>
    </thead>
    <tbody>
        @foreach($pdes as $pdess)
            <tr style="border-bottom: 2px solid #ffff;">
                <td colspan="2" rowspan="2" style="background-color: #FABF8F;color: #000000; text-align: center;border-bottom: 2px solid #000000;">{{ $pdess->anio }}</td>
              
                <td colspan="7" rowspan="2" style="background-color: #16365C;color: #ffffff;text-align: center;border-bottom: 2px solid #000000;"> {{ $pdess->pilar }}</td>

                <td colspan="7" rowspan="2" style="background-color: #16365C;color: #ffffff;text-align: center;border-bottom: 2px solid #000000;"> {{ $pdess->eje }}</td>

                <td colspan="7" rowspan="2" style="background-color: #16365C;color: #ffffff;text-align: center;border-bottom: 2px solid #000000;"> {{ $pdess->meta }}</td>

                <td colspan="5" rowspan="2" style="background-color: #FABF8F;text-align: center;border-bottom: 2px solid #000000;"> {{ $pdess->accion }}</td>

                <td colspan="5" rowspan="2" style="background-color: #FABF8F;color: #0000;text-align: center;border-bottom: 2px solid #000000;"> {{ $pdess->resultado }}</td>

                <td colspan="5" rowspan="2" style="text-align: center;border-bottom: 2px solid #000000;"> {{ $pdess->pet }}</td>
            </tr><hr style="background-color: #FABF8F;">
        @endforeach
    </tbody>
</table>
</body>
</html>

