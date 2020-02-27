<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $reports = \App\Report::with('users')->paginate(10);

        $filterKeyword = $request->get('keyword');

        if ($filterKeyword) {
            $reports = \App\Report::where('judul_laporan', 'LIKE', "%$filterKeyword%")->paginate(10);
        }

        return view('reports.index', ['reports' => $reports]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('reports.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        \Validator::make($request->all(), [
            'isi_laporan' => 'required|max:250',
            'judul_laporan' => 'required|min:5',
            'image' => 'required',
        ])->validate();

        $new_report = new \App\Report;
        $new_report->judul_laporan = $request->get('judul_laporan');
        $new_report->isi_laporan = $request->get('isi_laporan');
        $new_report->tanggal = Carbon::now();

        if ($request->file('image')) {
            $file = $request->file('image')->store('images', 'public');
            $new_report->image = $file;
        }

        $new_report->user_id = \Auth::user()->id;

        $new_report->save();
        return redirect()->route('home')->with('status', 'Laporan berhasil dikirim');
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
        $report = \App\Report::findOrFail($id);
        return view('reports.edit', ['report' => $report]);
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
        $report = new \App\Report;
        $report->tanggal = Carbon::now();
        $report->status = $request->get('status');

        $report->user_id = \Auth::user()->id;

        $report->save();


        return redirect()->route('reports.index', [$id])->with('status', 'Kasus berhadil diupdate');
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
