@extends('layouts.app')
@section('content')
<div class="container">
 <div class="row justify-content-center">
 <div class="col-md-8">
 <div class="card">
 <div class="card-header">
 {{ __('################# THIS IS Users DETAIL #################') }}
 </div>
 <div class="card-body">
 id : {{ $LAuser->id }}
 <br>
 User_Name : {{ $LAuser->username }}
 <br>
 Password : {{ $LAuser->password }}
 <br>
 Frist_Name : {{ $LAuser->fname }}
 <br>
 Last_Name : {{ $LAuser->lname }}
 <br>
 User_Type : {{ $LAuser->userType }}
 <br>
 </div>
 </div>
 </div>
 </div>
</div>
<div class="container ">
 <div class="col-md-8">
 <a class="btn btnsuccess" href="{{ route('LAuser/get_all') }}" role="button"> {{ __('Back') }}</a>
 </div>
</div>
@endsection