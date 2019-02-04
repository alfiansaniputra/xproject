@extends('template-form') 
@section('content') 

@section('linkback')
  /
@endsection



  @if(Session::get('message') == NULL) @else
  <script type="text/javascript">
      alert("{{ Session::get('message') }}");
  </script>
  @endif
<?php $no=1 ?>

<div class="container">
<table class="table table-striped container">
  <thead>
    <tr>
      <th scope="col">NO</th>
      <th scope="col">Nama Barang</th>
      <th scope="col">Harga</th>

    </tr>
  </thead>
  <tbody>
    @foreach($barang as $barang)
    <tr>
      <th scope="row">{{$no++}}</th>
      <td>{{$barang->nama_barang}}</td>
      <td>Rp.{{number_format($barang->harga_barang, 0)}}</td>
    </tr>
@endforeach
  </tbody>
</table>
</div>
    

        <center>

      <button type="submit" class="btn btn-lg btn-block fixed-bottom text-light" style="border: 0;border-radius: 0;background: #8bc440;" onclick="window.location.replace('/barang/create')">Masukan Data</button>
        </center>
@endsection