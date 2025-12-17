@extends('layouts.main_layout')

@section('content')
    <h3>Este texto faz parte da view</h3>

    {{-- renderizar o component --}}
    <x-my-component message="mensagem passada pra dentro do componente" />

    {{-- renderizar componente dentro de pasta --}}
    <x-admin.admin-card :name="$myName" teste="olá mundo"/>

    <h3>Este texto faz parte da view</h3>

    <p>{{ $myName }}</p>
@endsection