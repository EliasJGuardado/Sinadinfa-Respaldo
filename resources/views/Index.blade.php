@extends('layouts.app')
@section ('contenido')
    <template v-if="menu==0">
        <example-component></example-component>
    </template>
    <template v-if="menu==1">
        <Categorias></Categorias>
    </template>
@endsection