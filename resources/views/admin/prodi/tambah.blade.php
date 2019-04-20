@extends('base')
@section('content')
<div class="col-md-6">
	<div class="card card-block sameheight-item">
		<div class="title-block">
			<div class="card card-primary">
				<div class="card-header">
					<div class="header-block">
						<p class="title"> Tambah Program Studi </p>
					</div>
				</div>
				<form class="form-horizontal" role="form" method="POST" action="/prodi/create">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">	
				</div>
				<form role="form">
					<div class="form-group has-success {{ $errors->has('prodiKode') ? ' has-error' : '' }}" >
						<label class="control-label">Kode</label>
						<input type="text" class="form-control underlined" name="prodiKode" value="{{old('prodiKode')}}"> @if ($errors->has('prodiKode'))
						<span class="has-error"> {{$errors->first('prodiKode')}} </span>@endif
					</div>
					<div class="form-group has-success {{ $errors->has('prodiKode') ? ' has-error' : '' }}">
						<label class="control-label">Nama program studi</label>
						<input type="text" class="form-control underlined" name="prodiNama" value="{{old('prodiNama')}}">@if ($errors->has('prodiNama'))
						<span class="has-error">{{$errors->first('prodiNama')}} </span>@endif
					</div>
					<div class="form-group has-success {{ $errors->has('prodiKode') ? ' has-error' : '' }}">
						<label class="control-label">Inisial program studi</label>
						<input type="text" class="form-control underlined" name="prodiKodeLabel" value="{{old('prodiKodeLabel')}}">@if ($errors->has('prodiKodeLabel'))
						<span class="has-error">{{$errors->first('prodiKodeLabel')}} </span>@endif
					</div>
					<div class="form-group has-success {{ $errors->has('prodiKode') ? ' has-error' : '' }}">
						<label class="control-label">Jenjang program studi</label>
						<input type="text" class="form-control underlined" name="prodiJenjang" value="{{old('prodiJenjang')}}">@if ($errors->has('prodiJenjang'))
						<span class="has-error">{{$errors->first('prodiJenjang')}} </span>@endif
					</div>
					<div class="form-group">
						<div class="col-md-6 col-md-offset-4">
							<button type="submit" class="btn btn-primary" id="button-reg">
								Simpan
							</button>		
							<span class="btn btn-default"><i class="fa fa-back"> Cancel </i></span>
						</div>
					</div>

				</form>
			</div>
		</div>
	</div>
	@endsection
	@section('script')
	@endsection