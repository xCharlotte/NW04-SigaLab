@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row">

        @foreach ($competences as $competence)
          <div class="col-md-3">
            {{ $competence->name }}
            <img src="{{ $competence->imageUrl }}" class="img-fluid img-responsive">
            <input type="hidden" name="id" value="{{$competence->id}}"/>
            <input type="hidden" name="votes" value=""/>
          </div>
        @endforeach
  </div>
@endsection
