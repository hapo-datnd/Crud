<?php
/**
 * Created by PhpStorm.
 * User: Dat
 * Date: 2/27/2019
 * Time: 10:14 AM
 */
?>
@extends('users.layout')
@section('title','Show-Member')
@section('content')
    <p>Xin chào! Bạn đang ở trang chỉnh sửa users </p>
    @if(count($errors)>0)
        <div class="alert alert-danger">
            @foreach($errors->all() as $err)
                {{$err}}<br>
            @endforeach
        </div>
    @endif
    <form action="{{route('users.update',$user->id)}}" method="POST">
        @method('PATCH')
        <input type="hidden" name="_token" value="{{csrf_token()}}"/>
        <div class="form-group">
            <label type="text">Name:</label>
            <input type="text" class="form-control" id="name" name="name" value="{{$user->name}}">
        </div>
        <div class="form-group">
            <label>Phân Quyền</label>
            <select class="form-control" name="level" id="level">
                @foreach ($level as $lvl )
                    <option @if($user->level === $lvl->id_level) selected="selected" @endif value="{{$lvl->id_level}}">{{$lvl->name_level}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group flex flex-row-reverse">
            <button type="submit" name="submit" class="btn btn-primary mb-2">Update member</button>
        </div>
    </form>
@endsection
