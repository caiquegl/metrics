<div class="container-fluid">
    <div class="col-xl-12 p-3">
        <div class="row row-gap flex-column">
            @foreach ($campaignsList as $campaign)
                <div class="card card-campaing-height bg-transparent">
                    <div class="card-body reset-pad-mag">
                        <div class="row">
                            <div class="col-3">
                                <img src="{{ asset($campaign->url) }}" width="166" height="166"
                                    class="obj-fit revert-pos" alt="camp post">
                            </div>
                            <div class="col-9">
                                <h5 class="muted-campaign my-2">Campanha</h5>
                                <h2 class="sub-handing cursor-pointer" wire:click="editPage({{ $campaign->id }})">
                                    “{{ $campaign->name }}”</h2>
                                <h3 class="muted-campaign">{{ $campaign->category }}</h3>
                                <!--
                                <h5 class="fw-bold muted-campaign">
                                    <img src="{{ asset('icon/metrics/airport-03.svg') }}" alt="Airport icon"> Válido
                                    para: Living HNK Guarulhos
                                </h5>-->
                                <h5 class="fw-bold neon-campaign">
                                    <img src="{{ asset('icon/metrics/calendar.svg') }}" alt="Airport icon"> Período:
                                    {{ Carbon::parse($campaign->date_ini)->format('d/m/Y') }} -
                                    {{ Carbon::parse($campaign->date_end)->format('d/m/Y') }} 
                                    <a href="#" class="text-danger" wire:click="delete({{ $campaign->id }})"><i class="bi bi-trash-fill"></i></a>
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row">
            <div class="col-xl-12 pt-4">
                {{ $campaignsList->links('pagination::bootstrap-5') }}
            </div>
        </div>
        <div class="row mt-3 flex-nowrap">
            <div class="card" id="block-load">
                <div class="card-header bg-white">
                    <a href="#" class="add-campaign">
                        <i class='bx bx-file-blank icon-campaign'></i>
                        <p class="pt-3">
                            Criar nova campanha
                        </p>
                    </a>
                </div>
                <div class="card-body form-block">
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
                    @if (session()->has('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form wire:submit="setCompany">
                        @csrf
                        <div class="row">
                            <div class="col-12 mb-4">
                                <label for="" class="form-label">Nome da Campanha</label>
                                <input wire:model="name" type="text" class="form-control form-living-custom"
                                    name="campanha_name" placeholder="Adicione aqui">
                                <div>
                                    @error('name')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-7 mb-4">
                                <div class="col-7 mb-3">

                                    <label for="" class="form-label">Categoria</label>
                                    <select wire:model="category" class="form-control form-living-select-custom"
                                        name="category">
                                        <option value="" selected>Escolher</option>
                                        <option value="Brindes">Brindes</option>
                                        <option value="Chope">Chope</option>
                                        <option value="Petiscos">Petiscos</option>
                                    </select>
                                    <div>
                                        @error('category')
                                            <span class="error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="mb-3">

                                    <label for="" class="form-label"><i class='bx bx-paperclip'></i>
                                        Anexar</label>
                                    <div class="file-upload-container">
                                        <label for="fileInput" class="file-label">
                                            <!--<div class="file-icon">📂</div>-->
                                            <div class="file-text">Arraste aqui o seu arquivo</div>
                                        </label>
                                        <input type="file" wire:model="file" id="fileInput" class="file-input" />

                                        <div>
                                            @error('file')
                                                <span class="error" style="color: red;">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div>
                                        @error('file')
                                            <span class="error">{{ $message }}</span>
                                        @enderror
                                    </div>

                                </div>
                            </div>
                            <div class="col-5 mb-4">
                                <div class="mb-3">
                                    <div class="col-12 mb-4">
                                        <label for="date_range" class="form-label">Período da Campanha:</label>
                                        <!--<input type="text" name="range_date" id="range_date" maxlength="23"
                                            class="form-control form-living-custom">-->
                                        <div class="card shadow-custom card-campaing-box">
                                            <div class="card-header">
                                                <h6>
                                                    Selecione as datas
                                                </h6>
                                                <small class="small-oclused">Inicial e final da campanha</small>
                                            </div>
                                            <div class="card-body">
                                                <div class="mes-ano">
                                                    <button type="button" class="arrow-mounth" onclick="mudarMes(-1)">
                                                        <i class="bi bi-chevron-left"></i>
                                                    </button>
                                                    <span>
                                                        <p id="mesAno" class="my-2"></p>
                                                    </span>
                                                    <button type="button" class="arrow-mounth" onclick="mudarMes(1)">
                                                        <i class="bi bi-chevron-right"></i>
                                                    </button>
                                                </div>
                                                <div id="calendario" class="calendario"></div>
                                                <!--<div class="range">&nbsp;&nbsp;&nbsp;</div>-->
                                                <div class="row justify-content-end" id="refresh-on"
                                                    style="display:none">
                                                    <button class="refresh" id="refresh" type="button"
                                                        onclick="limparDatas()">
                                                        <i class="bi bi-arrow-clockwise"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <input wire:model="dateIni" type="hidden" id="dateIni"
                                            name="dateIni">
                                        <input wire:model="dateEnd" type="hidden" id="dateEnd"
                                            name="dateEnd">
                                        <div>
                                            @error('dateIni')
                                                <span class="error" style="color: red;">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-12 pt-3 mb-5">
                                <button type="submit" onclick="createdBlock('block-load')" class="btn-camp bg-primary text-white"><i
                                        class='bx bx-check-circle text-white'></i> Salvar</button>
                                <button type="reset" class="btn-camp btn-dark-gray text-white"><i
                                        class='bx bxs-x-circle'></i> Descartar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @push('scripts')
        <script>
            flatpickr('#date_range', {
                mode: 'range',
                dateFormat: 'Y-m-d',
                onChange: function(selectedDates) {
                    @this.set('dateRange', selectedDates);
                }
            });
        </script>
    @endpush
</div>
