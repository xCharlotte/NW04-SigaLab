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
                    <th>Workshop</th>
                    <th>Toepassing</th>
                    <th>Aangemaakt op</th>
                    <th>Wijzigen</th>
                </tr>
                @foreach ($workshops as $workshop)
                <tr>
                    <td>{{ $workshop->name }}</td>
                    <td>{{ $workshop->application }}</td>
                    <td>{{ $workshop->created_at }}</td>
                    <td><a href="{{ route('update_workshop_form', ['id' => $workshop->id])}}">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true">Wijzigen</a></td>

                </tr>
                @endforeach
            </table>
        </div>
    </div> 
</div>
@endsection