@extends('layouts.app')

@section('content')
<div class="container">
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="workshopList front-end">
                <div class="row">
                    @foreach ($workshops as $workshop)
                        <div class="col-md-4">
                            <div class="workshop">
                                <a href="{{ route('read_workshop', ['id' => $workshop->id])}}">
                                    <img src="{{ asset($workshop->imageUrl)}}" alt="{{ $workshop->name }}" class="workshop-img img-responsive"/>
                                </a>
                                <h2>{{ $workshop->name }}</h2>
                                {{-- <small>{{ $workshop->created_at->format('d m Y')}}</small> --}}
                                <p>{{ str_limit($workshop->description,120) }}</p>   


                                {{-- $value = str_limit('The PHP framework for web artisans.', 7);         --}}
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div> 
</div>
@endsection