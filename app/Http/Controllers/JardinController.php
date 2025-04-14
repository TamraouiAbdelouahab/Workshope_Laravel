<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreJardinRequest;
use App\Http\Services\JardinService;
use Illuminate\Http\Request;

class JardinController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    protected $jardinService;

    public function __construct(JardinService $jardinService){
        $this->jardinService = $jardinService;
    }


    public function index()
    {
        $jardins = $this->jardinService->getAllJardins();
        $jardiniers = $this->jardinService->getJardiniers();
        return view('jardins.index', compact('jardins', 'jardiniers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $jardiniers = $this->jardinService->getJardiniers();
        return view('jardins.create', compact('jardiniers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreJardinRequest $request)
    {
        $this->jardinService->create($request);
        return redirect()->route('jardins.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $jardin = $this->jardinService->find($id);
        return view('jardins.show', compact('jardin'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $jardin = $this->jardinService->find($id);
        $jardiniers = $this->jardinService->getJardiniers();
        return view('jardins.edit',compact('jardin','jardiniers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreJardinRequest $request, $id)
    {
        $this->jardinService->update($request,$id);
        return redirect()->route('jardins.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $this->jardinService->delete($id);
        return redirect()->route('jardins.index');
    }

    public function filter(Request $request){

        $jardiniers = $this->jardinService->getJardiniers();

        $jardins = $this->jardinService->filter($request);

        // dd($jardins);

        return view('jardins.index', compact('jardins', 'jardiniers'));
    }
}

