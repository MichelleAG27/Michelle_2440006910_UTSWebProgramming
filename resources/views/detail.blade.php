@extends('layout')
@section('konten')
    <div class="container">
        <h5 class="card-title">Book Detail</h5><br>
            <img src="{{ asset('storage/img/'.$book->image) }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Title    : {{$book->title}}</h5><br>
                    <h5 class="card-title">Author   : {{$book->author}}</h5><br>
                    <h5 class="card-title">Publisher: {{$book->publisher->name}}</h5><br>
                    <h5 class="card-title">Year     : {{$book->year}}</h5><br>
                    <h5 class="card-title">Synopsis : </h5>
                    <h5 class="card-title">{{$book->synopsis}}</h5><br>
                 </div>
     </div>
    <br>
@endsection
