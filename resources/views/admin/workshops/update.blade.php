@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
        @if (Session::has('message'))
            <div class="alert alert-success">{{ Session::get('message') }}</div>
        @endif
        <div class="panel panel-default">
            <div class="panel-heading">Adding a workshop</div>
            <div class="panel-body">
                <a href="{{ route('workshops') }}" class="btn btn-primary">Terug naar lijst</a>
            </div>

            <div class="panel-body">
              @if (count($errors) > 0)
                  <div class="alert alert-danger">
                      <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
                @endif

                 <form method="POST" action="{{route('update_workshop')}}" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    
                    <div class="form-group {{ $errors->has('name') ? ' has-errors' : '' }}">
                        <label for="name">Naam</label>
                        <input type="text" class="form-control" name="name"
                            placeholder="naam" id="name"
                            value="{{ $workshop->name }}">
                    </div>

                    <div class="form-group {{ $errors->has('description') ? ' has-errors' : '' }}">
                      <label for="description">Beschrijving</label>
                      <textarea class="form-control" name="description"placeholder="Beschrijving" id="description" style="min-height:140px;">{{ $workshop->description }}</textarea>
                    </div>

                    <div class="form-group {{ $errors->has('length') ? ' has-errors' : '' }}">
                      <label for="length">Duur</label>
                      <input type="text" class="form-control" name="length"
                        placeholder="75 minuten" id="length"
                        value=" {{ $workshop->length }}">
                    </div>

                    <div class="form-group {{ $errors->has('participants') ? ' has-errors' : '' }}">
                      <label for="participants">Aantal deelnemers</label>
                      <input type="text" class="form-control" name="participants"
                        placeholder="5 –15 personen" id="participants"
                        value="{{ $workshop->participants }}">
                    </div>

                    <div class="form-group {{ $errors->has('application') ? ' has-errors' : '' }}">
                      <label for="application">Toepassing</label>
                      <input type="text" class="form-control" name="application"
                        placeholder="Training/Workshop" id="application"
                        value="{{ $workshop->application }}">
                    </div>

                    <div class="form-group file upload">
                      <label for="image">Workshop Afbeelding</label> 
                      <input type="file" name="file" id="image">
                    </div>

                    <div style="text-align:left;">
                        <input type="submit" value="Workshop opslaan" class="save btn button btn-primary"/>
                    </div>
               </form>
            </div>
        </div>
      </div>
  </div>
</div>
@endsection

