<?php

namespace App\Http\Controllers;

use App\Http\Requests\CompanyRequest;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class CompaniesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Company::paginate(5);
        // dd($items);
        return view ('pages.companies.index',[
            'items' => $items
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.companies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CompanyRequest $request)
    {
        $request->validate([
            'logo' => 'required|image|mimes:png|max:2048|dimensions:min_width=100,min_height=100'
        ]);
        
        $filename = Str::slug($request->nama). ".png";
        $logo = $request->file('logo')->storeAs(
            'assets/companies', $filename , 'public' 
        );

        Company::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'website' => $request->website,
            'logo' => $logo
        ]);

        
        return redirect()->route('companies.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $items = Company::findOrFail($id);
        return view('pages.companies.edit',[
            'items' => $items
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CompanyRequest $request, $id)
    {
        Company::where('id', $id)
                ->update(
                    [
                        'nama' => $request->nama,
                        'email' => $request->email,
                        'website' => $request->website
                    ]
                );
        
        
        
        $companies = Company::findOrFail($id);
        if($request->logo != null)
        {
            $request->validate([
                'logo' => 'required|image|mimes:png|max:2048|dimensions:min_width=100,min_height=100'
            ]);

            //'logo ada';
            unlink(public_path('storage/'.$companies->logo));
            $filename = Str::slug($companies->nama). ".png";
            $logo = $request->file('logo')->storeAs(
                'assets/companies', $filename , 'public' 
            );
            Company::where('id', $id)->update(
                [
                    'logo' => $logo
                ]);
        }

        return redirect()->route('companies.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $companies = Company::findOrFail($id);
        unlink(public_path('storage/'.$companies->logo));

        $companies->delete();

        return redirect()->route('companies.index');
    }
}
