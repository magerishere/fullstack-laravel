@extends('back.layouts.master')

@section('content')
    <x-back.card>
        <livewire:back.user-edit-form :user="$user"/>
    </x-back.card>

@endsection
