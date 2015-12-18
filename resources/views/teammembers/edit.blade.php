@extends('layouts.master')

@section('title')
    Edit Roster
@stop


@section('content')
<div class="container">
  <div class="row">
    <div class="body-content">

    <h1>Edit my Roster</h1>

    <form method='POST' action='/teammembers/edit'>

        <input type='hidden' value='{{ csrf_token() }}' name='_token'>

        <input type='hidden' name='id' value='{{ $teammember->id }}'>

        <div class='form-group'>
            <label>* First:</label>
            <input
                type='text'
                id='first'
                name='first'
                value='{{$teammember->first}}'
            >
        </div>

        <div class='form-group'>
            <label>* Last:</label>
            <input
                type='text'
                id='last'
                name='last'
                value='{{$teammember->last}}'
            >
        </div>

        <div class='form-group'>
         <label for='owner'>* Owner:</label>
           <input
               type='text'
               id='owner'
               name="owner"
               value='{{$logged->name}}'
               readonly
               >

       </div>

        <div class='form-group'>
            <label for='Team'>* Team:</label>
            <input
                type='text'
                id='team'
                name="team"
                value='{{$teammember->team}}'
                >
        </div>


        <div class='form-group'>
            <label for='Position'>* Position:</label>
            <input
                type='text'
                id='position'
                name="position"
                value='{{$teammember->position}}'
                >
         </div>


         <div class='form-group'>
              <label for='Keeper'>* Is this player a keeper:</label>
                 <input type="radio" name="keeper" value="1" checked> Yes
                 &nbsp;
                 <input type="radio" name="keeper" value="0"> No
         </div>

        <br>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </form>

    </div>
  </div>
</div>
@stop
