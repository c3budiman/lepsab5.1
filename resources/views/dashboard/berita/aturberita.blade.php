@extends('dashboard.berita.layoutberita')

@section('isinya')
  <section class="content-header">
    <h1>
      Mengatur Berita Dan Kegiatan<br>
      <small>Disini anda dapat mengatur Postingan Berita Dan Kegiatan</small>
    </h1>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <!-- /.box-header -->
          <div class="box-body">

            <table id="contoh" class="table table-bordered table-hover datatable">
              <thead>
              <tr>
                <th>Judul</th>
                <th>Pembuat</th>
                <th>Terakhir Di Update</th>
                <th colspan="10%">Action</th>
              </tr>
              </thead>
            </table>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
        </div>
</div>
</section>

<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $('.datatable').DataTable({
            "language": {
            "url": "https://cdn.datatables.net/plug-ins/1.10.16/i18n/Indonesian-Alternative.json"
        },
        processing: true,
        serverSide: true,
        ajax: '{{ route('berita/json') }}',
        columns: [
            {data: 'judul', name: 'judul'},
            {data: 'author', name: 'author'},
            {data: 'updated_at', name: 'updated_at'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });
});
</script>
@endsection
