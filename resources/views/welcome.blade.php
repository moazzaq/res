@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
           @foreach($foods as $food)
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">{{$food->name}} | Category {{$food->category->name}}</div>

                        <div class="card-body">
                            <img width="30%" src="{{asset('food/'.$food->image)}}" alt="">
                        </div>
                    </div>
                </div>
               @endforeach
        </div>
    </div>
@endsection
