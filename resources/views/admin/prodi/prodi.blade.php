@extends('base')
@section('content')
<section class="section">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-block">
                    <div class="card-title-block">
                        <h3 class="title"> Program Studi </h3></div>
                        <a href="{{URL::to('prodi/tambah')}}" class="btn btn-primary btn-sm fa fa-plus"> tambah </a>
                        <section class="example">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Kode</th>
                                            <th>Nama Program Studi</th>
                                            <th>Jenjang</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($prodi as $dataprodi)
                                        <tr>
                                            <td>{{$dataprodi->prodiKodeLabel}}</td>
                                            <td>{{$dataprodi->prodiNama}}</td>
                                            <td>{{$dataprodi->prodiJenjang}}</td>
                                            <td><a href="{{{ URL::to('prodi/'.$dataprodi->prodiKode.'/edit') }}}"><button type="button" class="btn btn-warning btn-sm fa fa-edit" title="edit"> edit </button>
                                                <button type="button" class="btn btn-danger btn-sm fa fa-trash"><a href="{{{ action('Prodi\ProdiController@hapus',[$dataprodi->prodiKode]) }}}" title="hapus"   onclick="return confirm('Apakah anda yakin akan menghapus program studi {{{($dataprodi->prodiKode).' - '.$dataprodi->prodiNama }}}?')"> hapus </button></td> 
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--modal-->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel">tambah program studi</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">x</span></button>    
                        </div>
                        <div class="modal-body">
                            <form id="formProdi" class="form-horizontal" role="form" method="POST" action="">
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <div class="form-group">
                                    <label class="col-md-4 control-label">Kode </label>
                                    <div class="col-md-12">
                                        <input type="text" name="prodiKode" class="form-control">
                                        <small class="help-block"></small>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label">Nama </label>
                                    <div class="col-md-12">
                                        <input type="text" name="prodiNama" class="form-control">
                                        <small class="help-block"></small>
                                    </div>
                                </div>
                                <div class="from-group">
                                    <label class="col-md-4 control-label">Inisial </label>
                                    <div class="col-md-12">
                                        <input type="text" name="prodiKodeLabel" class="form-control">
                                        <small class="help-block"></small>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label">Jenjang</label>
                                    <div class="col-md-12">
                                        <input type="text" name="prodiJenjang" class="form-control">
                                        <small class="help-block"></small>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                        <button type="submit" class="btn btn-primary" id="button-reg"> Simpan </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
@endsection
@section('script')
@endsection