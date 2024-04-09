<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;
use PDF;
class CustomerController extends Controller
{
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger();
    }

    public function index()
    {
        $response['customers'] = Customer::get();
        return view('admin.customer.list.index', $response);
    }


    public function create()
    {
        //
        $response['customers'] = Customer::get();
        return view('admin.customer.create.index', $response);
    }


    public function store(Request $request)
    {

        $request->validate([
            /**Clients informatio */
            'name' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'tel' => 'max:50',
            'nif' => 'required|string|max:50',
            'address' => 'required|string|max:50',
            'clienttype' => 'required|string|max:50',
            'focalPointName' => 'required|string|max:255',
            'focalPointPhone' => 'required|string|max:50',


        ]);

        $Customer = Customer::create($request->all());

        return redirect()
            ->back()
            ->with('create', '1');
    }


    public function show($id)
    {
       //
       $response['customers'] = Customer::find($id);
       return view('admin.customer.details.index', $response);  //
    }


    public function edit($id)
    {
        //
        $response['customers'] = Customer::find($id);
        return view('admin.customer.edit.index', $response);
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'tel' => 'max:50',
            'nif' => 'required|string|max:50',
            'address' => 'required|string|max:50',
            'clienttype' => 'required|string|max:50',
            'focalPointName' => 'required|string|max:255',
            'focalPointPhone' => 'required|string|max:50',
        ]);

        Customer::find($id)->update($request->all());

        return redirect()
            ->route('admin.customers.list.index')
            ->with('edit', '1');

    }

    public function destroy($id)
    {
        Customer::find($id)->delete();
        return redirect()
            ->route('admin.Customer.list.index')
            ->with('destroy', '1');
    }
}
