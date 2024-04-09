<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\Hack;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class HackController extends Controller
{
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger;
    }
    public function index()
    {
        $response['hacks'] =  Hack::get();
        //Logger
        $this->Logger->log('info', 'Listou um hack');
        return view('admin.hack.list.index', $response);
    }


    public function create()
    {
        //Logger
        $this->Logger->log('info', 'Entrou em Cadastrar hack');
        return view('admin.hack.create.index');
    }

    public function store(Request $request)
    {

        $request->validate([
            'namehack' => 'required|string|max:255',
            'group' => 'required|string|max:255',
            'numberHack' => 'max:50',
            'obs' => 'required|string|max:50',

        ]);

        $hacks = Hack::create($request->all());

        return redirect()
            ->back()
            ->with('create', '1');

    }


    public function show($id)
    {
        $response['hacks'] = Hack::find($id);
        //Logger
        $this->Logger->log('info', 'Visualizou uma Hack  com o identificador ' . $id);
        return view('admin.hack.details.index', $response);
    }


    public function edit($id)
    {
        $response['hacks'] = Hack::find($id);

        //Logger
        $this->Logger->log('info', 'Entrou em editar um hack com o identificador ' . $id);
        return view('admin.hack.edit.index', $response);
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'namehack' => 'required|string|max:255',
            'group' => 'required|string|max:255',
            'numberHack' => 'max:50',
            'obs' => 'required|string|max:50',
        ]);

        Hack::find($id)->update($request->all());

        return redirect()
            ->route('admin.hacks.list.index')
            ->with('edit', '1');
    }

    public function destroy($id)
    {
        Hack::find($id)->delete();

        $this->Logger->log('info', 'Eliminou um hack com o identificador ' . $id);
        return  redirect()->route('admin.hacks.index')->with('destroy', '1');
    }
}
