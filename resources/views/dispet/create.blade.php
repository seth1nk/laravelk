<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight" align="center">
            {{ __('Добавить Диспетчерскую') }}
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
        <form action="{{ route('dispet.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="time_prib" class="form-label">Время прибытия</label>
                <input type="datetime-local" class="form-control" id="time_prib" name="time_prib" required>
            </div>
            <div class="mb-3">
                <label for="time_otb" class="form-label">Время отбытия</label>
                <input type="datetime-local" class="form-control" id="time_otb" name="time_otb" required>
            </div>
            <div class="mb-3">
                <label for="id_vod" class="form-label">Код водителя</label>
                <select class="form-control" id="id_vod" name="id_vod" required>
                    @foreach($voditeli as $voditel)
                        <option value="{{ $voditel->id_vod }}">{{ $voditel->id_vod }} - {{ $voditel->name_vod }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="pytevka" class="form-label">Путевка</label>
                <select class="form-control" id="pytevka" name="pytevka" required>
                    @foreach($marhs as $marh)
                        <option value="{{ $marh->id_marh }}">{{ $marh->id_marh }} - {{ $marh->mesto }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="tovar" class="form-label">Товар</label>
                <select class="form-control" id="tovar" name="tovar" required>
                    @foreach($tovars as $tovar)
                        <option value="{{ $tovar->id_tovar }}">{{ $tovar->id_tovar }} - {{ $tovar->name_tovar }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="id_avto" class="form-label">ID Автомобиля</label>
                <select class="form-control" id="id_avto" name="id_avto" required>
                    @foreach($avtos as $avto)
                        <option value="{{ $avto->id_avto }}">{{ $avto->id_avto }} - {{ $avto->name_avto }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary"><i class="fas fa-plus"></i> Создать</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
</x-app-layout>