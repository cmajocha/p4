@extends('layouts.master')

@section('title')
    Add a Player to my Roster
@stop


{{--
This `head` section will be yielded right before the closing </head> tag.
Use it to add specific things that *this* View needs in the head,
such as a page specific styesheets.
--}}
@section('head')
@stop


@section('content')
<div class="container">
  <div class="row">
    <div class="body-content">
    <h1>Add a new player to your roster</h1>
    <hr />

<!--Displays an error message if required form fields are not filled out -->
<div class="error-message">
    @if(count($errors) > 0)
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
</div>
    <form method='POST' action='/teammembers/create'>

        <input type='hidden' value='{{ csrf_token() }}' name='_token'>

        <div class='form-group'>
            <label>* First:</label>
            <input
                type='text'
                id='first'
                name='first'
            >
        </div>

        <div class='form-group'>
            <label>* Last:</label>
            <input
                type='text'
                id='last'
                name='last'
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
            <label for='team'>* Team:</label>
            <input
                type='text'
                id='team'
                name="team"
                >
        </div>

        <div class='form-group'>
            <label for='position'>* Position:</label>
            <input
                type='text'
                id='position'
                name="position"
                >
        </div>
     <div class='form-group'>
         <label>* Is this player a keeper:</label>
             <input type="radio" name="keeper" value="1" checked> Yes
&nbsp;
  <input type="radio" name="keeper" value="0"> No
     </div>

        <button type="submit" class="btn btn-primary">Add Player</button>
    </form>
    </div>
  </div>
</div>
@stop


{{--
This `body` section will be yielded right before the closing </body> tag.
Use it to add specific things that *this* View needs at the end of the body,
such as a page specific JavaScript files.
--}}
@section('body')
@stop
