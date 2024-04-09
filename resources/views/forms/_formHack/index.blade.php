
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="name">Nome do Hack <small class="text-danger">*</small></label>
            <input type="text" name="namehack" id="namehack"
                value="{{ isset($hacks->namehack) ? $hacks->namehack : old('namehack') }}"
                class="form-control border rounded" placeholder="Nome do Hack" required>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="clienttype">Selecione o Grupo<small class="text-danger">*</small></label>
            <select type="text" name="group" id="group" class="form-control border rounded" required>
                @if (isset($hacks->group))
                    <option value="{{ $hacks->group }}" class="text-primary h6 bg-primary text-white" selected>
                        {{ $hacks->group }}
                    </option>
                @else
                    <option disabled selected value="">selecione uma outra opção</option>
                @endif
                <option>A</option>
                <option>B</option>
                <option>C </option>
                <option>D </option>
            </select>
        </div>
    </div>
</div>

<div class="col-md-12">
    <div class="form-group">
        <label for="name">Número  da Hack <small class="text-danger">*</small></label>
        <input type="text" name="numberHack" id="numberHack"
            value="{{ isset($hacks->numberHack) ? $hacks->numberHack : old('numberHack') }}"
            class="form-control border rounded" placeholder="Número da  Hack" required>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <label for="note">Descrição<small class="text-danger"> *</small></label>
            <textarea name="obs" class="form-control rounded" style="min-height:50px; min-width:100%"
                required>{{ isset($hacks->obs) ? $hacks->obs : old('obs') }}</textarea>
        </div>
    </div>
</div>
<!-- /.col -->
