


<!-- ==========end header============ -->

<form action="{{url('barang')}}" method="post">
    <div class="row container">

nama barang : <input type="text" name="nama_barang">
harga barang : <input type="text" name="harga_barang">

    </div>
        <button type="submit" class="btn btn-lg btn-block fixed-bottom text-light" style="border: 0;border-radius: 0;background: #8bc440;" onclick="myFunction()">KIRIM</button>
    <input type="hidden" value="{{ csrf_token() }}" name="_token">
</form>


<!-- <script type="text/JavaScript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script>
    $('.btn-minuse').on('click', function() {
        $(this).parent().siblings('input').val(parseInt($(this).parent().siblings('input').val()) - 1)
    })

    $('.btn-pluss').on('click', function() {
        $(this).parent().siblings('input').val(parseInt($(this).parent().siblings('input').val()) + 1)
    })
</script> -->
