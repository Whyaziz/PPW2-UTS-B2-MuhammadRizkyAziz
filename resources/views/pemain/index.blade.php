
@extends('layouts.master')

@section('title', 'Pemain')

@section('content')
    <h1 class="px-16 mt-8 mb-8 text-bold font-weight-bold text-[30px]">Pemain</h1>

    
<div class="card p-8">
    <table class="w-ful">
        <thead class="uppercase">
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">No Punggung</th>
            <th scope="col">Posisi</th>
        </tr>
        </thead>

        <tbody>
            @php
            $no = 0;
            @endphp
            @foreach ($pemain as $item)
            <tr class="bg-red-500 border-b ">
                <td class="px-6 py-4">{{ ++$no }}</td>
                <td class="px-6 py-4">{{ $item->id }}</td>
                <td class="px-6 py-4">{{ $item->nama_pemain }}</td>
                <td class="px-6 py-4">{{ $item->no_punggung }}</td>
                <td class="px-6 py-4">{{ $item->posisi }}</td>
            </tr>
            @endforeach
        </tbody>

        
    </table>
</div>
@endsection
