@extends('layouts.app')

@section('content')
    <div class="py-12 flex items-center">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="POST" action="{{ route('saveForm') }} " class="flex-col  ">
                        @csrf
                        <label for="name">Naam</label><br>
                        <input class="rounded" type="text" id="name" name="name">
                        @error('name')
                            <div style="color: red;">{{ $message }}</div>
                        @enderror
                        <br>
                        <label for="email">E-mail</label><br>
                        <input class="rounded" type="email" id="email" name="email">
                        @error('email')
                            <div style="color: red;">{{ $message }}</div>
                        @enderror
                        <br>
                        <label for="city">Stad</label>
                        <br>
                        <select class="rounded" id="city" name="city">
                            <option value="Amsterdam">Amsterdam</option>
                            <option value="Utrecht">Utrecht</option>
                            <option value="Rotterdam">Rotterdam</option>
                            <option value="Den Haag">Den Haag</option>
                            <option value="Den Helder">Den Helder</option>
                        </select>
                        <br>
                        <label for="fav_animals">Favoriete dier</label><br>
                        <input type="checkbox" id="hond" name="fav_animals[]" value="hond">
                        <label for="hond">Hond</label>

                        <input type="checkbox" id="kat" name="fav_animals[]" value="kat">
                        <label for="kat">Kat</label>

                        <input type="checkbox" id="vogel" name="fav_animals[]" value="vogel">
                        <label for="vogel">Vogel</label>

                        <input type="checkbox" id="vis" name="fav_animals[]" value="vis">
                        <label for="vis">Vis</label>
                        <br>
                        <label for="message">Bericht</label><br>
                        <textarea class="rounded" id="message" name="message"></textarea>
                        <br>
                        <button type="submit">Verstuur</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
