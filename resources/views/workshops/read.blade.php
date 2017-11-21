@extends('layouts.app')

@section('content')
<div class="container">
    <div class="panel panel-default">
        <div class="panel-body">              
            <div class="workshop">
                <div class="row">
                    <div class="col-md-6">
                        <img src="{{ asset($workshop->imageUrl)}}" alt="{{ $workshop->name }}" class="workshop-img img-responsive"/>
                    </div>
                    <div class="col-md-6">
                        <h2>{{ $workshop->name }}</h2>
                        <small>Geplaats op: {{ $workshop->created_at->format('d m Y')}}</small>
                        <p>{{ $workshop->description }}</p>  
                        <table class="table table-bordered">
                            <tr>
                                <th>Duur</th>
                                <td>{{ $workshop->length }}</td>
                            </tr>
                            <tr>
                                <th>Aantal deelnemers</th>
                                <td>{{ $workshop->participants }}</td>
                            </tr>
                            <tr>
                                <th>Toepassing</th>
                                <td>{{ $workshop->application }}</td>
                            </tr>
                        </table>
                    </div>
                    
                    

                </div>         
            </div>
        </div>
    </div> 
</div>
@endsection