<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeesController extends Controller
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
        $items = Employee::with('company')->paginate(5);
        // $companies = Company::;

        // dd($items);
        return view ('pages.employees.index',[
            'items' => $items,
            // 'companies' => $companies
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $companies = Company::all();
        $count = $companies->count();


        return view('pages.employees.create',[
            'companies'=>$companies,
            'count'=>$count
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'string',
            'email' => 'email'
        ]);

        Employee::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'company_id' => $request->company
        ]);

        return redirect()->route('employees.index');
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
        $items = Employee::findOrFail($id);
        $comp = $items->company()->get();
        $companies = Company::all();

        $count = $companies->count();


        // dd($comp[0]->id);

        return view('pages.employees.edit', [
            'items'=>$items,
            'comp'=>$comp,
            'companies'=>$companies,
            'count'=>$count
        ]);
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
        // dd($request->company);
        $request->validate([
            'email' => 'email'
        ]);

        Employee::where('id', $id)
                ->update(
                    [
                        'nama'=>$request->nama,
                        'email'=>$request->email,
                        'company_id'=>$request->company
                    ]
            );

        return redirect()->route('employees.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $des = Employee::findOrFail($id);

        $des->delete();

        return redirect()->route('employees.index');
    }
}
