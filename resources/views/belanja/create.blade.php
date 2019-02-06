@extends('template-form') @section('content') 
@section('linkback')
  /belanja
@endsection

@if(Session::get('message') == NULL) @else
<script type="text/javascript">
    alert("{{ Session::get('message') }}");
</script>
@endif

<style>
    #pb2 {
        padding-bottom: 2%;
    }
</style>


<!-- ==========end header============ -->

<form action="{{url('belanja')}}" method="post">
    <div class="row container">




<div class="container">
<table class="table table-striped container">
    <tr>
        <td>nama barang</td>
        <td>harga barang</td>
        <td>jumlah barang</td>
    </tr>
    @foreach($barang as $key => $barang)
    <tr>
      <input type="hidden" name="old_harga[{{$key}}]" value="{{$barang->harga_barang}}">
      <input type="hidden" name="barang_id[{{$key}}]" value="{{$barang->id}}">
      <input type="hidden" name="tanggal[{{$key}}]"  value="{{ date('d-m-Y') }}">
      <td>{{$barang->nama_barang}}</td>
      <td>Rp.{{number_format($barang->harga_barang, 0)}}</td>
      <td><input type="text" name="qty[{{$key}}]" class="form-control"></td>
    </tr>
@endforeach
</table>
</div>



    </div>

    <center>
        <button type="submit" class="btn btn-lg btn-block fixed-bottom text-light" style="border: 0;border-radius: 0;background: #8bc440;" onclick="myFunction()">KIRIM</button>
    </center>
    <input type="hidden" value="{{ csrf_token() }}" name="_token">
</form>
<div class="bottom-space"></div>

<!-- <script type="text/JavaScript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script>
    $('.btn-minuse').on('click', function() {
        $(this).parent().siblings('input').val(parseInt($(this).parent().siblings('input').val()) - 1)
    })

    $('.btn-pluss').on('click', function() {
        $(this).parent().siblings('input').val(parseInt($(this).parent().siblings('input').val()) + 1)
    })
</script> -->
@endsection