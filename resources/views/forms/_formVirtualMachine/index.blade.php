

 <div class="col-md-6">
    <div class="form-group">
        <label for="Especialidade">Especialidade </label>
        <select class="form-control " id="exampleSelect" name="fk_physical_machines_id" required>
            <option disabled>Especialidades</option>
            @isset($physical_machines)
            @foreach ($physical_machines as $item)
            <option value="{{ $item->id }}">{{ $item->name }}</option>
        @endforeach
            @endisset

        </select>
    </div>
</div>




<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <label for="name">Nome da Maquina Virtual<small class="text-danger">*</small></label>
            <input type="text" name="name" id="name"
                value="{{ isset($virtual_machines->name) ? $virtual_machines->name : old('name') }}"
                class="form-control border rounded" placeholder="Nome da Maquina" required>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="ip">IP da Maquina Virtual<small class="text-danger">*</small></label>
            <input type="text" name="ip" id="ip"
                value="{{ isset($virtual_machines->ip) ? $virtual_machines->ip : old('ip') }}"
                class="form-control border rounded" placeholder="Adicionar o IP" required>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="clienttype">Tipo de Cliente da Virtual <small class="text-danger">*</small></label>
            <select type="text" name="clienttype" id="clienttype" class="form-control border rounded" required>
                @if (isset($virtual_machines->clienttype))
                    <option value="{{ $virtual_machines->clienttype }}" class="text-primary h6 bg-primary text-white"
                        selected>
                        {{ $virtual_machines->clienttype }}
                    </option>
                @else
                    <option disabled selected value="">selecione uma outra opção</option>
                @endif
                <option>Singular</option>
                <option>Colectivo</option>
                <option>Empresa Privada</option>
                <option>Empresa Pública</option>
            </select>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="memory">Memória da Maquina Virtual<small class="text-danger">*</small></label>
            <input type="text" name="memory" id="memory"
                value="{{ isset($virtual_machines->memory) ? $virtual_machines->memory : old('memory') }}"
                class="form-control border rounded" placeholder="Memoria" required>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="cpu">CPU da Maquina Virtual<small class="text-danger">*</small></label>
            <input type="text" name="cpu" id="cpu"
                value="{{ isset($virtual_machines->cpu) ? $virtual_machines->cpu : old('cpu') }}"
                class="form-control border rounded" placeholder="Unidade Central de Processamento(CPU)" required>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="so">Sistema Operativo da Maquina Virtual <small class="text-danger">*</small></label>
            <input type="so" name="so" id="so"
                value="{{ isset($virtual_machines->so) ? $virtual_machines->so : old('so') }}"
                class="form-control border rounded" placeholder="Sistema Operativo" required>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <label for="storage">Storage da Maquina Virtual<small class="text-danger">*</small></label>
            <input type="text" name="storage" id="storage"
                value="{{ isset($virtual_machines->storage) ? $virtual_machines->storage : old('storage') }}"
                class="form-control border rounded" placeholder="Storage" required>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <div class="form-group">
                <label for="diskSpace">Espaço no Disco da Maquina Virtual<small class="text-danger">*</small></label>
                <input type="text" name="diskSpace" id="diskSpace"
                    value="{{ isset($virtual_machines->diskSpace) ? $virtual_machines->diskSpace : old('diskSpace') }}"
                    class="form-control border rounded" placeholder="Espaço no Disco" required>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="status">Estado da Maquina Virtual<small class="text-danger">*</small></label>
            <select type="text" name="status" id="status" class="form-control border rounded" required>

                @if (isset($virtual_machines->clienttype))
                    <option value="{{ $virtual_machines->status }}" class="text-primary h6 bg-primary text-white"
                        selected>
                        {{ $virtual_machines->status }}
                    </option>
                @else
                    <option disabled selected value="">selecione uma outra opção</option>
                @endif
                <option>Activo</option>
                <option>Desactivo</option>
            </select>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="autoRestart">Reinício Automático da Maquina Virtual
                <small class="text-danger">*</small></label>
            <select type="text" name="autoRestart" id="autoRestart" class="form-control border rounded" required>
                @if (isset($virtual_machines->autoRestart))
                    <option value="{{ $virtual_machines->autoRestart }}" class="text-primary h6 bg-primary text-white"
                        selected>
                        {{ $virtual_machines->autoRestart }}
                    </option>
                @else
                    <option disabled selected value="">selecione uma outra opção</option>
                @endif
                <option>On</option>
                <option>Off</option>
            </select>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="ip">Nome do Cliente/Empresa da Maquina Virtual<small
                    class="text-danger">*</small></label>
            <input type="text" name="interprise" id="interprise"
                value="{{ isset($virtual_machines->ip) ? $virtual_machines->interprise : old('interprise') }}"
                class="form-control border rounded" placeholder="Nome do Cliente/Empresa" required>
        </div>
    </div>
</div>
<!-- /.col -->
