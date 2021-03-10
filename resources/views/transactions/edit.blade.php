@extends('layout.app')
@section('content')

<div class="content-wrapper">
<div class="card card-info">
    <div class="card-header">
      <h3 class="card-title">Files</h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
          <i class="fas fa-minus"></i>
        </button>
      </div>
    </div>
    <div class="card-body p-0">
      <table class="table">
        <thead>
          <tr>
            <th>File Name</th>
            <th>File Size</th>
            <th></th>
          </tr>
        </thead>
        <tbody>

          <tr>
            <td>Functional-requirements.docx</td>
            <td>49.8005 kb</td>
            <td class="text-right py-0 align-middle">
              <div class="btn-group btn-group-sm">
                <a href="#" class="btn btn-info"><i class="fas fa-eye"></i></a>
                <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
              </div>
            </td>
          <tr>
            <td>UAT.pdf</td>
            <td>28.4883 kb</td>
            <td class="text-right py-0 align-middle">
              <div class="btn-group btn-group-sm">
                <a href="#" class="btn btn-info"><i class="fas fa-eye"></i></a>
                <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
              </div>
            </td>
          <tr>
            <td>Email-from-flatbal.mln</td>
            <td>57.9003 kb</td>
            <td class="text-right py-0 align-middle">
              <div class="btn-group btn-group-sm">
                <a href="#" class="btn btn-info"><i class="fas fa-eye"></i></a>
                <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
              </div>
            </td>
          <tr>
            <td>Logo.png</td>
            <td>50.5190 kb</td>
            <td class="text-right py-0 align-middle">
              <div class="btn-group btn-group-sm">
                <a href="#" class="btn btn-info"><i class="fas fa-eye"></i></a>
                <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
              </div>
            </td>
          <tr>
            <td>Contract-10_12_2014.docx</td>
            <td>44.9715 kb</td>
            <td class="text-right py-0 align-middle">
              <div class="btn-group btn-group-sm">
                <a href="#" class="btn btn-info"><i class="fas fa-eye"></i></a>
                <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
              </div>
            </td>

        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
</div>
<div class="row">
<div class="col-12">
  <a href="#" class="btn btn-secondary">Cancel</a>
  <input type="submit" value="Save Changes" class="btn btn-success float-right">
</div>
</div>
</section>
<!-- /.content -->
</div>
@endsection