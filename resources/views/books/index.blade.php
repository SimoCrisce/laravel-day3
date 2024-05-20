@extends('template.base')

@section('title', 'Lista libri')

@section('content')
    <div class="row">
        @foreach($books as $book)
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{$book->title}}</h5>
                        <h5 class="card-title">Autore: {{$book->author}}</h5>
                        <div class="badge bg-secondary">{{$book->category}}</div>
                        <div class="d-flex">
                            <a href="{{route('books.show', ['id' => $book->id])}}">Dettagli</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection