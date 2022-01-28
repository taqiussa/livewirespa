<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-xl text-gray-600 leading-tight">
            {{ __('Edit Profile') }}
        </h2>
    </x-slot>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 pt-5">
        <div class="bg-white bg-opacity-50 overflow-hidden rounded-lg sm:rounded-lg shadow mx-4">
            <div class="p-6 bg-white border-b border-gray-200 bg-opacity-50">

                <form>
                    <div class="md:flex mb-6">
                        <div class="md:w-1/3">
                            <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4" for="my-select">
                                Nama Lengkap
                            </label>
                        </div>
                        <div class="md:w-2/3">
                            <input class="form-input block w-full focus:bg-white" id="my-textfield" type="text" value="" placeholder="Nama Lengkap">
                        </div>
                    </div>
                    <div class="md:flex mb-6">
                        <div class="md:w-1/3">
                            <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4"
                                for="my-textfield">
                                Alamat
                            </label>
                        </div>
                        <div class="md:w-2/3">
                            <input class="form-input block w-full focus:bg-white" id="my-textfield" type="text" value="" placeholder="Alamat">
                            <p class="py-2 text-sm text-gray-600">add notes about populating the field</p>
                        </div>
                    </div>
                    <div class="md:flex mb-6">
                        <div class="md:w-1/3">
                            <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4"
                                for="my-textfield">
                                Umur
                            </label>
                        </div>
                        <div class="md:w-1/4">
                            <input class="form-input block w-full focus:bg-white" id="my-textfield" type="number" value="" placeholder="Umur th">
                            <p class="py-2 text-sm text-gray-600">add notes about populating the field</p>
                        </div>
                    </div>

                    <div class="md:flex mb-6">
                        <div class="md:w-1/3">
                            <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4" for="my-select">
                                Jenis Kelamin
                            </label>
                        </div>
                        <div class="md:w-1/4">
                            <select name="" class="form-select block w-full focus:bg-white" id="my-select">
                                <option value="Laki-Laki">Laki-Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                            <p class="py-2 text-sm text-gray-600">add notes about populating the field</p>
                        </div>
                    </div>
                    <div class="md:flex mb-6">
                        <div class="md:w-1/3">
                            <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4"
                                for="my-textfield">
                                No WhatsApp
                            </label>
                        </div>
                        <div class="md:w-1/4">
                            <input class="form-input block w-full focus:bg-white" id="my-textfield" type="number" value="" placeholder="628XXXXXXXX">
                            <p class="py-2 text-sm text-gray-600">Ganti angka 08XXX di depan dengan 628XXX</p>
                        </div>
                    </div>
                    <div class="md:flex mb-6">
                        <div class="md:w-1/3">
                            <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4"
                                for="my-textfield">
                                Foto Profile
                            </label>
                        </div>
                        <div class="md:w-1/3">
                            <input class="form-input block w-full focus:bg-white" id="my-textfield" type="file">
                            <p class="py-2 text-sm text-gray-600">add notes about populating the field</p>
                        </div>
                        <div class="md:w-1/3">
                            <img src="{{ url('img/logokendal.png') }}"
                                class="rounded-none lg:rounded-lg shadow-2xl hidden lg:block">
                        </div>
                    </div>
                    <div class="md:flex md:items-center">
                        <div class="md:w-1/3"></div>
                        <div class="md:w-2/3">
                            <button class="bg-green-700 hover:bg-green-900 text-white font-bold py-2 px-4 rounded-lg">
                                Simpan
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-app-layout>
