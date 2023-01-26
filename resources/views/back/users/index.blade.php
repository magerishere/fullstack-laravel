@extends('back.layouts.master')

@section('content')
    <x-back.card>
        <x-back.data-table>
            <thead>
            <tr>
                <th>#</th>
                <th>{{__('back/global.full_name')}}</th>
                <th>{{__('back/global.email')}}</th>
                <th>{{__('back/global.operation')}}</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>
                        <x-back.link href="{{route('admin.users.edit',$user->id)}}">
                            <i class="fa fa-edit"></i>
                        </x-back.link>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </x-back.data-table>
    </x-back.card>

@endsection
