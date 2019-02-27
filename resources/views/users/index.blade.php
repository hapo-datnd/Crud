<?php
/**
 * Created by PhpStorm.
 * User: Dat
 * Date: 2/27/2019
 * Time: 8:50 AM
 */
?>
@extends('users.layout')
@section('title','Show-Member')
@section('content')
    <p>Xin chào! Bạn đang ở trang quản trị users </p>
    <div class="flex flex-row-reverse header">
        <a href="users/create">Thêm thành viên</a>
    </div>
    <table class="table table-bordered">
        <thead>
        <tr>
            <td>ID</td>
            <td>User Name</td>
            <td>Email</td>
            <td>Phân Quyền</td>
            <td>Hành Động</td>
        </tr>
        </thead>
        <tbody>
        @foreach ($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>
                    @if($user->level === 1)
                        Candidate
                    @elseif($user->level === 2)
                        HR
                    @elseif($user->level === 3)
                        Admin
                    @endif
                </td>
                <td class="justify-content-center flex align-content-around">
                    <a href="users/{{$user->id}}/edit"><button type="button" class="btn btn-outline-primary">Sửa</button></a>
                    <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#myModal"> Xóa </button>
                    <div class="modal" id="myModal">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <p>Bạn có chắc chắc muốn <b>{{$user->name}}</b> không ? </p>
                                </div>
                                <form action="{{route('users.destroy',$user->id)}}" method="post">
                                    @method('DELETE')
                                    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                                    <div class="message">
                                        <button type="submit" name="submit" class="btn btn-outline-danger">Xóa</button>
                                        <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Không Xóa</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
