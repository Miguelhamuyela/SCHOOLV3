<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\FisicMachine;
use App\Models\Hack;
use App\Models\PhysicalMachine;
use App\Models\VirtualMachine;
use Illuminate\Http\Request;

class virtualMachineController extends Controller
{
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger;
    }






    public function index()
    {
        $response['virtual_machines'] = VirtualMachine::get();
        //Logger
        $this->Logger->log('info', 'Listou a Maquina Vertual');
        return view('admin.virtualMachine.list.index', $response);
    }






    public function create()
    {

        $response['physical_machines'] = PhysicalMachine::get();
        $response['virtual_machines'] = VirtualMachine::get();
        //Logger
        $this->Logger->log('info', 'Entrou em Cadastrar a Maquina Virtual');
        return view('admin.virtualMachine.create.index');
    }




    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'ip' => 'required|string|max:200',
            'diskSpace' => 'max:20',
            'so' => 'required|string|max:50',
            'memory' => 'required|string|max:100',
            'cpu' => 'required|string|max:255',
            'autoRestart' => 'required|string|max:50',
            'storage' => 'required|string|max:100',
            'clienttype' => 'required|string|max:255',
            'status' => 'required|string|max:50',
            'interprise' => 'required|string|max:50',
        ]);

        $virtual_machines = VirtualMachine::create([

            'name' => $request->name,
            'ip' => $request->ip,
            'diskSpace' => $request->diskSpace,
            'so' => $request->so,
            'cpu' => $request->cpu,
            'memory' => $request->memory,
            'autoRestart' => $request->autoRestart,
            'storage' => $request->storage,
            'clienttype' => $request->clienttype,
            'status' => $request->status,
            'interprise' => $request->interprise,

        ]);
        //Logger
        $this->Logger->log('info', 'Cadastrou uma Maquina Virtual com o identificador ' . $virtual_machines->id);
        return redirect()->route('admin.virtual_machines.index')->with('create', '1');
    }

    public function show($id)
    {
        // $response['customers'] = Customer::get();
        $response['virtual_machines'] = VirtualMachine::find($id);
        //Logger
        $this->Logger->log('info', 'Visualizou uma Maquina Virtual  com o identificador ' . $id);
        return view('admin.virtualMachine.details.index', $response);
    }
    public function edit($id)
    {
        $response['virtual_machines'] = VirtualMachine::find($id);
        //Logger
        $this->Logger->log('info', 'Entrou em editar uma Maquina Virtual  com o identificador ' . $id);
        return view('admin.virtualMachine.edit.index', $response);
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'ip' => 'required|string|max:200',
            'diskSpace' => 'max:20',
            'so' => 'required|string|max:50',
            'memory' => 'required|string|max:100',
            'cpu' => 'required|string|max:255',
            'autoRestart' => 'required|string|max:50',
            'storage' => 'required|string|max:100',
            'clienttype' => 'required|string|max:255',
            'status' => 'required|string|max:50',
            'interprise' => 'required|string|max:50',
        ]);
        $virtual_machines = VirtualMachine::create([
            'name' => $request->name,
            'ip' => $request->ip,
            'diskSpace' => $request->diskSpace,
            'so' => $request->so,
            'cpu' => $request->cpu,
            'memory' => $request->memory,
            'autoRestart' => $request->autoRestart,
            'storage' => $request->storage,
            'clienttype' => $request->clienttype,
            'status' => $request->status,
            'interprise' => $request->interprise,
        ]);
        //Logger
        $this->Logger->log('info', 'Editou uma Maquina Virtual com o identificador ' . $id);
        return redirect()->route('admin.virtual_machines.index')->with('edit', '1');
    }

    public function destroy($id)
    {
        VirtualMachine::find($id)->delete();
        $this->Logger->log('info', 'Eliminou uma Maquina Virtual com o identificador ' . $id);
        return  redirect()->route('admin.virtual_machines.index')->with('destroy', '1');
    }
}
