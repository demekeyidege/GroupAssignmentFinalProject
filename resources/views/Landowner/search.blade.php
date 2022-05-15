@extends('layouts.app')
@section('content')
<div class="container">
 <div class="row justify-content-center">
 <div class="col-md-8">
 <div class="card">
 <div class="card-header">
 {{ __('#################THIS IS LANDOWNER DETAIL#################') }}
 </div>
 <div class="card-body">
 id : {{ $Landowner->id }}
 <br>
 Frist_Name : {{ $Landowner->fname }}
 <br>
 Last_Name : {{ $Landowner->lname }}
 <br>
 Gender : {{ $Landowner->gender }}
 <br>
 City : {{ $Landowner->city }}
 <br>
 Kebele : {{ $Landowner->kebele }}
 <br>
 Occupation : {{ $Landowner->occupation }}
 <br>
 Registration_date : {{ $Landowner->Rdate }}
 <br>
 ServiceType : {{ $Landowner->serviceType }}
 <br>
 South_bondery : {{ $Landowner->southbondery }}
 <br>
 East_bondery : {{ $Landowner->eastbondery }}
 <br>
 North_bondery : {{ $Landowner->northbondery }}
 <br>
 West_bondery : {{ $Landowner->westbondery }}
 <br>
 area : {{ $Landowner->area }}
 <br>
 parcelcode : {{ $Landowner->parcelcode }}
 <br>
 landlavel : {{ $Landowner->landlavel }}
 <br>
 </div>
 </div>
 </div>
 </div>
</div>
<div class="container ">
 <div class="col-md-8">
 <a class="btn btnsuccess" href="{{ route('Landowner/get_all') }}" role="button"> {{ __('Back') }}</a>
 </div>
</div>
@endsection