@extends('layouts.app2')

@section('content')
    <x-container>
        <x-alert type="danger">
            jelou guys
        </x-alert>
    </x-container>

    <script>
        //let posts={!! json_encode($posts) !!}
        let posts = @json($posts);
        console.log(posts);
    </script>
@endsection
