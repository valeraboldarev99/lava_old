@extends('Admins::layouts.app')

@section('content')
<div class="container">
   <h1>Welcome User</h1>
   <table class="table">
       <tr>
           <td>Name:</td>
           <td>
                {{ Auth::user()->name }}
           </td>
       </tr>
       <tr>
           <td>Email:</td>
           <td>
                {{ Auth::user()->email }}
           </td>
       </tr>
   </table> 
</div>
@endsection