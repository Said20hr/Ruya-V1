<?php

namespace App\Http\Controllers;

use App\Models\FAQ;
use App\Models\Portfolio;
use App\Models\Service;
use App\Models\ServiceDetails;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $serices = Service::all();
        return view('pages.service')
            ->with('services',$serices);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        //


       if(request()->category) {
            $service= Service::where('slug','=',$slug)->firstOrfail();
            $services= Service::all();
            $details=ServiceDetails::where('service_id',$service->id)->first();
           $portfolios = Portfolio::with('services')->whereHas('services', function ($query) use($slug) {
               $query->where('slug', $slug);
           })->take(3)->get();


            return view('pages.category')->with([
                'service'=>$service,
                'services'=>$services,
                'portfolios'=>$portfolios,
                'details'=>$details,
            ]);


        }
    }
    public function order()
    {
        $serices = Service::all();
        return view('pages.order')
            ->with('services',$serices);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
