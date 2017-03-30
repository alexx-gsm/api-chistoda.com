@extends('layouts.admin')

@section('content')
<div class="content-wrapper">
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h2>прайс</h2>
            </div>
            <div>
                <h3>Текущий прайс</h3>
                @if ($price !== null)
                    <div>{{ $price->title }}</div>
                    <a href="{{ asset($price->link) }}" target="_blank">Скачать</a>
                @endif

            </div>


            <hr>
            <div class="card-block">
                <form method="POST" action="{{ url('/admin/price/save') }}"  enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group row">
                        <label for="price-title" class="col-2 col-form-label">Заголовок</label>
                        <div class="col-10">
                            <input class="form-control" type="text" value="Прайс" id="price-title" name="title">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="price" class="col-2 col-form-label">Файл</label>
                        <div class="col-10">
                            <input type="file" class="form-control-file" id="price" aria-describedby="fileHelp" name="price">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Сохранить</button>
                </form>
            </div>
        </div>
    </div>



</div>

@endsection
