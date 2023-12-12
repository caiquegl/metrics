<div class="container-fluid">
    
    <div class="col-xl-12 p-3 h-100">
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

        <div class="row mt-40 flex-nowrap">
            <div class="card">
                <div class="card-header bg-white d-flex justify-content-between">
                    <a href="#" class="add-campaign">
                        <i class="bi bi-list-task icon-campaign"></i>
                        <p class="pt-3">
                            Lista de Vips
                        </p>
                    </a>

                    <button type="button" class="btn-header bg-plus" wire:click="renderNewVips">
                        <span class="icon-content">
                            <i class='bx bx-plus text-white' ></i>
                        </span>
                    </button>
                </div>
                <div class="card-body">
                    <table class="table table-hover table-striped">
                        <thead>
                          <tr>
                            <th scope="col">Nome</th>
                            <th scope="col">Email</th>
                            <th scope="col">Contato</th>
                            <th scope="col">Endereço</th>
                            <th scope="col">Ações</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach ($vips as $vip)    
                            <tr>
                                <th scope="row">{{ $vip->name }}</th>
                                <td>{{ $vip->email }}</td>
                                <td>{{ $this->maskPhone($vip->phone_number) }}</td>
                                <td>{{ $vip->address }}</td>
                                <td>
                                    <a class="text-warning mx-2" href="{{ route("edit-clients", ['id' => $vip->id]) }}" ><i class="bi bi-pencil-square"></i></a>
                                    <a class="text-danger" wire:click="delete({{ $vip->id }})" href="#"><i class="bi bi-trash-fill"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="row justify-content-end">
                        <div class="col-auto">
                            <div class="pagination">
                                {{ $vips->links('pagination::bootstrap-5') }}
                            </div>
                        </div>
                    </div>
                </div>
               
                
            </div>
        </div>
    </div>
</div>
