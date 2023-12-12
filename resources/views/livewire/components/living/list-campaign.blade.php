<div class="container-fluid" style="height: 100vh !important;">
    <div class="col-xl-12 p-3">
        <div class="row mt-40 flex-nowrap">
            <div class="card">
                <div class="card-header bg-white d-flex justify-content-between">
                    <a href="#" class="add-campaign col-10">
                        <i class='bx bx-file-blank icon-campaign'></i> 
                        <p class="pt-3">
                            Campanhas
                        </p>
                    </a>
                    <button type="button" class="btn-header bg-plus" wire:click="renderNewCampaign">
                        <span class="icon-content">
                            <i class="bx bx-plus text-white"></i>
                        </span>
                    </button>
                </div>
                <div class="card-body">
                    @if (session()->has('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>Campanha</th>
                                <th>Categoria</th>
                                <th>Descrição</th>
                                <th>Inicio</th>
                                <th>Fim</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($campaigns as $campaign)
                                <tr>
                                    <td>{{ $campaign->name }}</td>
                                    <td>{{ $campaign->category }}</td>
                                    <td>{{ $campaign->description }}</td>
                                    <td>{{ Carbon::parse($campaign->date_ini)->format('d/m/Y') }}</td>
                                    <td>{{ Carbon::parse($campaign->date_end)->format('d/m/Y') }}</td>
                                    <td>
                                        <a href="#" class="text-warning mx-2" wire:click="renderEdit({{ $campaign->id }})"><i class="bi bi-pencil-square"></i></a>
                                        <a href="#" class="text-danger" wire:click="delete({{ $campaign->id }})"><i class="bi bi-trash-fill"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
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
