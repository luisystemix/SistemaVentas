@extends('template')

@section('title','Crear categoria')

@push('css')

@endpush

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4 text-center">Crear Categorias</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{route('panel')}}">Inicio</a></li>
        <li class="breadcrumb-item"><a href="{{route('categorias.index')}}">Categorias</a></li>
        <li class="breadcrumb-item active">Crear Categorias</li>
    </ol>
    <div class="container w-100">
        <form action="" class="post">
            <div class="row g-3">
                
            </div>
        </form>
    </div>
</div>        
@endsection

@push('js')

@endpush