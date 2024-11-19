<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight" align="center">
            {{ __('Водители') }}
        </h2>
    </x-slot>
    <!-- Подключение Bootstrap через CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Подключение FontAwesome через CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        <table class="table table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>ФИО Водителя</th>
                    <th>Стаж</th>
                    <th>№ паспорта</th>
                    <th>Место прописки</th>
                    <th>Телефон</th>
                    <th>Действия</th>
                </tr>
            </thead>
            <tbody>
                @foreach($voditeli as $voditeli)
                <tr>
                    <td>{{ $voditeli->id_vod }}</td>
                    <td>{{ $voditeli->name_vod }}</td>
                    <td>{{ $voditeli->stazh }}</td>
                    <td>{{ $voditeli->number_pass }}</td>
                    <td>{{ $voditeli->adress }}</td>
                    <td>{{ $voditeli->phone }}</td>
                    <td>
                    <a href="{{ route('voditeli.view', $voditeli->id_vod) }}" class="btn btn-info btn-sm"><i class="fas fa-eye"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
</x-app-layout>