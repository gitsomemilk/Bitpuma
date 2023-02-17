@extends('layouts.app')

@section('content')
    <div>
        <h1 class="text-center text-2xl p-10">
            Inzendingen overzicht
        </h1>
        
        <div class= "grid gap-4 max-w-5xl mx-auto sm:px-6 lg:px-8">
            <table class="border-separate border-spacing-2 border border-slate-500 rounded">
                <thead class="text-center ">
                    <tr>
                        <th class="border border-slate-600 bg-stone-300 ...">Naam</th>
                        <th class="border border-slate-600 bg-stone-300 ...">Email</th>
                        <th class="border border-slate-600 bg-stone-300 ...">Stad</th>
                        <th class="border border-slate-600 bg-stone-300 ...">Favoriete dieren</th>
                        <th class="border border-slate-600 bg-stone-300 ...">Bericht</th>
                        <th class="border border-slate-600 bg-stone-300 ...">Verwijderen</th>
                    </tr>
                </thead>
                <tbody class="text-center ">
                    @foreach ($submission as $submission)
                        <tr>
                            <td class="border border-slate-700 bg-stone-100 hover:bg-teal-200 ">{{ $submission->name }}</td>
                            <td class="border border-slate-700 bg-stone-100 hover:bg-teal-200 ...">{{ $submission->email }}</td>
                            <td class="border border-slate-700 bg-stone-100 hover:bg-teal-200 ...">{{ $submission->city }}</td>
                            <td class="border border-slate-700 bg-stone-100 hover:bg-teal-200 ...">{{ $submission ->fav_animals[0] }}</td>
                            <td class="border border-slate-700 bg-stone-100 hover:bg-teal-200 ...">{{ $submission->message }}</td>
                            <td class="border border-slate-700 bg-red-600 hover:bg-red-900 rounded ..."><a href="delete/{{$submission->id}}">Verwijderen</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
