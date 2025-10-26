<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <section class="py-8 mt-3 grid grid-cols-1 md:grid-cols-2 gap-12 items-center">

        {{-- ✅ Kiri: Konten teks --}}
        <div class="space-y-8">
            {{-- Badge kecil di atas --}}
            <div
                class="inline-flex items-center space-x-2 bg-green-50 text-green-700 px-4 py-2 rounded-full text-sm font-medium">
                <img src="{{ asset('images/image2.png') }}" alt="" srcset="">
                <span>Platform Sewa Perlengkapan Outdoor Terpercaya</span>
            </div>

            {{-- Judul besar --}}
            <h1 class="text-5xl font-extrabold leading-tight text-gray-900">
                Nikmati jelajah alam <br>
                bersama <span class="text-green-700">Gudang Petualang</span>
            </h1>

            {{-- Deskripsi --}}
            <p class="text-gray-600 text-[13px] leading-relaxed max-w-md">
                Sewa perlengkapan outdoor berkualitas untuk petualangan Anda.
                Dari solo backpacking hingga glamping keluarga, kami punya semuanya!
            </p>

            {{-- Tombol --}}
            <div class="flex flex-wrap gap-4">
                <button
                    class="bg-[#088302] text-white px-6 py-3 rounded-full font-medium hover:bg-green-800 transition">
                    Lihat Paket Sewa
                </button>
                <button
                    class="border border-green-700 text-green-700 px-6 py-3 rounded-full font-medium hover:bg-green-50 transition">
                    Hubungi Kami
                </button>
            </div>

            {{-- Fitur kecil --}}
            <div class="grid grid-cols-3 gap-6 pt-8">
                <div class="flex flex-col items-start text-start">
                    <div class="bg-green-50 rounded-xl mb-2">
                        <img src="{{ asset('images/terjamin.png') }}" alt="" srcset="">
                    </div>
                    <p class="font-semibold text-gray-900">Terjamin</p>
                    <p class="text-sm text-gray-500">Kualitas Terbaik</p>
                </div>

                <div class="flex flex-col items-start text-start">
                    <div class="bg-green-50 rounded-xl mb-2">
                        <img src="{{ asset('images/fleksibel.png') }}" alt="" srcset="">
                    </div>
                    <p class="font-semibold text-gray-900">Fleksibel</p>
                    <p class="text-sm text-gray-500">Sewa Terjadwal</p>
                </div>

                <div class="flex flex-col items-start text-start">
                    <div class="bg-green-50 rounded-xl mb-2">
                        <img src="{{ asset('images/tersedia.png') }}" alt="">
                    </div>
                    <p class="font-semibold text-gray-900">Lokasi</p>
                    <p class="text-sm text-gray-500">Bedugul, Tabanan</p>
                </div>
            </div>
        </div>

        {{-- ✅ Kanan: Gambar --}}
        <div class="relative">
            <img src="{{ asset('images/hero.jpg') }}" alt="Camping"
                class="w-full h-[600px] object-cover rounded-[2rem] shadow-2xl">
            {{-- Card kecil di atas gambar --}}
            <div
                class="absolute bottom-6 left-6 bg-white px-6 py-4 rounded-2xl shadow-lg flex items-center space-x-4 w-[85%] md:w-[90%]">
                <div class="text-white p-4 rounded-xl flex items-center justify-center">
                    <img src="{{ asset('images/500.png') }}" alt="" class="w-full" srcset="">
                </div>
                <div>
                    <p class="font-bold text-gray-900 text-lg">500+</p>
                    <p class="text-gray-600 text-lg">Pelanggan merasa puas</p>
                </div>
            </div>

        </div>
    </section>
    {{-- Section: Kenapa Gudang Petualang --}}
    <section class="py-20 mt-24 mb-20">
        {{-- Judul dan deskripsi --}}
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 mb-4">
                Kenapa sih harus dengan Gudang Petualang?
            </h2>
            <p class="text-gray-600 max-w-2xl mx-auto text-lg">
                Kami berkomitmen memberikan pengalaman camping terbaik dengan layanan profesional dan peralatan
                berkualitas
            </p>
        </div>

        {{-- Grid 4 kolom --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            {{-- Card 1 --}}
            <div class="bg-gray-50 rounded-2xl p-6 flex flex-col items-start shadow-sm hover:shadow-md transition">
                <div class="bg-indigo-100 p-3 rounded-xl mb-4">
                    <img src="{{ asset('images/terpercaya.png') }}" alt="">
                </div>
                <h3 class="font-semibold text-gray-900 text-lg mb-2">Terpercaya & Aman</h3>
                <p class="text-gray-600 text-sm leading-relaxed">
                    Peralatan berkualitas yang telah teruji dan dijamin keamanannya untuk petualangan Anda.
                </p>
            </div>

            {{-- Card 2 --}}
            <div class="bg-gray-50 rounded-2xl p-6 flex flex-col items-start shadow-sm hover:shadow-md transition">
                <div class="bg-yellow-100 p-3 rounded-xl mb-4">
                    <img src="{{ asset('images/terjangkau.png') }}" alt="" srcset="">
                </div>
                <h3 class="font-semibold text-gray-900 text-lg mb-2">Harga Terjangkau</h3>
                <p class="text-gray-600 text-sm leading-relaxed">
                    Sistem sewa fleksibel dengan harga kompetitif untuk semua kalangan pecinta alam.
                </p>
            </div>

            {{-- Card 3 --}}
            <div class="bg-gray-50 rounded-2xl p-6 flex flex-col items-start shadow-sm hover:shadow-md transition">
                <div class="bg-blue-100 p-3 rounded-xl mb-4">
                    <img src="{{ asset('images/pelayanan.png') }}" alt="">
                </div>
                <h3 class="font-semibold text-gray-900 text-lg mb-2">Pelayanan Terbaik</h3>
                <p class="text-gray-600 text-sm leading-relaxed">
                    Tim customer service profesional siap membantu Anda 24/7 untuk pengalaman terbaik.
                </p>
            </div>

            {{-- Card 4 --}}
            <div class="bg-gray-50 rounded-2xl p-6 flex flex-col items-start shadow-sm hover:shadow-md transition">
                <div class="bg-green-100 p-3 rounded-xl mb-4">
                    <img src="{{ asset('images/prima.png') }}" alt="">
                </div>
                <h3 class="font-semibold text-gray-900 text-lg mb-2">Kondisi Prima</h3>
                <p class="text-gray-600 text-sm leading-relaxed">
                    Semua perlengkapan dibersihkan dan dicek menyeluruh sebelum diserahkan kepada penyewa.
                </p>
            </div>
        </div>
    </section>

    {{-- Section: Pilihan Paket Sewa --}}
    <section class="py-20">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 mb-3">
                Pilihan Paket Sewa
            </h2>
            <p class="text-gray-600 text-lg">
                Kami memiliki beragam pilihan paket sewa yang sesuai dengan kebutuhan Anda.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            {{-- Card 1 --}}
            <div
                class="bg-white rounded-3xl overflow-hidden shadow-sm hover:shadow-lg transition flex flex-col h-full min-h-[580px]">
                <img src="{{ asset('images/tenda.png') }}" alt="Paket Adventure A" class="w-full h-64 object-cover">
                <div class="p-6 flex flex-col justify-between flex-grow">
                    <div>
                        <h3 class="font-semibold text-xl text-gray-900 mb-1">Paket Adventure A</h3>
                        <p class="text-gray-500 text-sm flex items-center mb-3">
                            👤 Kapasitas 4 orang
                        </p>
                        <div class="pt-2">
                            <p class="font-semibold mb-1">Kelengkapan :</p>
                            <ul class="list-disc list-inside text-gray-700 text-sm space-y-1 mb-4">
                                <li>1 Tenda Kapasitas 4 orang</li>
                                <li>2 Sleeping Bag</li>
                                <li>1 Matras/Karpet</li>
                                <li>1 Senter</li>
                            </ul>
                        </div>
                    </div>
                    <div>
                        <div class="flex items-center justify-between border-t border-gray-300 pt-3 mb-4">
                            <div>
                                <p class="text-sm text-gray-600">Mulai dari</p>
                                <p class="text-green-700 font-bold text-xl">Rp130.000</p>
                                <p class="text-xs text-gray-500">/Hari</p>
                            </div>
                            <div class="text-right">
                                <p class="text-sm text-gray-600">Tersedia</p>
                                <p class="text-lg font-bold text-gray-900">15 Unit</p>
                            </div>
                        </div>
                        <button
                            class="w-full bg-green-700 text-white py-3 rounded-full font-medium hover:bg-green-800 transition">
                            Sewa Sekarang
                        </button>
                    </div>
                </div>
            </div>

            {{-- Card 2 (Habis) --}}
            <div
                class="bg-white rounded-3xl overflow-hidden shadow-sm hover:shadow-lg transition flex flex-col h-full min-h-[580px]">
                <img src="{{ asset('images/tenda.png') }}" alt="Paket Adventure B" class="w-full h-64 object-cover">
                <div class="p-6 flex flex-col justify-between flex-grow">
                    <div>
                        <h3 class="font-semibold text-xl text-gray-900 mb-1">Paket Adventure B</h3>
                        <p class="text-gray-500 text-sm flex items-center mb-3">
                            👤 Kapasitas 4 orang
                        </p>
                        <div class="pt-2">
                            <p class="font-semibold mb-1">Kelengkapan :</p>
                            <ul class="list-disc list-inside text-gray-700 text-sm space-y-1 mb-4">
                                <li>1 Tenda Kapasitas 4 orang</li>
                                <li>2 Sleeping Bag</li>
                                <li>2 Matras/Karpet</li>
                                <li>2 Senter</li>
                            </ul>
                        </div>
                    </div>
                    <div>
                        <div class="flex items-center justify-between border-t border-gray-300 pt-3 mb-4">
                            <div>
                                <p class="text-sm text-gray-600">Mulai dari</p>
                                <p class="text-green-700 font-bold text-xl">Rp130.000</p>
                                <p class="text-xs text-gray-500">/Hari</p>
                            </div>
                            <div class="text-right">
                                <p class="text-sm text-gray-600">Status</p>
                                <p class="text-lg font-bold text-red-600">Habis</p>
                            </div>
                        </div>
                        <button
                            class="w-full bg-gray-200 text-gray-400 py-3 rounded-full font-medium cursor-not-allowed">
                            Sewa Sekarang
                        </button>
                    </div>
                </div>
            </div>

            {{-- Card 3 --}}
            <div
                class="bg-white rounded-3xl overflow-hidden shadow-sm hover:shadow-lg transition flex flex-col h-full min-h-[580px]">
                <img src="{{ asset('images/tenda.png') }}" alt="Paket Adventure C" class="w-full h-64 object-cover">
                <div class="p-6 flex flex-col justify-between flex-grow">
                    <div>
                        <h3 class="font-semibold text-xl text-gray-900 mb-1">Paket Adventure C</h3>
                        <p class="text-gray-500 text-sm flex items-center mb-3">
                            👤 Kapasitas 4 orang
                        </p>
                        <div class="pt-2">
                            <p class="font-semibold mb-1">Kelengkapan :</p>
                            <ul class="list-disc list-inside text-gray-700 text-sm space-y-1 mb-4">
                                <li>2 Tenda Kapasitas 4 orang</li>
                                <li>4 Senter</li>
                            </ul>
                        </div>
                    </div>
                    <div>
                        <div class="flex items-center justify-between border-t border-gray-300 pt-3 mb-4">
                            <div>
                                <p class="text-sm text-gray-600">Mulai dari</p>
                                <p class="text-green-700 font-bold text-xl">Rp130.000</p>
                                <p class="text-xs text-gray-500">/Hari</p>
                            </div>
                            <div class="text-right">
                                <p class="text-sm text-gray-600">Tersedia</p>
                                <p class="text-lg font-bold text-gray-900">15 Unit</p>
                            </div>
                        </div>
                        <button
                            class="w-full bg-green-700 text-white py-3 rounded-full font-medium hover:bg-green-800 transition">
                            Sewa Sekarang
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Section CTA: Siap Memulai Petualangan Anda --}}
    <section class="py-20">
        <div class="bg-[#0883029C] rounded-3xl overflow-hidden flex flex-col md:flex-row items-center">

            {{-- Bagian Kiri - Teks --}}
            <div class="w-full md:w-1/2 text-white p-10 md:p-16">
                <h2 class="text-2xl md:text-3xl font-extrabold mb-4">
                    Siap Memulai Petualangan Anda?
                </h2>
                <p class="text-white/90 mb-8 leading-relaxed">
                    Jangan biarkan ketiadaan peralatan menghalangi impian camping Anda.
                    Pesan sekarang dan nikmati pengalaman berkemah yang tak terlupakan!
                </p>
                <a href="#"
                    class="inline-block bg-white text-green-700 font-medium px-6 py-3 rounded-full shadow hover:bg-green-50 transition">
                    Hubungi Kami
                </a>
            </div>

            {{-- Bagian Kanan - Gambar --}}
            <div class="w-full md:w-1/2">
                <img src="{{ asset('images/banner.png') }}" alt="Camping Image"
                    class="w-full h-[280px] md:h-[380px] object-cover md:rounded-l-none rounded-b-3xl md:rounded-r-3xl">
            </div>
        </div>
    </section>

    <footer class="bg-gray-50 py-6 border-t border-gray-200">
        <div class="max-w-6xl mx-auto px-4 flex flex-col md:flex-row items-center justify-between gap-6">

            <!-- Left: Logo & Info -->
            <div class="flex items-center gap-4 text-gray-700">
                <img src="/images/logo.png" alt="Gudang Petualang Logo"
                    class="w-16 h-16 rounded-full border border-gray-300 object-cover">
                <div>
                    <h3 class="font-semibold text-lg text-gray-900">Gudang Petualang</h3>
                    <p class="text-sm text-gray-600 leading-snug">
                        Jl. Raya Bedugul, Candikuning, Kec. Baturiti,<br>
                        Kabupaten Tabanan, Bali 82191<br>
                        Whatsapp : <a href="https://wa.me/62890221345"
                            class="text-green-600 font-medium hover:underline">+62890221345</a>
                    </p>
                </div>
            </div>

            <!-- Right: Social Media & Copyright -->
            <div class="flex flex-col items-center md:items-end gap-3">
                <div class="flex gap-3">
                    <a href="#" class="text-pink-600 hover:scale-110 transition"><i
                            class="fa-brands fa-instagram fa-lg"></i></a>
                    <a href="#" class="text-blue-600 hover:scale-110 transition"><i
                            class="fa-brands fa-facebook fa-lg"></i></a>
                </div>
                <p class="text-xs text-gray-500 text-center md:text-right">
                    © 2025 PT Bali Dev Access. All Rights Reserved.
                </p>
            </div>

        </div>
    </footer>


</div>