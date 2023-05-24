<x-app-layout>
    <x-slot name="header">
        <h1 class="text-2xl font-bold">Lista de productos</h1>
    </x-slot>

    <div class="py-6 px-4 sm:px-6 lg:px-8">

        <a href="articulos/create" class="btn btn-primary"> CREAR</a>

        @foreach($data as $item)
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Cantidad</th>
                    <th scope="col">Precios</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <tr>
                    <td>{{ $item['id'] }}</td>
                    <td>{{ $item['name'] }}</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
            </tbody>
        </table>
        @endforeach
    </div>

</x-app-layout>