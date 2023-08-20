@extends('app')
@section('content')
<div class="h-100 d-flex justify-content-center align-items-center row row-cols-1 row-cols-md-3 g-4">
    @foreach ($candidates as $candidate)
    <div class="col">
        <div class="card text-center">
            <div class="card-header">
                Cakomting No {{$loop->iteration}}
            </div>
            <div class="card-body">
                <h5 class="card-title">{{$candidate->name}}</h5>
                <p class="card-text">{!! nl2br($candidate->objective) !!}</p>
                <form method="POST" action="/vote">
                    @csrf
                    @method('POST')
                    <input type="text" name="id" value="{{$candidate->id}}" hidden>
                    <button type="submit" class="btn btn-primary">Coblos</button>
                </form>
            </div>
            <div class="card-footer text-body-secondary">
                NRP {{$candidate->id}}
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection