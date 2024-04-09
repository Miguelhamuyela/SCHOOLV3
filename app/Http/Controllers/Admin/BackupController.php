<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\Backup;
use Illuminate\Http\Request;

class BackupController extends Controller
{
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger;
    }
    public function index()
    {
        $response['backups'] =  Backup::get();
        //Logger
        $this->Logger->log('info', 'Listou os Funcionários');
        return view('admin.backup.list.index', $response);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       //Logger
       $this->Logger->log('info', 'Entrou em Cadastrar Funcionário');
       return view('admin.backup.create.index');
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
            'name' => 'required|string|max:255',
            'machineIp' => 'required|string|max:200',
        ]);
        $backups = Backup::create([
            'name' => $request->name,
            'machineIp' => $request->machineIp,
        ]);

        //Logger
        $this->Logger->log('info', 'Cadastrou um Funcionário com o identificador ' . $backups->id);
        return redirect()->route('admin.backups.index')->with('create', '1');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $response['backups'] =  Backup::find($id);
        //Logger
        $this->Logger->log('info', 'Visualizou um Funcionário com o identificador ' . $id);
        return view('admin.backup.details.index', $response);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $response['backups'] = Backup::find($id);

        //Logger
        $this->Logger->log('info', 'Entrou em editar um Funcionário  com o identificador ' . $id);
        return view('admin.backup.edit.index', $response);
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
        $request->validate([
            'name' => 'required|string|max:255',
            'machineIp' => 'required|string|max:200',
        ]);

        $backups = Backup::find($id)->update([
            'name' => $request->name,
            'machineIp' => $request->machineIp,
        ]);


        //Logger
        $this->Logger->log('info', 'Editou um Funcionário com o identificador ' . $id);
        return redirect()->route('admin.backup.index')->with('edit', '1');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Backup::find($id)->delete();

        $this->Logger->log('info', 'Eliminou um Funcionário com o identificador ' . $id);
        return  redirect()->route('admin.backup.index')->with('destroy', '1');
    }
}
