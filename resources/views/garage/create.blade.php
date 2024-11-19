<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight" align="center">
            {{ __('Добавить Гараж') }}
        </h2>
    </x-slot>
    <!-- Подключение Bootstrap через CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Подключение FontAwesome через CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        .container {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 800px; /* Устанавливаем фиксированную ширину */
            margin: 0 auto; /* Центрируем контейнер по горизонтали */
        }
    </style>
    <div class="container mt-5">
        <form action="{{ route('garage.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="id_avto" class="form-label">ID Авто</label>
                <select class="form-control" id="id_avto" name="id_avto" required>
                    @foreach($avtos as $avto)
                        <option value="{{ $avto->id_avto }}">{{ $avto->id_avto }} - {{ $avto->name_avto }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="polomka" class="form-label">Поломка</label>
                <input type="text" class="form-control" id="polomka" name="polomka" required>
            </div>
            <div class="mb-3">
                <label for="zapchast" class="form-label">Запчасть</label>
                <input type="text" class="form-control" id="zapchast" name="zapchast" required>
            </div>
            <div class="mb-3">
                <label for="cena_zapchast" class="form-label">Цена Запчасти</label>
                <input type="text" class="form-control" id="cena_zapchast" name="cena_zapchast" required>
            </div>
            <div class="mb-3">
                <label for="data_nachalo" class="form-label">Дата Начала</label>
                <input type="date" class="form-control" id="data_nachalo" name="data_nachalo" required>
            </div>
            <div class="mb-3">
                <label for="data_konec" class="form-label">Дата Конца</label>
                <input type="date" class="form-control" id="data_konec" name="data_konec" required>
            </div>
            <button type="submit" class="btn btn-primary"><i class="fas fa-plus"></i> Создать</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
</x-app-layout>