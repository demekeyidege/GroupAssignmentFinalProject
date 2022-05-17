@extends('layouts.app')
@section('content')
<div class="container">
 <div class="row justify-content-center">
 <div class="col-md-8">
 <div class="card">
 <div class="card-header">{{ __('########### PLACE CREATE USER ACCOUNT ##########') }}</div>
 <div class="card-body">
 <form method="POST" action="{{ route('LAuser/register') }}"
>
 @csrf
 <div class="form-group row">
 <label for="username" class="col-md-4 col-formlabel text-md-right">{{ __('User_Name') }}</label>
 <div class="col-md-6">
 <input id="username" type="text" class="formcontrol @error('fname') isinvalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="
username" autofocus>
 @error('User_Name')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 @csrf
 <div class="form-group row">
 <label for="password" class="col-md-4 col-formlabel text-md-right">{{ __('Password') }}</label>
 <div class="col-md-6">
 <input id="password" type="text" class="formcontrol @error('password') isinvalid @enderror" name="password" value="{{ old('password') }}" required autocomplete
="password">
 @error('Password')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 @csrf
 <div class="form-group row">
 <label for="fname" class="col-md-4 col-formlabel text-md-right">{{ __('Frist_Name') }}</label>
 <div class="col-md-6">
 <input id="fname" type="text" class="formcontrol @error('fname') isinvalid @enderror" name="fname" value="{{ old('fname') }}" required autocomplete
="fname">
 @error('Frist_Name')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 
 <div class="form-group row">
 <label for="lname" class="col-md-4 col-formlabel text-md-right">{{ __('Last_Name') }}</label>
 <div class="col-md-6">
 <input id="lname" type="text" class="formcontrol @error('lname') isinvalid @enderror" name="lname" value="{{ old('lname') }}" required autocomplete
="lname">
 @error('Last_Name')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 <div class="form-group row">
 <label for="userType" class="col-md-4 col-formlabel text-md-right">{{ __('User_Type') }}</label>
 <div class="col-md-6">
  <select id="userType" name="userType">
    <option value="Administrator">Administrator</option>
    <option value="Officer">Officer</option>
    <option value="Landowner">Landowner</option>
  </select>
  @error('userType')
 @enderror
 </div>
 </div>
 <div class="form-group row mb-0">
 <div class="col-md-6 offset-md-4">
 <button type="submit" class="btn btn-primary">
 {{ __('Add') }}
 </button>
 </div>
 </div>
 </form>
 </div>
 </div>
 </div>
 </div>
</div>
@endsection