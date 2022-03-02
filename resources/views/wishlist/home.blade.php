@extends('layouts.app')

@section('content')

@endsection

@section('js')
    <script>
        let lists, items;

        let getLists = fetch("https://api.sunyiuborka.works/api/listas", {
            method: "GET",
        }).then(r=>r.json()).then(d=>lists = d)
        let allFetch = Promise.all([getLists]);
        console.log()
        allFetch.then()
        function show() {
            lists.forEach(item =>{
                console.log(item)
            })
        }
        //document.querySelector('.row').innerHTML = "{{Auth::user()->email}}";
    </script>
@endsection
