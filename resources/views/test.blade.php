@extends(layout)
@section('content')
@foreach($posts as $post)
{{$posts->title}}


endforeach
@endsection('content')