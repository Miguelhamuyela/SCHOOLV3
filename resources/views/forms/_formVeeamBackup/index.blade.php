<input type="hidden" name="origin" value="E-Learning">
<div class="row">

    <div class="col-md-6">
        <div class="form-group">
            <label for="course">Nome da Maquina Vertual <small class="text-danger">*</small></label>
            <input placeholder="Nome da Maquina do Backup" type="text" name="name" id="veeam_backups"
                value="{{ isset($veeam_backups->name) ? $veeam_backups->name : old('name') }}"
                class="form-control border" required>


        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label for="machineIp">Ip da Maquina do Backup <small class="text-danger"> *</small></label>
            <input placeholder="Ip da Maquina do Backup" type="text" name="machineIp"
                value="{{ isset($veeam_backups->machineIp) ? $veeam_backups->machineIp : old('machineIp') }}"
                id="machineIp" class="form-control border" required>
        </div>
    </div>

</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="course">Nome da Maquina Vertual <small class="text-danger">*</small></label>
            <select name="fk_virtual_machines_id" class="form-control" aria-label="Default select example">
                <option disabled>Selecione o Nome da Maquina Vertual</option>
                @foreach ($virtual_machines as $item)
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
            </select>

        </div>
    </div>
   
</div>

<!-- /.col -->
