@extends('layouts.index')
@section('content')
<section>
  <div class="container">
    <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="img/about.jpg" alt="">
    <div class="about-heading-content">
      <div class="row">
        <div class="col-xl-12 col-lg-12 mx-auto">
          <div class="bg-faded rounded p-5">
    <h1 class="btn-warning" align="center">Data Posisi </h1>

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-warning btn-sm float-right" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-user-plus">Add</i>
    </button>
<br/>
<br/>

  <table class="table table-hover" >
   <thead class="thead-dark">
    <tr>
      <th>No</th>
      <th>Nama Posisi</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    @php
    $no = 1;
    @endphp
    @foreach($ar_posisi as $pos)
    <tr class="table-light">
      <td>{{ $no++ }}</td>
      <td>{{$pos->posisi}}</td>
      <td>
      <a href="/posisi/{{$pos->id}}/edit" class="btn btn-warning btn-sm"><i class="fas fa-pencil-alt"></i></a>
        &nbsp; &nbsp;
        <a href="/posisi/{{$pos->id}}/delete" class="btn btn-warning btn-sm" onclick="return confirm('Are you sure?')"><i class="fas fa-trash-alt"></i></a>
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
</section>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Posisi Karyawan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

       <form action="/posisi/create" method="POST">
        {{csrf_field()}}

        <div class="form-group">
          <label for="exampleInputEmail1">Posisi</label>
          <input name="posisi" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="masukan posisi anda">
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>
</div>
@endsection