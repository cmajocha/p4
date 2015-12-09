@extends('layouts.master')

@section('title')
    P4: Fantasy Finders Keepers
@stop


<!--
This `head` section will be yielded right before the closing </head> tag.
Use it to add specific things that *this* View needs in the head,
such as a page specific styesheets.
-->
@section('head')
@stop

@section('content')
<div class="container">
  <div class="row">
    <div class="body-content">
      <img src="https://farm8.staticflickr.com/7340/9600780492_38d104c8a0_n.jpg" class="main-logo"><br />
      <h2>Making Sense of Your Roster</h2>
    <p class="home-page-copy">Keeping track of your keepers can be tough. I'm here to help. This site will be an invaluable resource for the PFL. Take stock of your keepers, see who's available, and come up with the off-season strategy that can lead you to the title.</p>
<h3>PFL Keeper Rules</h3>
  <ul class="home-page-list">
    <li>First Round Picks <strong>can not</strong> be kept</li>
    <li>User will surrender the draft pick corresponding to the round the player was taken in</li>
    <li>Players can be kept a maximum of two consecutive years before being thrown back into the draft</li>
  </ul
    </div>
  </div>
</div>

@stop

<!--
This `body` section will be yielded right before the closing </body> tag.
Use it to add specific things that *this* View needs at the end of the body,
such as a page specific JavaScript files.
-->
@section('body')
@stop
