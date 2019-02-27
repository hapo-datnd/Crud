<?php
/**
 * Created by PhpStorm.
 * User: Dat
 * Date: 2/27/2019
 * Time: 9:17 AM
 */
?>

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
    <p>Xin chào! Bạn đang ở thêm users </p>
    @if(count($errors)>0)
        <div class="alert alert-danger">
            @foreach($errors->all() as $err)
                {{$err}}<br>
            @endforeach
        </div>
    @endif
    <form action="{{route('users.store')}}" method="POST">
        <input type="hidden" name="_token" value="{{csrf_token()}}"/>
        <div class="form-group">
            <label type="text">Name:</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="form-group">
            <label for="email">Email address:</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>
        <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" id="pwd" name="password">
        </div>
        <div class="form-group">
            <label for="pwd">Retype password:</label>
            <input type="password" class="form-control" id="pwd" name="passAgain">
        </div>
        <div class="form-group">
            <label>Phân Quyền</label>
            <select class="form-control" name="level" id="level">
                @foreach ($level as $lvl )
                    <option value="{{$lvl->id_level}}">{{$lvl->name_level}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group flex flex-row-reverse">
            <button type="submit" name="submit" class="btn btn-primary mb-2">Add member</button>
        </div>
    </form>
@endsection
