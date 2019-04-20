@extends('base')
@section('content')
<div class="col-md-6">
	<div class="card card-block sameheight-item">
		<div class="title-block">
			<h3 class="title"> Edit Program Studi </h3>
			<form id="formProdiEdit" class="form-horizontal" role="form" method="POST" action="{{ url('/prodi/'.$prodiKode.'/simpanedit') }}">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<input type="hidden" name="_method" value="PUT">
				<input type="hidden" name="prodiKode" value="{{$prodiKode}}" >
			</div>
			<form role="form">
				<div class="form-group has-success">
					<label class="control-label">Kode</label>
					<input type="text" class="form-control underlined" name="prodiKodeShow" value="{{$prodiKode}}" disabled="true">
					<span class="has-success"></span>
				</div>
				<div class="form-group has-success">
					<label class="control-label">Nama program studi</label>
					<input type="text" class="form-control underlined" name="prodiNama" value="{{$prodiNama}}">
					<span class="has-success"></span>
				</div>
				<div class="form-group has-success">
					<label class="control-label">Inisial program studi</label>
					<input type="text" class="form-control underlined" name="prodiKodeLabel" value="{{$prodiKodeLabel}}">
					<span class="has-success"></span>
				</div>
				<div class="form-group has-success">
					<label class="control-label">Jenjang program studi</label>
					<input type="text" class="form-control underlined" name="prodiJenjang" value="{{$prodiJenjang}}">
					<span class="has-success"></span>
				</div>
				<div class="form-group">
					<div class="col-md-6 col-md-offset-4">
						<button type="submit" class="btn btn-primary" id="button-reg">
							Simpan
						</button>
						<a href="{{{ action('Prodi\ProdiController@index') }}}" title="Cancel">
							<span class="btn btn-default"><i class="fa fa-back"> Cancel </i></span>
						</a>  
					</div>
				</div>

			</form>
		</div>
	</div>
</div>
@endsection
@section('script')
@endsection