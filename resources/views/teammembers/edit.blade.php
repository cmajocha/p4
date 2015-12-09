@extends('layouts.master')

@section('title')
    Edit Roster
@stop


@section('content')

    <h1>Edit my Roster</h1>

    @include('errors')

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
         <select name='owner' id='owner'>
             @foreach($users_for_dropdown as $user_id => $user_name)

                 {{ $selected = ($user_id == $teammember->user->id) ? 'selected' : '' }}

                 <option value='{{ $user_id }}' {{ $selected }}> {{ $user_name }} </option>
             @endforeach
         </select>
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
                value='{{teammember->position}}'
                >
        </div>

        <div class='form-group'>
            <label for='Keeper'>* Check if this player is a keeper:</label>
            <input
                type='checkbox'
                id='keeper'
                name='keeper'
                value='{{$teammember->keeper}}'
                >
        </div>

        <br>
        <button type="submit" class="btn btn-primary">Save changes</button>
    </form>

@stop
