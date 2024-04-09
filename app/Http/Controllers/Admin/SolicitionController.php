<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\Departament;
use App\Models\Solicition;
use Facade\IgnitionContracts\Solution;
use Illuminate\Http\Request;

class SolicitionController extends Controller
{

    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger;
    }

    public function index()
    {
        $response['solicitions'] = Solicition::get();
        //Logger
        $this->Logger->log('info', 'Listou os Funcionários');
        return view('admin.solicitions.list.index', $response);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $response['solicitions'] = Solicition::get();
         $this->Logger->log('info', 'Entrou em Cadastrar Funcionário');
         return view('admin.solicition.create.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Solicition::create([
            'name' => $request->name,
            'memory' => $request->memory,
           // 'space' => $request->space,
           // 'so' => $request->so,
           // 'focalPoint' => $request->focalPoint,
            'tel' => $request->tel,
          //  'applicationName' => $request->applicationName,
          //  'cpu' => $request->cpu,
           // 'deprtfocalPoint' => $request->deprtfocalPoint,
        ]);

        return redirect()->route('admin.solicitions.create.index')->with('create', 1);
    }

    public function show($id)
    {
        $response['solicitions'] =  Solicition::find($id);
        //Logger
        $this->Logger->log('info', 'Visualizou um Funcionário com o identificador ' . $id);
        return view('admin.solicition.details.index', $response);
    }

    public function edit($id)
    {
     //  $response['solicitions'] = Solicition::get();
     //   return view('admin.solicition.edit.index', $response);

        $response['solicitions'] = Solicition::find($id);

        //Logger
        $this->Logger->log('info', 'Entrou em editar um Funcionário  com o identificador ' . $id);
        return view('admin.solicitions.edit.index', $response);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
           // 'email' => 'required|string|max:255',
          //  'tel' => 'max:12',
          //  'nif' => 'required|string|max:50',
          //  'occupation' => 'required|string|max:50',
          //  'departament' => 'required|string|max:255',
          //  'photoEmployee' => 'mimes:jpg,png,gif,SVG,EPS'
        ]);

        $employee = Solicition::find($id)->update([
            'name' => $request->name,
            'memory' => $request->memory,
           // 'space' => $request->space,
           // 'so' => $request->so,
           // 'focalPoint' => $request->focalPoint,
            'tel' => $request->tel,
           // 'applicationName' => $request->applicationName,
           // 'cpu' => $request->cpu,
           // 'deprtfocalPoint' => $request->deprtfocalPoint,
        ]);


        //Logger
        $this->Logger->log('info', 'Editou um Funcionário com o identificador ' . $id);
        return redirect()->route('admin.solicitions.index')->with('edit', '1');
    }


    public function destroy($id)
    {
        Solicition::find($id)->delete();

        $this->Logger->log('info', 'Eliminou um Funcionário com o identificador ' . $id);
        return  redirect()->route('admin.solicitions.index')->with('destroy', '1');
    }
}
