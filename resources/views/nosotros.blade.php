@extends('plantilla')

@section('seccion')





   <!-- Fonts -->
   <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

   <!-- Styles -->
   <style>
       html, body {
           background-color: #000;
           color: #636b6F;
           font-family: 'Nunito', sans-serif;
           font-weight: 200;
           height: 100vh;
           margin: 0;
       }
       </style>







    <h1>Equipo de trabajo </h1>
    <!-- Estructura de control para recorrer un array -->
    <!-- href crea la ruta /nosotros/item => item = [nombre] -->
    @foreach ($equipo as $integrante)
<a href="{{ route('nosotros', $integrante) }}" class="h4 text-danger"> {{$integrante}}</a><br>
    @endforeach
     
    <!-- La variable es creada cuando se presiona un nombre --> 
    @if(!empty($nombre))
        <!-- Se ejecuta si se pasa un nombre-->
        @switch($nombre)
            @case($nombre == 'Alejandro')
                <h2> El nombre es: {{$nombre}} </h2>
                @break
            @case($nombre == 'García')
                <h2> El nombre es: {{$nombre}} </h2>
                @break
            @case($nombre == 'Cetina')
                <h2> El nombre es: {{$nombre}} </h2>
                @break
            @default
                
        @endswitch
    @endif
@endsection