@extends('layouts.admin_layout')

@section('title', 'Добавить автомобиль')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Добавить автомобиль</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
            @if (session('success'))
                <div class="alert alert-success" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-check"></i>{{ session('success') }}</h4>
                </div>
            @endif
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-primary">
                        <!-- form start -->
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
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Добавить</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
