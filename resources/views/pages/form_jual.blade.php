    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 pt-5">
        <div class="bg-white bg-opacity-50 overflow-hidden rounded-lg sm:rounded-lg shadow mx-4">
            <div class="p-6 bg-white border-b border-gray-200 bg-opacity-50">

                <form>
                    <div class="md:flex mb-6">
                        <div class="md:w-1/3">
                            <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4" for="my-select">
                                Jenis Penjualan
                            </label>
                        </div>
                        <div class="md:w-2/3">
                            <select name="" class="form-select block w-full focus:bg-white" id="my-select">
                                <option value="jual">Jual</option>
                                <option value="Jual-Sewa">Jual-Sewa</option>
                            </select>
                        </div>
                    </div>
                    <div class="md:flex mb-6">
                        <div class="md:w-1/3">
                            <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4"
                                for="my-textfield">
                                Harga
                            </label>
                        </div>
                        <div class="md:w-2/3">
                            <input class="form-input block w-full focus:bg-white" id="my-textfield" type="text" value="" placeholder="Rp. 10.000.000">
                            <p class="py-2 text-sm text-gray-600">add notes about populating the field</p>
                        </div>
                    </div>

                    <div class="md:flex mb-6">
                        <div class="md:w-1/3">
                            <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4" for="my-select">
                                Kategori Hak
                            </label>
                        </div>
                        <div class="md:w-2/3">
                            <select name="" class="form-select block w-full focus:bg-white" id="my-select">
                                <option value="Hak Milik">Hak Milik</option>
                                <option value="Hak Guna Bangun">Hak Guna Bangun</option>
                                <option value="Hak Pakai">Hak Pakai</option>
                                <option value="Hak Pengelolaan">Hak Pengelolaan</option>
                                <option value="Hak Guna Usaha">Hak Guna Usaha</option>
                            </select>
                            <p class="py-2 text-sm text-gray-600">add notes about populating the field</p>
                        </div>
                    </div>
                    <div class="md:flex mb-6">
                        <div class="md:w-1/3">
                            <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4"
                                for="my-textfield">
                                No
                            </label>
                        </div>
                        <div class="md:w-2/3">
                            <input class="form-input block w-full focus:bg-white" id="my-textfield" type="text" value="" placeholder="A2B2B3AC">
                            <p class="py-2 text-sm text-gray-600">add notes about populating the field</p>
                        </div>
                    </div>
                    <div class="md:flex mb-6">
                        <div class="md:w-1/3">
                            <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4"
                                for="my-textfield">
                                Nama Pemegang Hak
                            </label>
                        </div>
                        <div class="md:w-2/3">
                            <input class="form-input block w-full focus:bg-white" id="my-textfield" type="text" value="" placeholder="Nama Sesuai Sertifikat">
                            <p class="py-2 text-sm text-gray-600">add notes about populating the field</p>
                        </div>
                    </div>
                    <div class="md:flex mb-6">
                        <div class="md:w-1/3">
                            <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4"
                                for="my-textfield">
                                Luas Tanah
                            </label>
                        </div>
                        <div class="md:w-2/3">
                            <input class="form-input block w-full focus:bg-white" id="my-textfield" type="text" value="" placeholder="20 m X 20 m">
                            <p class="py-2 text-sm text-gray-600">add notes about populating the field</p>
                        </div>
                    </div>
                    <div class="md:flex mb-6">
                        <div class="md:w-1/3">
                            <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4"
                                for="my-textfield">
                                Lokasi
                            </label>
                        </div>
                        <div class="md:w-2/3">
                            <input class="form-input block w-full focus:bg-white" id="my-textfield" type="text" value="" placeholder="Lokasi : RT 3 RW 3 Batas Kanan dan Batas Kiri">
                            <p class="py-2 text-sm text-gray-600">add notes about populating the field</p>
                        </div>
                    </div>
                    <div class="md:flex mb-6">
                        <div class="md:w-1/3">
                            <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4"
                                for="my-textfield">
                                Foto Tanah
                            </label>
                        </div>
                        <div class="md:w-1/3">
                            <input class="form-input block w-full focus:bg-white" id="my-textfield" type="file">
                            <p class="py-2 text-sm text-gray-600">add notes about populating the field</p>
                        </div>
                        <div class="md:w-1/3">
                            <img src="{{ url('img/map6.svg') }}"
                                class="rounded-none lg:rounded-lg shadow-2xl hidden lg:block">
                        </div>
                    </div>
                    <div class="md:flex mb-6">
                        <div class="md:w-1/3">
                            <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4"
                                for="my-textarea">
                                Keterangan Lain
                            </label>
                        </div>
                        <div class="md:w-2/3">
                            <textarea class="form-textarea block w-full focus:bg-white" id="my-textarea" value=""
                                rows="8"></textarea>
                            <p class="py-2 text-sm text-gray-600">add notes about populating the field</p>
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
