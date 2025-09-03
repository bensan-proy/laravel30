<x-layouts.app>
    <x-slot name="header">
        <h2>Empleados</h2>
    </x-slot>


    <div class="mt-8">
        <table class="w-full table-auto">
            <thead>
                <tr>
                    <th>ID EMPLEADO</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                </tr>
            </thead>
            <tbody>
                 @foreach($datos as $dato)
                    <tr>
                        <td>{{ $dato->employee_id }}</td>
                        <td>{{ $dato->first_name }}</td>
                        <td>{{ $dato->last_name }}</td>
                        <td>
                            <!-- Botones para editar/eliminar -->
                        </td>
                    </tr>
                @endforeach            </tbody>
        </table>
    </div>
</x-layouts.app>
