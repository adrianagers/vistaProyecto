@extends('layouts.plantilla.newgame')
@section('content')
  
<div class="container flex-center">
  <div class="row">
    <div class="col">
    </div>
    <div class="col">

        <div class="container">
                <a href="{{ route('game.create')}}" class="btn btn-warning form-control d-flex align-items-center">Cree una nueva partida</a><br>
        </div> 
    </div>
    <div class="col">
    <div class="container" widht="">
                <a href="{{ route('game.index')}}"width=45px; class="btn btn-danger form-control d-flex align-items-center">Ingrese a una partida</a>
        </div> 
    </div>
    <div class="col">
   
    </div>
  </div>
</div>




 
                        
    @endsection

