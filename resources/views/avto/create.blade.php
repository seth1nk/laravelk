<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight" align="center">
            {{ __('Добавить Автомобиль') }}
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
        <form action="{{ route('avto.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="registration_number" class="form-label">Регистрационный № авто</label>
                <input type="text" class="form-control" id="registration_number" name="registration_number" required>
            </div>
            <div class="mb-3">
                <label for="name_avto" class="form-label">Название авто</label>
                <input type="text" class="form-control" id="name_avto" name="name_avto" required>
            </div>
            <div class="mb-3">
                <label for="god" class="form-label">Год выпуска</label>
                <input type="text" class="form-control" id="god" name="god" required>
            </div>
            <div class="mb-3">
                <label for="probeg" class="form-label">Пробег</label>
                <input type="text" class="form-control" id="probeg" name="probeg" required>
            </div>
            <div class="mb-3">
                <label for="category" class="form-label">Категория</label>
                <input type="text" class="form-control" id="category" name="category" required>
            </div>
            <button type="submit" class="btn btn-primary"><i class="fas fa-plus"></i> Создать</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
</x-app-layout>