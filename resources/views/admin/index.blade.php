@extends('base')
@section('content')
<div class="card card-primary">
	<div class="card-header">
		<div class="header-block">
			<p class="title"><h3>Selamat Datang Admin </h3></p>
		</div>
	</div>
	<div class="card-block">
		<p class="text-danger">Untuk menggunakan Sistem Informasi Akademik harap diperhatikan bagian - bagian data inti yang perlu dipersiapkan sebelumnya.</p>
	</div>
</div>
<div class="card card-primary">
	<div class="card-block">
		Data yang penting yang perlu dipersiapkan antara lain :
		<ul>
			<li>1. Data Kurikulum</li>
			<li>2. Matakuliah yang ada dalam kurikulum</li>
			<li>3. Data Program Studi</li>
			<li>4. Semester Aktif</li>
			<li>5. Program Studi yang aktif</li>
			<li>6. Data Master Dosen</li>
			<li>7. Data Master Mahasiswa</li>
			<li>8. Kredit Rencana Studi</li>
			<li>9. Data Nilai Mahasiswa</li>
		</ul>
	</div>
</div>
@endsection
@section('script')

@endsection