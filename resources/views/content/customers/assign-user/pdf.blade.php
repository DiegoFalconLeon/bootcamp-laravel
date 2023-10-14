<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        @page {
            font-family: Arial;
            font-size: 13px;
            margin: 0cm 0cm;
        }
        body {
            margin: 1.5cm;
            font-family: Arial;
            color: #666;
        }
        .table {
            width: 100%;
            border-spacing: 0;
        }
        .table tr {
            width: 100%;
            border-bottom: 1px solid #666;
        }
        .table thead {

            border-bottom: 1px solid #666;
        }
        .table td {
            box-sizing: border-box;
            padding: 5px;
            border-bottom: 1px solid #666;
        }

        .table thead th {
            background: #fac64e;
            color: #666;
            text-align: center;
        }
        .table {
            border: 1px solid #666;
            border-radius: 10px;
        }
        .table tbody tr {
            border-bottom: 1px solid #666;
        }
        .center {
            text-align: center;
        }
        .cont-logo {
            width: 100%;
            margin-bottom: 2em;
            text-align: center;
        }
        .cont-info {
            width: 100%;
            /* text-align: center; */
        }
        header {
            position: fixed;
            top: 0cm;
            left: 0cm;
            right: 0cm;
            height: 7cm;
            text-align: center;
            line-height: 30px;
        }
        .h {width: 100%;
            border-spacing: 0;}
        .tfin td{
            padding: 5px 0;
        }
    </style>
</head>
<body>
    <table class="h">
        <tr>
            <td width="200px" class="center">
                <img src="{{asset('companies/default.png')  }}" height="60px" style="text-align:center" border="0">
                <br>{{ $company->name }}
                <br>RUC: {{ $company->document }}
            </td>
            <td class="center"><h2><strong>Lista de Posibles Clientes</strong></h2>
            <td class="center">Fecha: {{ now(); }}</td>
        </tr>
    </table>
    <br>
    <main>
        <table class="table" border="0">
            <thead>
                <tr>
                  <th>Nombre del Cliente</th>
                  <th>Area de consulta</th>
                  <th>Detalle de consulta</th>
                  <th>Monto</th>
                  <th>Trabajador Asignado</th>
                  <th>Estado</th>
                </tr>
            </thead>
            <tbody
                @php
                  $aceptado,$noaceptado,$pendiente = 0;
                @endphp
                @foreach ($customers_users as $customer_user)
                <tr>
                  <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$customer_user->customers->name ." ". $customer_user->customers->lastname}}</strong></td>
                  <td>{{$customer_user->areas->name}}</td>
                  <td>{{$customer_user->description}}</td>
                  <td>{{$customer_user->amount}}</td>
                  <td>{{$customer_user->users->name." ".$customer_user->users->lastname}}</td>
                  @if ($customer_user->status == 1) {{--aceptado--}}
                    <td style=" background: greenyellow;">
                      <span >{{Util::cstatus($customer_user->status)}}</span>
                    </td>
                  @elseif ($customer_user->status == 2){{--pendiente--}}
                    <td style=" background: yellow;">
                      <span >{{Util::cstatus($customer_user->status)}}</span>
                    </td>
                  @else
                  <td style=" background: red; color:white">{{--rechazado--}}
                    <span >{{Util::cstatus($customer_user->status)}}</span>
                  </td>
                  @endif
                </tr>
                @endforeach
            </tbody>
        </table>
        <br>
        <br>
    </main>
</body>
</html>
