<x-app-layout>
    <x-slot name="header">
        <h1 class="text-2xl font-bold">Lista de productos</h1>
    </x-slot>

    <div class="py-6 px-4 sm:px-6 lg:px-8">
        <a href="articulos/create" class="btn btn-primary">CREAR</a>

        @foreach($data as $item)
        <table class="table" style="table-layout: fixed;">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Cantidad</th>
                    <th scope="col">Estado</th>
                    <th scope="col">ID Vendedor</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <tr>
                    <td>{{ $item['id'] }}</td>
                    <td>{{ $item['name'] }}</td>
                    <td>{{ $item['description'] }}</td>
                    <td>{{ $item['quantity'] }}</td>
                    <td>{{ $item['status'] }}</td>
                    <td>{{ $item['seller_id'] }}</td>
                </tr>
            </tbody>
        </table>
        @endforeach
    </div>
</x-app-layout>

<x-app-layout>
    <x-slot name="header">
        <h1 class="text-2xl font-bold">Lista de productos</h1>
    </x-slot>

    <div class="py-6 px-4 sm:px-6 lg:px-8">
        <a href="articulos/create" class="btn btn-primary">CREAR</a>

       <table class="table table-striped table-dark">
            <thead class="thead-dark">
                <tr>
                    <th scope="col" style="width: 5%;" class="text-center">ID</th>
                    <th scope="col" style="width: 20%;" class="text-center">Nombre</th>
                    <th scope="col" style="width: 25%;" class="text-center">Descripción</th>
                    <th scope="col" style="width: 10%;" class="text-center">Cantidad</th>
                    <th scope="col" style="width: 10%;" class="text-center">Estado</th>
                    <th scope="col" style="width: 10%;" class="text-center">ID Vendedor</th>
                    <th scope="col" style="width: 20%;" class="text-center">Acciones</th>
                </tr>
            </thead>

            <tbody class="table-group-divider">
                @foreach($data as $item)
                <tr>
                    <td class="text-center">{{ $item['id'] }}</td>
                    <td class="text-center">{{ $item['name'] }}</td>
                    <td class="text-justify" style="word-wrap: break-word;">{{ $item['description'] }}</td>
                    <td class="text-center">{{ $item['quantity'] }}</td>
                    <td class="text-center">{{ $item['status'] }}</td>
                    <td class="text-center">{{ $item['seller_id'] }}</td>
                    <td class="text-center">Acciones...</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
