@extends('layouts.app')
@section('content')
<div class="container pb-2">
 <a class="btn btn-success" color="red"  href="{{ route('LAuser/register') }}" role="button"> {{ __('Register new user') }}
</a>
</div>
<div class="container">
 <div class="row justiify-content-center">
 <div class="col-md-15">
 <div class="card">
 <div class="card-header">
 <div class="row justiify-content-center">
 {{ __('############### this is users information ###############') }}
</div>
 </div>
 <div class="card-body">
 <table class="table table-striped table-bordered ">
 <thead class="thead-inverse">
 <tr>
 <th>ID</th>
 <th>User_Name</th>
 <th>Password</th>
<th>Frist_name</th>
<th>Last_name</th>
 <th>User_Type</th>
 </tr>
 </thead>
 <tbody>
 @foreach($LAuser as $LAuser)
 <tr>
 <td> {{ $LAuser->id }}</td>
 <td> {{ $LAuser->username }}</td>
 <td> {{ $LAuser->password }}</td>
 <td> {{ $LAuser->fname }}</td>
 <td> {{ $LAuser->lname }}</td>
 <td> {{ $LAuser->userType }}</td>
 <td>
 <a class="btn btn-xs btn-success" title="Edit" href="/LAuser/edit/{{$LAuser->id }}">Edit</a>
</td>
<td>
 <a class="btn btn-xs btn-danger" title="Delete" href="/LAuser/delete/{{ $LAuser->id }}">Delete</a>
 </td>
 </tr>
@endforeach
 </tbody>
 </table>
 </div>
 </div>
 </div>
 </div>
</div>
@endsection

