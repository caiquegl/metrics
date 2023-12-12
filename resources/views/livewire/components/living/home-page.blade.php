<div class="container-fluid">
    <div class="col-xl-12 p-3">
        <div class="row mt-40 flex-nowrap">
            <div class="col-xxl-7 col-xl-6">
                <div class="col-12">
                    <h5>Campanha Vigente</h5>
                    <div class="card-banner">
                        <img src="{{ $vigente }}" class="obj-fit" style="max-height: 281px" width="100%"
                            alt="Campanha banner">
                    </div>
                </div>
                <div class="col-12 my-3 pt-3">
                    <h5>Próximas Campanhas</h5>
                    <div class="row">
                        @foreach ($campanhas as $campanha)
                            @livewire('components.living.card-campaign', [
                                'icon' => $campanha->url,
                                'title' => $campanha->name,
                                'description' => $campanha->description,
                            ])
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="col-xxl-5 col-xl-6">
                <!--<div class="col-xl-12 my-3 pt-2">
                    <div class="row">
                        <div class="col-6" id="mouth"></div>
                        <div class="col-6">
                            <div class="col-11 d-flex justify-content-end mr-30">
                                <button onclick="previousWeek()" class="btn-previous">
                                    <i class='bx bxs-left-arrow-alt'></i>
                                </button>
                                <button onclick="nextWeek()" class="btn-previous">
                                    <i class='bx bxs-right-arrow-alt'></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="calendar2" id="calendar-container2"></div>
                </div>-->
                <div class="row pt-4 my-2">
                    <div class="col-12 d-flex gap-2">
                        <div class="col-4">
                            <button onclick="window.location.href='{{ route('campaign') }}'" class="add-compaign">
                                <span class="h-100 col-12">
                                    <img src="{{ asset('/assets/images/icon/file-add-icon.svg') }}" class="pt-3"
                                        alt="icon file add">
                                </span>
                                <p>
                                    Adicionar Campanha
                                </p>
                            </button>
                        </div>
                        <div class="col-8">
                            <button onclick="window.location.href='{{ route('clients') }}'" class="add-vip">
                                <span>
                                    <img src="{{ asset('/assets/images/icon/user-add-icon.svg') }}" class="pt-3"
                                        alt="icon file add">
                                </span>
                                <p style="width: 100%;">
                                    Adicionar Cliente VIP
                                </p>
                            </button>
                        </div>
                    </div>
                    <div class="col-12 my-4">
                        <div class="row ">
                            <div class="col-12">
                                <div style="display: flex; align-items: center; gap: 20px;">
                                        <h5 class="text-changes pb-2">Resumo dos resultados</h5>
                                        <div class="row my-4">
                                            <div class="form-control bg-transparent border-0">
                                                <select name="living" id="living" class="select-custom-living">
                                                    <option selected>Selecione o Living</option>
                                                    <option value="1">Living Brasil</option>
                                                    <option value="2">Living Aeroportos</option>
                                                    <option value="3">Living SP</option>
                                                </select>
                                            </div>
                                        </div>
                                </div>
                                <div class="card-movement underland-gray">
                                    <div class="col-4 d-flex justify-content-center">
                                        <span class="book-item position-relative" style="margin-left: 15px">
                                            <img src="{{ asset('images/icon/newcrow.svg') }}" alt="icon file add">
                                        </span>
                                    </div>
                                    <div class="col-8">
                                        <div class="col-11 mx-5">
                                            <h4 class="vip-total">Total de VIP’s</h4>
                                            <div class="d-flex">
                                                <h1 class="txt-item-card">{{ $vips }}</h1>&nbsp;
                                                <h3 class="my-3 mx-2 pt-1 muted">Mês atual</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-movement underland-gray mb-4">
                                    <div class="col-4 d-flex justify-content-center">
                                        <span class="book-item position-relative" style="margin-left: 15px">
                                            <img src="{{ asset('images/icon/Grupo 143.svg') }}" alt="icon file add">
                                        </span>
                                    </div>
                                    <div class="col-8">
                                        <div class="col-11 mx-5">
                                            <h4 class="vip-total">Total de visitas</h4>
                                            <div class="d-flex">
                                                <h1 class="txt-item-card">{{ $visits }}</h1>&nbsp;
                                                <h3 class="my-3 mx-2 pt-1 muted">Mês atual</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-movement underland-green">
                                    <div class="col-4 d-flex justify-content-center">
                                        <span class="book-item position-relative" style="margin-left: 15px">
                                            <img src="{{ asset('images/icon/BG.svg') }}" alt="icon file add">
                                        </span>
                                    </div>
                                    <div class="col-8">
                                        <div class="col-11 mx-5">
                                            <h4 class="text-neon">Total Geral de Ativações</h4>
                                            <div class="d-flex">
                                                <div class="row">
                                                    <div class="col-3">
                                                        <h1 class="txt-item-card text-white">28</h1>&nbsp;
                                                    </div>
                                                    <span class="col">
                                                        <h3 class="text-white">Mês atual</h3>
                                                        <h5 class="text-white">(Todos Living HNK)</h5>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
