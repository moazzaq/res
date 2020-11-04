@extends('backend.app')

@section('content')

           <h3> Welcome {{\Illuminate\Support\Facades\Auth::user()->name}}</h3>

@stop
