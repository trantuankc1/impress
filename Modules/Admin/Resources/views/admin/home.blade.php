@extends('admin::layouts.master')

@section('content')
    <div class="container">
        <h3 style="text-align: center; margin-top: 15px">Danh sách Admin</h3>
        <table class="table table-hover table-bordered" style="margin-left: 100px; margin-top: 20px">
            <tr>
                <td>ID</td>
                <td>Name</td>
                <td>Email</td>
                <td>Role</td>
            </tr>
            <tbody>
                @foreach($list as $admin)
                       <tr>
                           <td>{{ $admin->id }}</td>
                           <td>{{ $admin->name }}</td>
                           <td>{{ $admin->email }}</td>
                           @if($admin->role == 1)
                           <td>Supper admin</td>
                           @else
                               <td>Admin</td>
                           @endif
                       </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
<style>
    .hidden {
        display: none;
    }
</style>
