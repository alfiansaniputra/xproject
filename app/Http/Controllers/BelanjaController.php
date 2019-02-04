<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Belanja;
use App\Barang;


class BelanjaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $belanja= Belanja::all();
         return view('belanja.index',compact('belanja'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $barang =  Barang::all();
        $belanja =  Belanja::all();
        return view('belanja.create', compact('belanja','barang'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $belanja = new Belanja;
        // $belanja->barang_id = $request->barang_id;
        // $belanja->qty = $request->qty;
        // $belanja->tanggal = $request->tanggal;
        // $belanja->old_harga = $request->old_harga;
        // $belanja->save();
        // return redirect('belanja')->with('message', 'Data telah di Tambah.');

// foreach ($requese as $input)
//             {

//                 $marks[] = new Belanja(array(
//                     'barang_id'=>$input['barang_id'],
//                     'qty'=>$input['qty'],
//                     'tanggal'=>$input['tanggal'],
//                     'old_harga'=>$input['old_harga']
//                 ));
//             }
// Belanja::create($marks);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $belanja = Belanja::find($id);
        if(!$belanja){
            abort(404);
        }
        
        return view('belanja.edit')->with('belanja', $belanja);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $belanja = Belanja::find($id);
        $belanja->barang_id = $request->barang_id;
        $belanja->qty = $request->qty;
        $belanja->tanggal = $request->tanggal;
        $belanja->old_harga = $request->old_harga;
        
        $belanja->save();
        return redirect('belanja/create')->with('message', 'Data telah di Update.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
