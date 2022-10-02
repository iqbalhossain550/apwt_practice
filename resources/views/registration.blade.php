@extends('layouts.app')
@section('content')
<form action="/register" method="POST">
{{csrf_field()}}
Name: <input type="text" name="name" value="{{old('name")}}>
@if ($errors->has('name'))
<span class="">
    <strong>{{$error->first(name)}}</strong>
</span>


@endif<br>

Propession: <input type="text" name="profession" value="{{old('profession")}}>
@if($errors->has(profession))
<span class="">
    <strong>{{$error->first(profession)}}</strong>
</span>
@endif<br>

Address: <input type="text" name="address" value="{{old('address")}}>
@if($errors->has(address))
<span class="">
    <strong>{{$error->first(address)}}</strong>
</span>
@endif<br>
<input type="submit" name="submit">
</form>
@endsection

