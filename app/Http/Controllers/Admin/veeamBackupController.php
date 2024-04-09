<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\VeeamBackup;
use App\Models\VirtualMachine;
use Facade\FlareClient\Http\Client;
use Illuminate\Http\Request;

class veeamBackupController extends Controller
{

    public function index()
    {

        $response['veeam_backups'] = VeeamBackup::get();
        return view('admin.VeeamBackup.list.index', $response);
    }

    public function create()
    {

        $response['virtual_machines'] = VirtualMachine::get();
        $response['veeam_backups'] = VeeamBackup::get();
        return view('admin.VeeamBackup.create.index',$response);
    }


    public function store(Request $request)
    {

        VeeamBackup::create([
            'name' => $request->name,
            'machineIp' => $request->machineIp,
            'fk_virtual_machines_id' => $request->fk_virtual_machines_id,

        ]);


       // return  redirect()->route('admin.veeam_backups.list.index')->with('create', '1');
        return redirect()->route('admin.veeam_backups.create.index')->with('create', 1);
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

        $response['virtual_machines'] = VirtualMachine::get();
        $response['veeam_backups'] = VeeamBackup::get();
         return view('admin.VeeamBackup.edit.index', $response);
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
        VeeamBackup::find($id)->update($request->all());
        return redirect()->route('admin.veeam_backups.index')->with('edit', 1);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        VeeamBackup::find($id)->delete();

        $this->Logger->log('info', 'Eliminou uma Maquina do backup com o identificador ' . $id);
        return  redirect()->route('admin.veeam_backups.index')->with('destroy', '1');
    }
}
