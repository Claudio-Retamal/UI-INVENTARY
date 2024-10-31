@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/argon-design-system-free/css/argon.min.css">

    @include('layouts.navbars.auth.topnav', ['title' => 'Categorias'])
    <div class="container-fluid py-4">
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn bg-gradient-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Projects table</h6>
                        <button type="button" class="btn bg-gradient-primary" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            NUEVA CATEGORIA
                        </button>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center justify-content-center mb-0">
                                <thead class="">
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xs font-weight-bolder ">
                                            ID</th>
                                        <th class="text-uppercase text-secondary text-xs font-weight-bolder ">
                                            NOMBRE</th>
                                        <th class="text-uppercase text-secondary text-xs font-weight-bolder ">
                                            DESCRIPCIÓN</th>

                                        <th class="text-uppercase text-secondary text-xs font-weight-bolder ">
                                            ESTADO</th>
                                        <th class="text-uppercase text-secondary text-xs font-weight-bolder ">
                                            FECHA</th>
                                        <th class="text-uppercase text-secondary text-xs font-weight-bolder ">
                                            ACCIONES</th>


                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categoria as $category)
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2">
                                                    <div>
                                                        <img src="/img/small-logos/logo-spotify.svg"
                                                            class="avatar avatar-sm rounded-circle me-2" alt="spotify">
                                                    </div>
                                                    <div class="my-auto">
                                                        <h6 class="mb-0 text-sm">{{ $category->id }}</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="text-sm font-weight-bold mb-0">{{ $category->nombre }}</p>
                                            </td>
                                            <td>
                                                <span class="text-xs font-weight-bold">{{ $category->descripcion }}</span>
                                            </td>

                                            <td>
                                                <p class="text-sm font-weight-bold mb-0">{{ $category->estado }}</p>
                                            </td>
                                            <td>
                                                <span class="text-xs font-weight-bold">{{ $category->created_at }}</span>
                                            </td>

                                            <td>
                                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                    data-bs-target="#editar" onclick="CargarRegistros({{ $category->id }})">
                                                    Editar
                                                </button>
                                            </td>

                                            <div class="modal fade" id="editar" tabindex="-1"
                                                aria-labelledby="recordsModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="recordsModalLabel">Lista de
                                                                Registros</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <ul id="recordsList" class="list-group">
                                                                <!-- Los registros se agregarán aquí dinámicamente -->
                                                            </ul>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Cerrar</button>
                                                        </div>
                                                    </div>
                                                </div>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <!-- JS de Bootstrap y Argon -->
                                <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
                                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

                                <script>
                                    function CargarRegistros(id) {
                                        console.log(id);
                                    }
                                </script>
                            </table>
                            <br>
                            <div class="container">
                                <div class="row">
                                    {{ $categoria->onEachSide(5)->links() }}
                                </div>
                            </div>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>




        @include('layouts.footers.auth.footer')
    </div>
@endsection
