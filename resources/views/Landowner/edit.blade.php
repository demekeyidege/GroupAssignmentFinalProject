@extends('layouts.app')
@section('content')
<div class="container">
 <div class="row justify-content-center">
 <div class="col-md-8">
 <div class="card">
 <div class="card-header">{{ __('###########PLACE REGISTER Landowner INFORMARIION##########') }}</div>
 <div class="card-body">
 <form method="POST" action="{{ route('Landowner/update') }}">
 @csrf
 <input type="hidden" value="{{ $Landowner->id }}" name ='id'>
 <div class="form-group row">
 <label for="fname" class="col-md-4 col-formlabel text-md-right">{{ __('Frist_Name') }}</label>
 <div class="col-md-6">
 <input id="fname" type="text" class="formcontrol @error('fname') isinvalid @enderror" name="fname" value="{{ $Landowner->fname }}" required autocomplete="
fname" autofocus>
 @error('Frist_name')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 @csrf
 <div class="form-group row">
 <label for="lname" class="col-md-4 col-formlabel text-md-right">{{ __('Last_Name') }}</label>
 <div class="col-md-6">
 <input id="lname" type="text" class="formcontrol @error('lname') isinvalid @enderror" name="lname" value="{{ $Landowner->lname }}" required autocomplete
="lname">
 @error('Last_Name')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 @csrf
 <div class="form-group row">
 <label for="gender" class="col-md-4 col-formlabel text-md-right">{{ __('Gender') }}</label>
 <div class="col-md-6">
 <input id="gender" type="radio" class="formcontrol @error('gender') isinvalid @enderror" name="gender" value="male" required autocomplete
="gender">male
<input id="gender" type="radio" class="formcontrol @error('gender') isinvalid @enderror" name="gender" value="female" required autocomplete
="gender">female
 @error('Gender')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 
 <div class="form-group row">
 <label for="city" class="col-md-4 col-formlabel text-md-right">{{ __('City') }}</label>
 <div class="col-md-6">
 <input id="city" type="text" class="formcontrol @error('city') isinvalid @enderror" name="city" value="{{ $Landowner->city }}" required autocomplete
="city">
 @error('City')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 <div class="form-group row">
 <label for="kebele" class="col-md-4 col-formlabel text-md-right">{{ __('Kebele') }}</label>
 <div class="col-md-6">
 <input id="kebele" type="text" class="formcontrol @error('kebele') isinvalid @enderror" name="kebele" value="{{ $Landowner->kebele }}" required autocomplete
="kebele">
 @error('Kebele')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 <div class="form-group row">
 <label for="occupation" class="col-md-4 col-formlabel text-md-right">{{ __('Occupation') }}</label>
 <div class="col-md-6">
 <input id="occupation" type="text" class="formcontrol @error('occupation') isinvalid @enderror" name="occupation" value="{{ $Landowner->occupation }}" required autocomplete
="occupation">
 @error('Occupation')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 <div class="form-group row">
 <label for="Rdate" class="col-md-4 col-formlabel text-md-right">{{ __('Registration_date') }}</label>
 <div class="col-md-6">
 <input id="Rdate" type="date" class="formcontrol @error('Rdate') isinvalid @enderror" name="Rdate" value="{{$Landowner->Rdate }}" required autocomplete
="Rdate">
 @error('Registration_date')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 <div class="form-group row">
 <label for="serviceType" class="col-md-4 col-formlabel text-md-right">{{ __('Service_Type') }}</label>
 <div class="col-md-6">
 <input id="serviceType" type="text" class="formcontrol @error('serviceType') isinvalid @enderror" name="serviceType" value="{{ $Landowner->serviceType }}" required autocomplete
="serviceType">
 @error('Service_Type')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 <div class="form-group row">
 <label for="southbondery" class="col-md-4 col-formlabel text-md-right">{{ __('South_bondery') }}</label>
 <div class="col-md-6">
 <input id="southbondery" type="text" class="formcontrol @error('southbondery') isinvalid @enderror" name="southbondery" value="{{$Landowner->southbondery }}" required autocomplete
="southbondery">
 @error('South_bondery')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 <div class="form-group row">
 <label for="eastbondery" class="col-md-4 col-formlabel text-md-right">{{ __('East_bondery') }}</label>
 <div class="col-md-6">
 <input id="eastbondery" type="text" class="formcontrol @error('eastbondery') isinvalid @enderror" name="eastbondery" value="{{ $Landowner->eastbondery }}" required autocomplete
="eastbondery">
 @error('East_bondery')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 <div class="form-group row">
 <label for="Northbondery" class="col-md-4 col-formlabel text-md-right">{{ __('North_bondery') }}</label>
 <div class="col-md-6">
 <input id="northbondery" type="text" class="formcontrol @error('northbondery') isinvalid @enderror" name="northbondery" value="{{ $Landowner->northbondery }}" required autocomplete
="northbondery">
 @error('North_bondery')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 <div class="form-group row">
 <label for="westbondery" class="col-md-4 col-formlabel text-md-right">{{ __('West_bondery') }}</label>
 <div class="col-md-6">
 <input id="westbondery" type="text" class="formcontrol @error('westbondery') isinvalid @enderror" name="westbondery" value="{{ $Landowner->westbondery }}" required autocomplete
="westbondery">
 @error('West_bondery')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 <div class="form-group row">
 <label for="area" class="col-md-4 col-formlabel text-md-right">{{ __('Area') }}</label>
 <div class="col-md-6">
 <input id="area" type="text" class="formcontrol @error('area') isinvalid @enderror" name="area" value="{{ $Landowner->area }}" required autocomplete
="area">
 @error('Area')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 <div class="form-group row">
 <label for="parcelcode" class="col-md-4 col-formlabel text-md-right">{{ __('parcel_code') }}</label>
 <div class="col-md-6">
 <input id="parcelcode" type="text" class="formcontrol @error('parcelcode') isinvalid @enderror" name="parcelcode" value="{{$Landowner->parcelcode  }}" required autocomplete
="parcelcode">
 @error('parcel_code')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 <div class="form-group row">
 <label for="landlavel" class="col-md-4 col-formlabel text-md-right">{{ __('Land_lavel') }}</label>
 <div class="col-md-6">
 <input id="landlavel" type="text" class="formcontrol @error('landlavel') isinvalid @enderror" name="landlavel" value="{{ $Landowner->landlavel }}" required autocomplete
="landlavel">
 @error('Land_level')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 <div class="form-group row mb-0">
 <div class="col-md-6 offset-md-4">
 <button type="submit" class="btn btn-primary">
 {{ __('Update') }}
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