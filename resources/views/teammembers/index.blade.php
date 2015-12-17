@extends('layouts.master')

@section('title')
    My Roster
@stop

@section('head')
    <link rel="stylesheet" href="css/tablesorter.css">
@stop


@section('content')


<div class="container">
  <div class="row">
    <div class="body-content">
    <h1>My Roster <span class="glyphicon glyphicon-user"></span></h1>
    <hr />
    <p>Welcome to your team HQ! Manage your roster here. Keep track of your current keepers, and make the necessary edits as your plans and priorities change.</p>
    <hr />

    @if(sizeof($teammembers) == 0)
    <p class="empty"><span class="glyphicon glyphicon-pushpin"></span> Your roster is empty. You can add players to your team <a href="/teammembers/create">here</p>
    @else
    <table width="100%" id="roster-table" class="tablesorter">
      <thead>
      <th width="20%">First</th>
      <th width="20%">Last</th>
      <th width="20%">Team</th>
      <th width="20%">Position</th>
      <th width="10%">Keeper</th>
      <th width="10%">Update</th>
      </thead>
      <tbody>
        @foreach($teammembers as $teammember)
          <tr class="{{$teammember->keeper ? 'highlighted' : 'Yes'}}">
                  <td  width="20%">{{ $teammember->first}}</td>
                  <td width="20%">{{ $teammember->last}}</td>
                  <td width="20%">{{ $teammember->team}}</td>
                  <td width="20%">{{ $teammember->position}}</td>
                  <?php $keeper = $teammember->keeper ? 'Yes' : 'No' ; ?>
                  <td width="10%">{{$keeper}}</td>
                  <td width="10%">  <a href='/teammembers/edit/{{$teammember->id}}'>Edit</a> | <a href='/teammembers/confirm-delete/{{$teammember->id}}'>Delete</a></td>
          <tr>
        @endforeach
      </tbody>
    </table>
    @endif
</div>
</div>
</div>

@stop

@section('body')
    <script type="text/javascript" src="/javascript/jquery.tablesorter.js"></script>
    <script type="text/javascript" src="/javascript/rostertable.js"></script>
@stop
