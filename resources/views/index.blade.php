@extends('layouts.master')

@section('title')
Joey
@endsection

@section('styles')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  
@endsection

@section('content')

<div> Joey's solution to PlumInternational Back End Challenge. Click Admin To test log in.</div>
<br/>
<div> Click Admin to begin testing ajax request for log in</div>
<br/>
<div> See Route & Admin section to see how all the required routes are being handled</div>
<br/>
<div>For demonstration purposes, two ajax requests has been set & send at 'login.blade.php', one for log in forum and one for register forum. Succcess and failed Json will be dispalyed on the same page. Successfully registered user will be able to log in</div>
<br/>
<div>No ajax request been set for the remaining assignment, but all response are Json, can be viewed on a seperate page,i.e.log out will pop up once logged in, click log out will see json response in a seperate page</div>
<br>
<div>Added Middle Ware to protect authroized routes, so routes with token will not be accessible if user is not logged in,if user attempts to route token routes without logging, user will be redirected back to this page</div>
<br>


 







@endsection