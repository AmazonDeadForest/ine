<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Actividades') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header"><h5>Cargar datos</h5></div>
                            <div class="card-body">
                                <form action="{{ route('importActividades') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="file">Seleccione el archivo a cargar</label>
                                        <input class="form form-control" type="file" name="file">
                                    </div>
                                    <hr>
                                    <button class="btn-sm float-right">Importar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>            
        </div>
    </div>
</x-app-layout>
