@extends('layout')
@section('konten')
    <div class="container">
        @foreach($publishers as $publisher)
                <div class="row">
                    <div class="col-3">
                        <img src="{{ asset('storage/img/'.$publisher->image) }}" class="card-img-top" alt="...">
                    </div>
                    <div class="col-sm">
                            <div class="card-body">
                                <div class="col-9">
                                    <p class="card-text">Publisher Name : {{ $publisher->name }}</p>
                                    <p class="card-text">Address        :{{ $publisher->address }}</p>
                                    <p class="card-text">Phone          :{{ $publisher->phone }}</p>
                                    <p class="card-text">Email :{{ $publisher->email }}</p>
                                </div>
                            </div>
                    </div>
                </div>
    </div>
        <div class="container">
            <div class="row">
                @foreach($publisher->book as $book)
                    <div class="col-sm-4">
                        <div class="card" style="width: 18rem;">
                            <img src="{{ asset('storage/img/'.$book->image) }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{ $book->title }}</h5>
                                <p class="card-text">by</p>
                                <p class="card-text">{{ $book->author }}</p>
                                <a href="{{ url('detail', ['id'=>$book->id]) }}" class="btn btn-primary">Detail</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <br>
    @endforeach
@endsection
