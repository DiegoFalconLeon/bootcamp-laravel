@extends('layouts/contentNavbarLayout')

@section('title', 'Usuarios Cridez')

@section('content')
<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">Usuarios /</span> Lista de Usuarios
</h4>
<div ><a href="/home" class="btn btn-primary">Crear Usuario</a></div></br>

<div class="card">
  {{-- <h5 class="card-header">Light Table head</h5> --}}
  <div class="table-responsive text-nowrap">
    <table class="table">
      <thead class="table-light">
        <tr>
          <th>Nombre Completo</th>
          <th>Email</th>
          <th>Area</th>
          <th>Estado</th>
          <th>Ocpiones</th>
        </tr>
      </thead>
      <tbody class="table-border-bottom-0">
        @foreach ($users as $user)
        <tr>
          <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$user->name ." ". $user->lastname}}</strong></td>
          <td>{{$user->email}}</td>
          <td>
            {{$user->userArea->name}}
            {{-- <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
              <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Lilian Fuller">
                <img src="{{asset('assets/img/avatars/5.png')}}" alt="Avatar" class="rounded-circle">
              </li>
              <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Sophia Wilkerson">
                <img src="{{asset('assets/img/avatars/6.png')}}" alt="Avatar" class="rounded-circle">
              </li>
              <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Christina Parker">
                <img src="{{asset('assets/img/avatars/7.png')}}" alt="Avatar" class="rounded-circle">
              </li>
            </ul> --}}
          </td>
          <td><span class="badge bg-label-{{Util::bagde($user->status)}} me-1">{{Util::estado($user->status)}}</span></td>
          <td>
            <a  href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> editar</a>
                <a  href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Borrar</a>

          </td>
        </tr>
        @endforeach

      </tbody>
    </table>
  </div>
</div>



@endsection