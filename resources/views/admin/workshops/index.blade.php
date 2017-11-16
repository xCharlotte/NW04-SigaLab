@extends('layouts.app')

@section('content')
<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading">Lijst met workshops</div>
            <div class="panel-body">
                <a href="{{route('create_workshop')}}" class="btn btn-primary">Workshop Toevoegen</a>
            </div>

        <div class="panel-body">
            <table class="table table-bordered">
                <tr>
                    <th></th>
                    <th>Workshop</th>
                    <th>Aangemaakt op</th>
                    <th>Wijzigen</th>
                </tr>
                @foreach ($workshops as $workshop)
                    <div class="workshop">
                        <tr>
                            <td>
                                <a href="{{ route('read_workshop', ['id' => $workshop->id])}}">
                                <img src="{{ asset($workshop->imageUrl)}}" alt="{{ $workshop->name }}" class="workshop-img img-responsive" style="width:180px;"/>
                                </a>
                            </td>
                            <td>{{ $workshop->name }}</td>
                            <td><small>{{ $workshop->created_at->format('d m Y')}}</small></td>
                            <td>
                                <a href="{{ route('update_workshop_form', ['id' => $workshop->id])}}">
                                    <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                    Wijzigen
                                </a>
                            <td>
                        </tr>
                    </div>
                @endforeach
            </table>
        </div>
    </div> 
</div>
@endsection