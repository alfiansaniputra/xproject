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
      <th scope="col">brg_id</th>
      <th scope="col">Qty</th>
      <th scope="col">tanggal</th>
      <th scope="col">old</th>

    </tr>
  </thead>
  <tbody>
    @foreach($belanja as $belanja)
    <tr>
      <th scope="row">{{$no++}}</th>
      <td>{{$belanja->Barang['nama_barang']}}</td>
      <td>{{$belanja->qty}}</td>
      <td>{{$belanja->tanggal}}</td>
      <td>{{$belanja->old_harga}}</td>

    </tr>
@endforeach
  </tbody>
</table>
</div>
    

        <center>

      <button type="submit" class="btn btn-lg btn-block fixed-bottom text-light" style="border: 0;border-radius: 0;background: #8bc440;" onclick="window.location.replace('/belanja/create')">Masukan Data</button>
        </center>
@endsection