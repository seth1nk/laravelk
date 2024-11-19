<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight" align="center">
            {{ __('Изменить Товар') }}
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
        <form action="{{ route('tovar.update', $tovar->id_tovar) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name_tovar" class="form-label">Название товара</label>
                <input type="text" class="form-control" id="name_tovar" name="name_tovar" value="{{ $tovar->name_tovar }}" required>
            </div>
            <div class="mb-3">
                <label for="kolvo_tovar" class="form-label">Количество товара</label>
                <input type="text" class="form-control" id="kolvo_tovar" name="kolvo_tovar" value="{{ $tovar->kolvo_tovar }}" required>
            </div>
            <div class="mb-3">
                <label for="cena_tovar" class="form-label">Цена товара</label>
                <input type="text" class="form-control" id="cena_tovar" name="cena_tovar" value="{{ $tovar->cena_tovar }}" required>
            </div>
            <button type="submit" class="btn btn-primary"><i class="fas fa-pencil-alt"></i> Обновить</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
</x-app-layout>