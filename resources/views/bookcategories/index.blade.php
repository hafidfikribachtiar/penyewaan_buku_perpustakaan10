@extends('layout.app')
@section('content')

<div class="content-wrapper">
<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Books Categories</h3>

          <div class="card-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
              <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

              <div class="input-group-append">
                <button type="submit" class="btn btn-default">
                  <i class="fas fa-search">Create</i>
                </button>
              </div>
            </div>
          </div>
        </div>

        <!-- /.card-header -->
        <div class="card-body table-responsive p-0" style="height: 300px;">
          <table class="table table-head-fixed text-nowrap">
            <thead>
              <tr>
                <th>ID</th>
                <th>User</th>
                <th>Date</th>
                <th>Status</th>
                <th>Reason</th>
              </tr>
            </thead>
            <tbody>
              

              <?php $no = 1; ?>
              @foreach ($books as $kat)
              
              
              <tr>
              <td>{{ $no++ }}</td>
              <td>{{ $kat->title }}</td>
              <td>{{ $kat->description }}</td>
              <td>{{ $kat->price }}</td>
              
              
              <td>
              
              
              <a href="/editcategory/{{ $kat->id }}" class="badge badge-primary">Edit</a>
              
              
              <a href="/hapuscategory/{{ $kat->id }}" class="badge badge-danger">Hapus</a>
              
              
              </td>
              
              
              </tr>
              
              
              @endforeach
            </tbody>
          </table>
        </div>

@endsection