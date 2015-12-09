@extends('layouts.master')

@section('title')
    My Roster
@stop

@section('content')
<div class="container">
  <div class="row">
<div class="body-content">
    <h1>My Roster <span class="glyphicon glyphicon-user"></span></h1>
<hr />
<p>Welcome to your team HQ! Manage your roster here. Keep track of your current keepers, and make the necessary edits as your plans and priorities change.</p>
<hr />
    <table width="100%">
      <thead>
        <th width="20%">First</th>
        <th width="20%">Last</th>
        <th width="20%">Team</th>
        <th width="20%">Position</th>
        <th width="10%">Keeper</th>
      <th width="10%">Update</th>
    </thead>
      <tbody>
        <tr>
          <td></td>
        </tr>
      </tbody>
    </table>

    @if(sizeof($teammembers) == 0)
        <p class="empty"><span class="glyphicon glyphicon-pushpin"></span> Your roster is empty. You can add players to your team <a href="/teammembers/create">here</p>
    @else
<table width="100%" id="roster-table">
  <tbody>
        @foreach($teammembers as $teammember)
          <tr>
                  <td  width="20%">{{ $teammember->first}}</td>
                  <td width="20%">{{ $teammember->last}}</td>
                  <td width="20%">{{ $teammember->team}}</td>
                  <td width="20%">{{ $teammember->position}}</td>
                  <?php $keeper = $teammember->keeper ? 'Yes' : 'No' ; ?>
                  <td class="{{$keeper ? 'highlighted' : 'Yes'}}'"width="10%">{{$keeper}}</td>
                  <td width="10%">  <a href='/teammembers/edit/{{$teammember->id}}'>Edit</a> | <a href='/teammembers/confirm-delete/{{$teammember->id}}'>Delete</a></td>
          <tr>
        @endforeach
  </tbody>
</table>
    @endif
</div>
</div>
</div>

<!--
<script type="text/javascript">

var td = document.getElementById('roster-table');
var green = "#00FF00";
var white = "#FFF";
if (keeper.value = true) {
td.style.backgroundColor = green;
} else {
td.style.backgroundColor = white;
}

</script> !>


@stop
