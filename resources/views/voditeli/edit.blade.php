<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight" align="center">
            {{ __('Изменить Водителя') }}
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
        <form action="{{ route('voditeli.update', $voditeli->id_vod) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name_vod" class="form-label">ФИО Водителя</label>
                <input type="text" class="form-control" id="name_vod" name="name_vod" value="{{ $voditeli->name_vod }}" required>
            </div>
            <div class="mb-3">
                <label for="stazh" class="form-label">Стаж</label>
                <input type="text" class="form-control" id="stazh" name="stazh" value="{{ $voditeli->stazh }}" required>
            </div>
            <div class="mb-3">
                <label for="number_pass" class="form-label">№ паспорта</label>
                <input type="text" class="form-control" id="number_pass" name="number_pass" value="{{ $voditeli->number_pass }}" required>
            </div>
            <div class="mb-3">
                <label for="adress" class="form-label">Место прописки</label>
                <input type="text" class="form-control" id="adress" name="adress" value="{{ $voditeli->adress }}" required>
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Телефон</label>
                <input type="text" class="form-control" id="phone" name="phone" value="{{ $voditeli->phone }}" required>
            </div>
            <button type="submit" class="btn btn-primary"><i class="fas fa-pencil-alt"></i> Обновить</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
</x-app-layout>