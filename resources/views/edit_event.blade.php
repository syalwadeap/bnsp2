<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                <div class="flex justify-center h-screen w-full">
                    <div class="bg-white rounded p-8 m-4">
                        <h1 class="block w-full text-center text-gray-800 text-2xl font-bold mb-6">Edit event</h1>
                        <form action="/dashboard/{{$event->id}}/edit" method="post">
                            {{csrf_field()}}
                            <div class="invisible flex flex-col mb-4">
                                <label class="mb-2 font-bold text-lg text-gray-900" for="id">id event</label>
                                <input class="border py-2 px-3 text-grey-800" type="text" name="id" id="id" value="{{$event->id}}">
                            </div>
                            <div class="flex flex-col mb-4">
                                <label class="mb-2 font-bold text-lg text-gray-900" for="nama">Nama event</label>
                                <input class="border py-2 px-3 text-grey-800" type="text" name="nama" id="nama" value="{{$event->nama}}">
                            </div>
                            <div class="flex flex-col mb-4">
                                <label class="mb-2 font-bold text-lg text-gray-900" for="tanggal">Tanggal event</label>
                                <input class="border py-2 px-3 text-grey-800" type="date" name="tanggal" id="tanggal" value="{{$event->tanggal}}">
                            </div>
                            <div class="flex flex-col mb-4">
                                <label class="mb-2 font-bold text-lg text-gray-900" for="informasi">Informasi</label>
                                <input class="border py-2 px-3 text-grey-800" type="text" name="informasi" id="informasi" value="{{$event->informasi}}">
                            </div>
                            <button class="block bg-green-400 hover:bg-green-600 text-white uppercase text-lg mx-auto p-4 rounded" type="submit">edit</button>
                        </form>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
