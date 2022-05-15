@extends('layouts.app')
@section('content')
<div class="container pb-2">
 <a class="btn btn-success" color="red"  href="{{ route('Landowner/register') }}" role="button"> {{ __('Register new landowner') }}
</a>
</div>
<div class="container">
 <div class="row justiify-content-center">
 <div class="col-md-15">
 <div class="card">
 <div class="card-header">
 <div class="row justiify-content-center">
 {{ __('###############this is landowners information###############') }}
</div>
 </div>
 <div class="card-body">
 <table class="table table-striped table-bordered ">
 <thead class="thead-inverse">
 <tr>
 <th>ID</th>
<th>Frist_name</th>
<th>Last_name</th>
 <th>Gender</th>
 <th>City</th>
 <th>Kebele</th>
<th>Occupation</th>
<th>R_date</th>
 <th>ServiceType</th>
 <th>S/bondery</th>
 <th>E/bondery</th>
<th>N/bondery</th>
<th>W/bondery</th>
 <th>Area</th>
 <th>parcelcode</th>
 <th>landlavel</th>
 </tr>
 </thead>
 <tbody>
 @foreach($Landowner as $Landowner)
 <tr>
 <td> {{ $Landowner->id }}</td>
 <td> {{ $Landowner->fname }}</td>
 <td> {{ $Landowner->lname }}</td>
 <td> {{ $Landowner->gender }}</td>
 <td> {{ $Landowner->city }}</td>
 <td> {{ $Landowner->kebele }}</td>
 <td> {{ $Landowner->occupation }}</td>
 <td> {{ $Landowner->Rdate }}</td>
 <td> {{ $Landowner->serviceType }}</td>
 <td> {{ $Landowner->southbondery }}</td>
 <td> {{ $Landowner->eastbondery }}</td>
 <td> {{ $Landowner->northbondery }}</td>
 <td> {{ $Landowner->westbondery }}</td>
 <td> {{ $Landowner->area }}</td>
 <td> {{ $Landowner->parcelcode }}</td>
 <td> {{ $Landowner->landlavel }}</td>
 <td>
 <a class="btn btn-xs btn-success" title="Edit" href="/Landowner/edit/{{$Landowner->id }}">Edit</a>
</td>
<td>
 <a class="btn btn-xs btn-danger" title="Delete" href="/Landowner/delete/{{ $Landowner->id }}">Delete</a>
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

