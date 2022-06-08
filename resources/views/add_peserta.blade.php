<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>
        <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                <div class="flex justify-center h-screen w-full">
                    <div class="bg-white rounded p-8 m-4">
                        <h1 class="block w-full text-center text-gray-800 text-2xl font-bold mb-6">daftar event {{$event->nama}}</h1>
                        <form action="/welcome/create" method="post">
                            {{csrf_field()}}
                            <div class="flex flex-col mb-4">
                                <label class="mb-2 font-bold text-lg text-gray-900" for="nama">Nama</label>
                                <input class="border py-2 px-3 text-grey-800" type="text" name="nama" id="nama">
                            </div>
                            <div class="flex flex-col mb-4">
                                <label class="mb-2 font-bold text-lg text-gray-900" for="email">Email</label>
                                <input class="border py-2 px-3 text-grey-800" type="email" name="email" id="email">
                            </div>
                            <div class="flex flex-col mb-4">
                                <label class="mb-2 font-bold text-lg text-gray-900" for="tanggal_lahir">Tanggal lahir</label>
                                <input class="border py-2 px-3 text-grey-800" type="date" name="tanggal_lahir" id="tanggal_lahir">
                            </div>
                            <div class="flex flex-col mb-4">
                                <label class="mb-2 font-bold text-lg text-gray-900" for="alamat">alamat</label>
                                <input class="border py-2 px-3 text-grey-800" type="text" name="alamat" id="alamat">
                            </div>
                            <div class="invisible flex flex-col mb-4">
                                <label class="mb-2 font-bold text-lg text-gray-900" for="id_event">id</label>
                                <input class="border py-2 px-3 text-grey-800" type="text" name="id_event" id="id_event" value="{{$event->id}}">
                            </div>
                            <button class="block bg-green-400 hover:bg-green-600 text-white uppercase text-lg mx-auto p-4 rounded" type="submit">tambah</button>
                        </form>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
    </x-auth-card>
</x-guest-layout>
