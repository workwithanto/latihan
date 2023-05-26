@extends('layouts.app')

@section('content')


    <div class="container">

        <div class="row">
            <form action="/" method="get">
                <select class="form-control" name="category" id="">
                    <option selected disabled value="">Pilih</option>
                    @foreach($category as $item)
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                </select>
                <button class="btn btn-primary" type="submit">Cari</button>
            </form>
        </div>
        
        <div class="row">
            @foreach($post as $item)
                <div class="col-md-4 mb-3">
                    <div class="card" style="width: 100%; height: 100%">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->title }}</h5>
                            <span class="card-subtitle mb-2 mt-2 text-body-secondary">{{ $item->user->name }}</span>
                            <p class="card-text">{!! $item->body !!}</p>
                            <a href="/blog/{{$item->slug}}" class="card-link">Selengkapnya</a>
                            <br>
                            <span>Category: {{$item->category->name}}</span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>


@endsection