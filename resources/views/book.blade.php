@extends('admin.dashboard')

@section('content')
@foreach($items as $item)
  {{ $item }}
@endforeach
@endsection
