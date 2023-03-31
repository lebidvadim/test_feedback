<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <h1 class="text-center pt-5 pb-3">Зворотній звязок</h1>
            @if(session('success'))
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    </div>
                </div>
            @endif

            <form class="row justify-content-center" method="POST" action="{{ route('feedback.post') }}">
                @csrf
                <div class="col-md-6">
                    <div class="mb-3">
                        <input type="text" name="full_name" placeholder="ФІО" class="form-control @error('full_name') is-invalid @enderror" value="{{ old('full_name') }}">
                        @error('full_name')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <input type="text" name="phone" placeholder="Телефон" class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone') }}">
                        @error('phone')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <select class="form-select @error('city_id') is-invalid @enderror" name="city_id">
                            <option selected>Виберіть Місто</option>
                            @foreach($cities as $id => $cityName)
                                <option value="{{ $id }}">{{ $cityName }}</option>
                            @endforeach
                        </select>
                        @error('city_id')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <textarea class="form-control @error('message') is-invalid @enderror" name="message" placeholder="Повідомлення" rows="3">{{ old('message') }}</textarea>
                        @error('message')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="text-center">
                        <button class="btn btn-primary" type="submit">Надіслати</button>
                    </div>
                </div>
            </form>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>
