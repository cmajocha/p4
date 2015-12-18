@extends('layouts.master')

@section('title')
    All Players
@stop

@section('head')
    <!--<link rel="stylesheet" href="css/tablesorter.css"> -->
    <link rel="stylesheet" type="text/css" href="css/jquery.dataTables.css">
@stop


@section('content')


<div class="container">
  <div class="row">
    <div class="body-content">
    <h1>All Players <span class="glyphicon glyphicon-user"></span></h1>
    <hr />
    <p>Want to see which players can be kept? Need to know what round draft pick you'll be surrendering? Use the chart below to get all the answers you need.</p>
    <hr />


    <table id="all-players-table" class="display">
      <colgroup />
    	<colgroup span="8" title="All PFL Players on Rosters" />
    	<thead>
    		<tr>
          <th scope="col">Position</th>
          <th scope="col">First</th>
          <th scope="col">Last</th>
          <th scope="col">NFL Team</th>
          <th scope="col">PFL Team</th>
          <th scope="col">Draft Round</th>
          <th scope="col">Keeper Eligible?</th>
          <th scope="col">How Many Years?</th>
        </tr>
      </thead>

      <tfoot>
        <tr>
          <td><b>Position</b></td>
          <td><b>First</b></td>
          <td><b>Last</b></td>
          <td><b>NFL Team</b></td>
          <td><b>PFL Team</b></td>
          <td><b>Draft Round</b></td>
          <td><b>Keeper Eligible?</b></td>
          <td><b>How Many Years?</b></td>
        </tr>
      </tfoot>

      <tbody>

        @foreach($allplayers as $allplayer)

          <tr>
                  <td>{{ $allplayer->position}}</td>
                  <td>{{ $allplayer->first}}</td>
                  <td>{{ $allplayer->last}}</td>
                  <td>{{ $allplayer->nflteam}}</td>
                  <td>{{ $allplayer->plfteam}}</td>
                  <td>{{ $allplayer->draftround}}</td>
                  <td>{{ $allplayer->keepereligible}}</td>
                  <td>{{ $allplayer->howmanyyears}}</td>
          </tr>

        @endforeach

      </tbody>
    </table>
</div>
</div>
</div>

@stop

@section('body')
  <script type="text/javascript" src="/javascript/jquery.dataTables.js"></script>
  <script type="text/javascript" src="/javascript/allplayers.js"></script>
@stop
