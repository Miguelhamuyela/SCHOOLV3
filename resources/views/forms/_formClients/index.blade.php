<br><br>
<div class="row">

    <div class="col-md-5">
      <div class="form-group">
          <label for="name">Nome do Cliente <small class="text-danger">*</small></label>
          <input type="text" name="name" id="name" value="{{ isset($client->name) ? $client->name: old('name') }}"
              class="form-control border rounded" placeholder="Nome do Cliente" required>
      </div>
  </div>
  
  <div class="col-md-4">
    <div class="form-group">
        <label for="nif">NIF <small class="text-danger">*</small></label>
        <input type="text" name="nif" id="nif" value="{{ isset($client->nif) ? $client->nif: old('nif') }}"
            class="form-control border rounded" placeholder="Nº de Identificação Fiscal" required>
    </div>
  </div>

  <div class="col-md-3">
    <div class="form-group">
      <label for="clienttype">Tipo de Cliente <small class="text-danger">*</small></label>
      <select type="text" name="clienttype" id="clienttype" class="form-control border rounded" required>

          @if (isset($client->clienttype))
              <option value="{{ $client->clienttype }}" class="text-primary h6 bg-primary text-white" selected>
                  {{ $client->clienttype }}
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

  </div>


  <div class="row">

  <div class="col-md-4">
    <div class="form-group">
        <label for="email">Email <small class="text-danger">*</small></label>
        <input type="email" name="email" id="email" value="{{ isset($client->email) ? $client->email: old('email') }}"
            class="form-control border rounded" placeholder="Email do Cliente" required>
    </div>
  </div>

  <div class="col-md-4">
    <div class="form-group">
        <label for="tel">Telefone <small class="text-danger">*</small></label>
        <input type="text" name="tel" id="tel" value="{{ isset($client->tel) ? $client->tel: old('tel') }}"
            class="form-control border rounded" placeholder="Telefone do Cliente" required>
    </div>
  </div>

  <div class="col-md-4">
    <div class="form-group">
        <label for="tel">Endereço <small class="text-danger">*</small></label>
        <input type="text" name="address" id="address" value="{{ isset($client->address) ? $client->address: old('address') }}"
            class="form-control border rounded" placeholder="Endereço do Cliente" required>
    </div>
  </div>


  <div class="col-md-4">
    <div class="form-group">
        <label for="tel">Nome do Ponto Focal<small class="text-danger">*</small></label>
        <input type="text" name="tel" id="tel" value="{{ isset($client->tel) ? $client->tel: old('tel') }}"
            class="form-control border rounded" placeholder="Telefone do Cliente" required>
    </div>
  </div>

  <div class="col-md-4">
    <div class="form-group">
        <label for="tel">Telefone do Ponto Focal<small class="text-danger">*</small></label>
        <input type="text" name="address" id="address" value="{{ isset($client->address) ? $client->address: old('address') }}"
            class="form-control border rounded" placeholder="Endereço do Cliente" required>
    </div>
  </div>
  </div>
  <!-- /.col -->

