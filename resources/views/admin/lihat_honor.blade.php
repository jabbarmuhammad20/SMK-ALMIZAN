@extends('layouts.master')

@section('content')
 <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Lihat Honor</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ route('honor.update', $honor_tabel->id) }}" method="POST">
              {{csrf_field() }}
			  {{ method_field('PUT') }}
				<div class="card-body" >  
				<div class="form-group">
					<label for="exampleInputEmail1">User Id/ Nama </label>
					<input type="text" class="form-control col-md-12" id="nama_guru" name="nama_guru" value="{{ $honor_tabel->user_id}}:{{ $honor_tabel->User->name}}" readonly>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Bulan</label>
					<input type="text" class="form-control col-md-12" id="nama_guru" name="nama_guru" value="{{ $honor_tabel->bulan}}" readonly>
          <div class="form-group">
          <label for="exampleInputEmail1">Tanggal 1 </label>
          <input type="text" class="form-control col-md-12" id="nama_guru" name="nama_guru" value="{{ $honor_tabel->tgl1}}" readonly>
    </section>
</form>
</div>
    <!-- /.content -->
  </div>
  @endsection