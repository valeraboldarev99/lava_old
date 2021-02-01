@extends('layouts.app')

@section('page_content')
    <div class="container">
       <h1>Welcome User</h1>
       <table class="media">
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