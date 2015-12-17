@extends('layouts.master')

@section('title')
    All Players
@stop

@section('head')
    <link rel="stylesheet" href="css/tablesorter.css">
@stop


@section('content')


<div class="container">
  <div class="row">
    <div class="body-content">
    <h1>All Players <span class="glyphicon glyphicon-user"></span></h1>
    <hr />
    <p>Want to see what players can be kept? Need to know what round draft pick you'll be surrendering? Use the chart below to get all the answers you need.</p>
    <hr />

    <table width="100%" id="all-players-table" class="tablesorter">
      <thead>
      <th width="15%">Position</th>
      <th width="10%">First</th>
      <th width="15%">Last</th>
      <th width="15%">NFL Team</th>
      <th width="10%">PFL Team</th>
      <th width="10%">Draft Round</th>
      <th width="10%">Keeper Eligible?</th>
      <th width="15%">How Many Years?</th>
      </thead>
      <tbody>
        @foreach($allplayers as $allplayer)
          <tr>
                  <td width="15%">{{ $allplayer->position}}</td>
                  <td width="10%">{{ $allplayer->first}}</td>
                  <td width="15%">{{ $allplayer->last}}</td>
                  <td width="15%">{{ $allplayer->nflteam}}</td>
                  <td width="10%">{{ $allplayer->plfteam}}</td>
                  <td width="10%">{{ $allplayer->draftround}}</td>
                  <td width="10%">{{ $allplayer->keepereligible}}</td>
                  <td width="15%">{{ $allplayer->howmanyyears}}</td>
          <tr>
        @endforeach
      </tbody>
    </table>
</div>
</div>
</div>

@stop

@section('body')
    <script type="text/javascript" src="/javascript/jquery.tablesorter.js"></script>
    <script type="text/javascript" src="/javascript/allplayers.js"></script>
@stop
