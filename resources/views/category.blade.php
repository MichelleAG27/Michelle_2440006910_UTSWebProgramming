@extends('layout')

@section('konten')
    <div class="container">
        <h5 class="card-title">Book List</h5><br>
        <div class="row">
            @foreach($category->book as $book)
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
@endsection
