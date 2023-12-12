<div class="container-fluid">
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    @if (session('erro'))
        <div class="alert alert-danger">
            {{ session('erro') }}
        </div>
    @endif
    <div class="col-xl-12 p-3">
        <div class="row mt-40 flex-nowrap">
            <div class="card">
                <div class="card-header bg-white">
                    <a href="#" class="add-campaign">
                        <i class='bx bx-user-plus icon-campaign'></i> 
                        <p class="pt-3">
                            Cadastrar Cliente VIP
                        </p>
                    </a>
                </div>
                <div class="card-body">
                    <h4 class="pt-2 mb-2 txt-form-vip">Preencha as informações abaixo</h4>
                    <form wire:submit="setClient">
                        @csrf
                        <div class="row">
                            <div class="col-12 mb-4">
                                <label for="" class="form-label">Nome</label>
                                <input wire:model="name" type="text" class="form-control form-living-custom bg-white" name="name" placeholder="Exemplo: Valentino moraes">
                                @error('name') <span class="error" style="color: red;">{{ $message }}</span> @enderror 
                            </div>
                        </div>

                        

                        <div class="row">
                            <div class="col-12 mb-4">
                                <label for="" class="form-label">Email</label>
                                <input wire:model="email" type="email" class="form-control form-living-custom bg-white" name="email" placeholder="Exemplo: va.morose@support.com">
                                @error('email') <span class="error" style="color: red;">{{ $message }}</span> @enderror 
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 mb-4">
                                <label for="" class="form-label">Número de telefone</label>
                                <input wire:model="phone_number" type="text" class="form-control form-living-custom bg-white" name="phone_number" placeholder="Exemplo: (99) 99999-9999">
                                @error('phone_number') <span class="error" style="color: red;">{{ $message }}</span> @enderror 
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 mb-4">
                                <label for="" class="form-label">Cep</label>
                                <span class="living-input-icon">
                                    <i class='bx bx-code-alt'></i>
                                    <input wire:model="zip_code" wire:blur="getCep" type="text" class="form-control form-living-custom bg-white" name="zip_code" placeholder="Exemplo: 00000-000">
                                
                                </span>
                                @error('zip_code') <span class="error" style="color: red;">{{ $message }}</span> @enderror 
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 mb-4">
                                <label for="" class="form-label">Endereço</label>
                                <input wire:model="address" type="text" class="form-control form-living-custom bg-white" name="address" placeholder="Exemplo: Rua dos serviços">
                                @error('address') <span class="error" style="color: red;">{{ $message }}</span> @enderror 
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 mb-4">
                                <label for="" class="form-label">Cidade</label>
                                <span class="living-input-icon">
                                    <i class='bx bxs-map'></i>
                                    <input wire:model="city" type="text" class="form-control form-living-custom bg-white" name="city" placeholder="Exemplo: São Paulo">
                                </span>
                                @error('city') <span class="error" style="color: red;">{{ $message }}</span> @enderror 
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 mb-4">
                                <label for="" class="form-label">Estado</label>
                                <span class="living-input-icon">
                                    <i class='bx bx-globe' ></i>
                                    <input wire:model="state" onkeyup="this.value = this.value.toUpperCase();" type="text" class="form-control form-living-custom bg-white" name="state" placeholder="Exemplo: São Paulo" maxlength="2">
                                </span>
                                @error('state') <span class="error" style="color: red;">{{ $message }}</span> @enderror 
                            </div>
                        </div>                      

                        <div class="row">
                            <div class="col-12 pt-3 mb-5">
                                <button type="submit" class="btn-camp bg-green-pallet text-white"><i class='bx bx-check-circle text-white' ></i> Salvar</button>
                                <button type="reset" class="btn-camp btn-dark-gray text-white"><i class='bx bxs-x-circle'></i> Descartar</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>