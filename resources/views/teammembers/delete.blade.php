@extends('layouts.master')

@section('title')
    Remove Player from Roster
@stop


@section('content')
<div class="container">
  <div class="row">
    <div class="body-content">
      <h1>Remove Player</h1>

      <p>
        Are you sure you want to remove <strong><em>{{$teammember->first}} {{$teammember->last}}</em></strong> from your roster?
      </p>

      <p>&nbsp;</p>

      <p>
      <button type="button" class="btn btn-danger">
        <a href='/teammembers/delete/{{$teammember->id}}'>Drop from Roster</a>
      </button>
     </p>

    </div>
  </div>
</div>
@stop
