<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests\ClientRequest;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

class ClientController extends Controller
{
    public function __construct()
    {

        $this->middleware('auth');

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $clients = Client::all();
        // $clients = Client::orderBy('created_at', 'desc')->paginate(10);
        // return view('clients', compact('clients'));
        $query = $request->get('q');
        if($query) {
            $clients = $query ? Client::search($query)->orderBy('created_at','desc')->paginate(10) : Client::all();
            return view('clients', compact('clients'));
        } else {
            $clients = Client::orderBy('created_at','desc')->paginate(10);
            return view('clients', compact('clients'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addClient');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ClientRequest $request)
    {
        // $client = new Client;
        Client::create($request->all());
        // $client = $request->all();
        // $client->save();
        Session::flash('success', 'Klijent kreiran');
        return redirect(route('addClient'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $client = Client::findOrFail($id);
        return view('clientShow', compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $client = Client::findOrFail($id);
        return view('clientEdit', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(ClientRequest $request, $id)
    {
        Client::findOrFail($id)->update($request->all());
        Session::flash('info', 'Klijent Izmenjen');
        return redirect(route('clients'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $client = Client::findOrFail($id);
        $client->delete();

        Session::flash('success', 'Klijent Obrisan');
        return redirect(route('clients'));
    }

    public function getclients() {

        $clients = Client::all();

        return $clients;
    }

    public function searchclients() {
        
        $query = Input::get('query');
    
        // $clients = Client::where('naziv','like','%'.$query.'%')->get();
        $clients = DB::table('clients')
         ->where('naziv', 'like', '%'.$query.'%')
         ->orWhere('mesto', 'like', '%'.$query.'%')->get();
        
        return response()->json($clients);
    }

}
