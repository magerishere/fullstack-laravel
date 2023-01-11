@extends('back.layouts.master')

@section('content')
    <x-back.card>
        <x-back.data-table>
            <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                </tr>
            @endforeach
            </tbody>
        </x-back.data-table>
    </x-back.card>

@endsection
