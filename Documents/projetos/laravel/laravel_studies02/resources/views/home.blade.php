@extends('layouts.main_layout')

@section('content')
    <h3>Este texto faz parte da view</h3>

    {{-- renderizar o component --}}
    <x-my-component />

    {{-- renderizar componente dentro de pasta --}}
    <x-admin.admin-card />

    <h3>Este texto faz parte da view</h3>
@endsection