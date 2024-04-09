<div class="col-md-6">
    <div class="form-group">
        <label for="name">Nome da Maquina do Backup <small class="text-danger">*</small></label>
        <input type="text" name="name" id="name" value="{{ isset($backups->name) ? $backups->name : old('name') }}"
            class="form-control border rounded" placeholder="Nome do Funcionário" required>
    </div>
</div>


<div class="col-md-3">
    <div class="form-group">
        <label for="machineIp">Endereço da Maquina(IP) <small class="text-danger">*</small></label>
        <input type="text" name="machineIp" id="machineIp" value="{{ isset($backups->machineIp) ? $backups->machineIp : old('machineIp') }}"
            class="form-control border rounded" placeholder="Nº do IP" required>
    </div>
</div>



<div class="col-md-3">
    <div class="form-group">
        <label for="name">Email <small class="text-danger">*</small></label>
        <input type="email" name="email" id="email"
            value="{{ isset($employee->email) ? $employee->email : old('email') }}"
            class="form-control border rounded" placeholder="Email" required>
    </div>
</div>

<div class="col-md-4">
    <div class="form-group">
        <label for="occupation">Ocupação/Função <small class="text-danger">*</small></label>
        <input type="text" name="occupation" id="occupation"
            value="{{ isset($employee->occupation) ? $employee->occupation : old('occupation') }}"
            class="form-control border rounded" placeholder="Ocupação/Função" required>
    </div>
</div>


<div class="col-md-3">
    <div class="form-group">
        <label for="nif">NIF <small class="text-danger">*</small></label>
        <input type="text" name="nif" id="nif" value="{{ isset($employee->nif) ? $employee->nif : old('nif') }}"
            class="form-control border rounded" placeholder="Nº de Identificação Fiscal" required>
    </div>
</div>

<div class="col-md-5">
    <div class="form-group">
        <label for="departament">Departamento <small class="text-danger">*</small></label>

        <select type="text" name="departament" class="form-control border rounded" required>

            @isset ($employee->departament)
                <option value="{{ $employee->departament }}" class="text-white h6 bg-primary text-white" selected>
                    {{ $employee->departament }}

                </option>
            @else
                <option disabled selected value="">Selecione um Departamento</option>
            @endisset

            <option>Departamento de Massificação, Inclusão e Conteúdo Digital</option>
            <option>Departamento de Administração de Sistemas, Redes e Comunicações</option>
            <option>Departamento de Gestão de Infra-Estruturas Tecnológicas e Serviços Partilhados</option>
            <option>Departamento de Cibersegurança, Chaves Públicas e Carimbo do Tempo</option>
            <option>Departamento de Apoio ao Director Geral</option>
            <option>Departamento de Administração e Serviços Gerais</option>
            <option>Departamento de Comunicação, Inovação, Tecnologia e Modernização dos Serviços</option>
        </select>
    </div>
</div>




<div class="col-md-12">
    <div class="form-group">
        <label for="Foto">Foto <small class="text-danger"></small></label>
        <input type="file" name="photoEmployee"
            value="{{ isset($employee->photoEmployee) ? $employee->photoEmployee : old('photoEmployee') }}"
            id="photoEmployee" class="form-control border rounded">
    </div>
</div>
