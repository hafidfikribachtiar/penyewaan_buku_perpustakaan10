@extends('layout.app')
@section('content')

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Books</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">books</a></li>
            <li class="breadcrumb-item active">slide 1</li>
          </ol>
        </div><!-- /.col -->
        <hr class="my-4">     
          <a href="books/add" class="btn btn-primary">
            Create Book</a>  
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Books Data</h3>

          <div class="card-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
              <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

              <div class="input-group-append">
                <button type="submit" class="btn btn-default">
                  <i class="fas fa-search"></i>
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
                <th>Title</th>
                <th>Description</th>
                <th>Price</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Programming</td>
                <td>Bahasa PHP</td>
                <td><span class="tag tag-success" >50.000</span></td>
                <td>
                <a href="#" class="btn btn-success btn-sm"><i class="fas fa-cog"></i></a>
                <a href="#" class="btn btn-info btn-sm"><i class="fas fa-eye"></i></a>
                <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                </td>
              </tr>
              <tr>
                <td>2</td>
                <td>Sejarah</td>
                <td></td>
                <td><span class="tag tag-warning">50.000</span></td>
                <td>
                  <a href="#" class="btn btn-success btn-sm"><i class="fas fa-cog"></i></a>
                  <a href="#" class="btn btn-info btn-sm"><i class="fas fa-eye"></i></a>
                  <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                </td>
              </tr>
              <tr>
                <td>3</td>
                <td>Informatika</td>
                <td>Memahami Dasar-dasar Bahasa Python</td>
                <td><span class="tag tag-primary">50.000</span></td>
                <td>
                  <a href="#" class="btn btn-success btn-sm"><i class="fas fa-cog"></i></a>
                  <a href="#" class="btn btn-info btn-sm"><i class="fas fa-eye"></i></a>
                  <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                </td>
              </tr>
              <tr>
                <td>4</td>
                <td>Filsafat</td>
                <td></td>
                <td><span class="tag tag-danger">50.000</span></td>
                <td>
                  <a href="#" class="btn btn-success btn-sm"><i class="fas fa-cog"></i></a>
                  <a href="#" class="btn btn-info btn-sm"><i class="fas fa-eye"></i></a>
                  <a href="/edit" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                </td>
              </tr>
              <tr>
                <td>5</td>
                <td>Dunia Kedokteran</td>
                <td></td>
                <td><span class="tag tag-success">50.000</span></td>
                <td>
                  <a href="#" class="btn btn-success btn-sm"><i class="fas fa-cog"></i></a>
                  <a href="#" class="btn btn-info btn-sm"><i class="fas fa-eye"></i></a>
                  <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                </td>
              </tr>
              <tr>
                <td>6</td>
                <td>Bicara Psikologi</td>
                <td></td>
                <td><span class="tag tag-warning">50.000</span></td>
                <td>
                  <a href="#" class="btn btn-success btn-sm"><i class="fas fa-cog"></i></a>
                  <a href="#" class="btn btn-info btn-sm"><i class="fas fa-eye"></i></a>
                  <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                </td>
            </tbody>
          </table>
        </div>

@endsection