@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="col-sm-12 text-center">
    <h1>Elija una categoria</h1>
    <ul>
@forelse($categorias as $categoria)
   <li> <a href="{{route('jugar',['id' => $categoria->id])}}" style="color:black">{{$categoria->nombre}}</a></li>
@empty
    <li>No hay categorias que mostrar</li>
@endforelse
    </ul>
@endsection
