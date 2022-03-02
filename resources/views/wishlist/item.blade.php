@extends('layouts.app')

@section('content')
    <div class="col">
        <div class="card">
            <div class="card-header">
                Lista létrehozás
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('items.store') }}" >
                    <label for=""></label>
                    <label for="name" class="col-form-label">Elem neve</label>
                    <input type="text" id="name" name="name" class="form-control">
                    <label for="desc" class="col-form-label">Leírás</label>
                    <input type="text" id="desc" name="desc" class="form-control">
                    <button type="submit" class="btn">Létrehoz</button>
                </form>
            </div>
        </div>
    </div>


@endsection