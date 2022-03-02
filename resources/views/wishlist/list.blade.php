@extends('layouts.app')

@section('content')
    <div class="col">
        <div class="card">
            <div class="card-header">
                Lista létrehozás
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('listas.store') }}" >
                    <label for=""></label>
                    <label for="name" class="col-form-label">Lista neve</label>
                    <input type="text" id="name" name="name" class="form-control">
                    <label for="member" class="col-form-label">Member</label>
                    <input type="text" id="member" name="member" class="form-control">
                    <button type="submit" class="btn">Létrehoz</button>
                </form>
            </div>
        </div>
    </div>


@endsection