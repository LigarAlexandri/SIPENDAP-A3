@extends('layout.main')

@section('container')
    <div class="relative flex items-center">
        <aside id="default-sidebar"
            class="mt-[55px] left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0"
            aria-label="Sidebar">
            <div class="h-full px-3 py-4 overflow-y-auto bg-white shadow-md  rounded-r-[2xl]">
                <ul class="space-y-2 font-medium">
                    <li>
                        <a href="/dashboard"
                            class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                            <svg class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                viewBox="0 0 22 21">
                                <path
                                    d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z" />
                                <path
                                    d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z" />
                            </svg>
                            <span class="ms-3">Beranda</span>
                        </a>
                    </li>
                    <li>
                        <a href="/berita"
                            class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                            <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                                <path
                                    d="M6.143 0H1.857A1.857 1.857 0 0 0 0 1.857v4.286C0 7.169.831 8 1.857 8h4.286A1.857 1.857 0 0 0 8 6.143V1.857A1.857 1.857 0 0 0 6.143 0Zm10 0h-4.286A1.857 1.857 0 0 0 10 1.857v4.286C10 7.169 10.831 8 11.857 8h4.286A1.857 1.857 0 0 0 18 6.143V1.857A1.857 1.857 0 0 0 16.143 0Zm-10 10H1.857A1.857 1.857 0 0 0 0 11.857v4.286C0 17.169.831 18 1.857 18h4.286A1.857 1.857 0 0 0 8 16.143v-4.286A1.857 1.857 0 0 0 6.143 10Zm10 0h-4.286A1.857 1.857 0 0 0 10 11.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 18 16.143v-4.286A1.857 1.857 0 0 0 16.143 10Z" />
                            </svg>
                            <span class="flex-1 ms-3 whitespace-nowrap">Berita</span>
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                            <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                                <path
                                    d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z" />
                            </svg>
                            <span class="flex-1 ms-3 whitespace-nowrap">Notifikasi</span>
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                            <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                                <path
                                    d="M17 5.923A1 1 0 0 0 16 5h-3V4a4 4 0 1 0-8 0v1H2a1 1 0 0 0-1 .923L.086 17.846A2 2 0 0 0 2.08 20h13.84a2 2 0 0 0 1.994-2.153L17 5.923ZM7 9a1 1 0 0 1-2 0V7h2v2Zm0-5a2 2 0 1 1 4 0v1H7V4Zm6 5a1 1 0 1 1-2 0V7h2v2Z" />
                            </svg>
                            <span class="flex-1 ms-3 whitespace-nowrap">Akun Kelompok Tani</span>
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                            <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 16">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M1 8h11m0 0L8 4m4 4-4 4m4-11h3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-3" />
                            </svg>
                            <span class="flex-1 ms-3 whitespace-nowrap">Akun Pemerintah</span>
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center top-10 p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                            <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M5 5V.13a2.96 2.96 0 0 0-1.293.749L.879 3.707A2.96 2.96 0 0 0 .13 5H5Z" />
                                <path
                                    d="M6.737 11.061a2.961 2.961 0 0 1 .81-1.515l6.117-6.116A4.839 4.839 0 0 1 16 2.141V2a1.97 1.97 0 0 0-1.933-2H7v5a2 2 0 0 1-2 2H0v11a1.969 1.969 0 0 0 1.933 2h12.134A1.97 1.97 0 0 0 16 18v-3.093l-1.546 1.546c-.413.413-.94.695-1.513.81l-3.4.679a2.947 2.947 0 0 1-1.85-.227 2.96 2.96 0 0 1-1.635-3.257l.681-3.397Z" />
                                <path
                                    d="M8.961 16a.93.93 0 0 0 .189-.019l3.4-.679a.961.961 0 0 0 .49-.263l6.118-6.117a2.884 2.884 0 0 0-4.079-4.078l-6.117 6.117a.96.96 0 0 0-.263.491l-.679 3.4A.961.961 0 0 0 8.961 16Zm7.477-9.8a.958.958 0 0 1 .68-.281.961.961 0 0 1 .682 1.644l-.315.315-1.36-1.36.313-.318Zm-5.911 5.911 4.236-4.236 1.359 1.359-4.236 4.237-1.7.339.341-1.699Z" />
                            </svg>
                            <span class="flex-1 ms-3 whitespace-nowrap">Akun Admin</span>
                        </a>
                    </li>
                    <li>
                        <a href="/telegramadmin"
                            class="flex items-center top-10 p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                            <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M5 5V.13a2.96 2.96 0 0 0-1.293.749L.879 3.707A2.96 2.96 0 0 0 .13 5H5Z" />
                                <path
                                    d="M6.737 11.061a2.961 2.961 0 0 1 .81-1.515l6.117-6.116A4.839 4.839 0 0 1 16 2.141V2a1.97 1.97 0 0 0-1.933-2H7v5a2 2 0 0 1-2 2H0v11a1.969 1.969 0 0 0 1.933 2h12.134A1.97 1.97 0 0 0 16 18v-3.093l-1.546 1.546c-.413.413-.94.695-1.513.81l-3.4.679a2.947 2.947 0 0 1-1.85-.227 2.96 2.96 0 0 1-1.635-3.257l.681-3.397Z" />
                                <path
                                    d="M8.961 16a.93.93 0 0 0 .189-.019l3.4-.679a.961.961 0 0 0 .49-.263l6.118-6.117a2.884 2.884 0 0 0-4.079-4.078l-6.117 6.117a.96.96 0 0 0-.263.491l-.679 3.4A.961.961 0 0 0 8.961 16Zm7.477-9.8a.958.958 0 0 1 .68-.281.961.961 0 0 1 .682 1.644l-.315.315-1.36-1.36.313-.318Zm-5.911 5.911 4.236-4.236 1.359 1.359-4.236 4.237-1.7.339.341-1.699Z" />
                            </svg>
                            <span class="flex-1 ms-3 whitespace-nowrap">Telegram</span>
                        </a>
                    </li>
                </ul>
            </div>
        </aside>

        <form class="space-y-4 md:space-y-6" action="/buatberita" method="POST" enctype="multipart/form-data" novalidate>
            @csrf
            <div class="flex flex-col justify-center items-center w-full md:w-auto md:max-w-[1000px] h-[720px] ml-28 mt-10">
                <div class="bg-white shadow-md rounded-lg p-6 mt-8 mx-auto w-[1000px] h-[720px]">
                    <!-- Content of your rectangular card goes here -->
                    <h2 class="text-lg font-semibold text-gray-800 mb-4">Judul Berita</h2>
                    <div>
                        <label for="judul" class="block mb-2 text-sm font-medium text-gray-900"></label>
                        <input type="text" name="judul" id="judul" placeholder="Isi Judul Berita..."
                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-[#F5682A] focus:border-[#F5682A] block w-64 p-2.5"
                            required="">
                        @error('judul')
                            <p class="text-red-500 text-sm font-medium py-2 capitalize" role="alert">{{ $message }}</p>
                        @enderror
                    </div>
                    <h2 class="text-lg font-semibold text-gray-800 mb-4">Isi Berita</h2>
                    <div>
                        <label for="isi_berita" class="block mb-2 text-sm font-medium text-gray-900"></label>
                        <div
                            class="overflow-hidden rounded-lg w-1/2 h-64 border border-gray-300 focus-within:border-[#F5682A] focus-within:ring-1 focus-within:ring-[#F5682A]">
                            <textarea type="text" id="isi_berita" name="isi_berita"
                                class="p-2 w-full h-full resize-none border-none align-top focus:ring-0 sm:text-sm"
                                placeholder="Tuliskan Isi Berita..."></textarea>
                        </div>
                        @error('isi_berita')
                            <p class="text-red-500 text-sm font-medium py-2 capitalize" role="alert">{{ $message }}</p>
                        @enderror
                    </div>
                    <h2 class="text-lg font-semibold text-gray-800 mb-4">Keterangan foto (opsional) </h2>
                    <div>
                        <label for="thumbnail" class="block mb-2 text-sm font-medium text-gray-900"></label>
                        <input type="file" name="thumbnail" id="fileInput" accept="image/*">
                    </div>
                    <br>

                    <h2>Pilih Grup Telegram : </h2>
                    <select id="telegramGroup">
                        <option value= "-1002122684774" >Grup Utama</option>
                        <option value= "-1002097094091" >Kecamatan Panji</option>
                        <option value= "-1002006597152" >Kecamatan Situbondo</option>
                    </select>

                    <button type="button" id="kirim" value="KIRIM"
                        class="bg-green-500 hover:bg-green-500 text-white font-bold py-2 px-4 rounded mt-4"
                        onclick="kirimPesan()">Kirim</button>


                    <button type="button" id="kirim" value="KIRIM"
                    class="bg-green-500 hover:bg-green-500 text-white font-bold py-2 px-4 rounded mt-4"
                    onclick="kirimPesanSemua()">Kirim ke Semua</button>

                </div>
            </div>
        </form>
    </div>

    <style>
        body {
            background-image: linear-gradient(#72B944, #FFFFFF);
        }
    </style>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"
        integrity="sha512-+NqPlbbtM1QqiK8ZAo4Yrj2c4lNQoGv8P79DPtKzj++l5jnN39rHA/xsqn8zE9l0uSoxaCdrOgFs6yjyfbBxSg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        function kirimPesanSemua(){
            var judulOnly = document.getElementById('judul');
            var isi_beritaOnly = document.getElementById('isi_berita');
            var judul = document.getElementById('judul').value;
            var isi_berita = document.getElementById('isi_berita').value;
            // var pesan = document.getElementById('thumbnail').value;
            var token = '6750609219:AAFbaG0pzoOYqfjMsx_t8jpswm5DlgYrln4'; // TELEGRAM TOKEN
            var grup =  '-1002122684774'; // CHAT ID
            var grup2 = '-1002097094091'; // CHAT ID
            var grup3 = '-1002006597152'; // CHAT ID


            // Get the file input element
            var fileInput = document.getElementById('fileInput');
            var file = fileInput.files[0];

            // Create FormData object to send both text and image (Form untuk grup 1)
            var formData = new FormData();
            formData.append('chat_id', grup2);
            formData.append('caption', `${judul}\n${isi_berita}`);
            formData.append('photo', file);

            // // Create FormData object to send both text and image (Form untuk grup 2)
            // var formData2 = new FormData2();
            // formData.append('chat_id', grup2);
            // formData.append('caption', `${judul}\n${isi_berita}`);
            // formData.append('photo', file2);

            // // Create FormData object to send both text and image (Form untuk grup 3)
            // var formData3 = new FormData3();
            // formData.append('chat_id', grup3);
            // formData.append('caption', `${judul}\n${isi_berita}`);
            // formData.append('photo', file);

            var gabungan = judulOnly.value + "%0A" + isi_beritaOnly.value;

            // Create XMLHttpRequest to send the data (grup 1)
            var xhr = new XMLHttpRequest();
            xhr.open('POST', `https://api.telegram.org/bot${token}/sendPhoto`, true);
            xhr.onreadystatechange = function() {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                    if (xhr.status === 200) {
                        console.log('Message sent successfully.');
                    } else {
                        console.error('Error sending message:', xhr.status);
                    }
                }
            };
            xhr.send(formData);





            $.ajax({
                url: `https://api.telegram.org/bot${token}/sendMessage?chat_id=${grup}&text=${gabungan}&parse_mode=html`,
                method: `POST`,
            })

            $.ajax({
                url: `https://api.telegram.org/bot${token}/sendMessage?chat_id=${grup2}&text=${gabungan}&parse_mode=html`,
                method: `POST`,
            })

            $.ajax({
                url: `https://api.telegram.org/bot${token}/sendMessage?chat_id=${grup3}&text=${gabungan}&parse_mode=html`,
                method: `POST`,
            })

        }


        function kirimPesan() {
            var judulOnly = document.getElementById('judul');
            var isi_beritaOnly = document.getElementById('isi_berita');

            var judul = document.getElementById('judul').value;
            var isi_berita = document.getElementById('isi_berita').value;
            // var pesan = document.getElementById('thumbnail').value;
            var token = '6750609219:AAFbaG0pzoOYqfjMsx_t8jpswm5DlgYrln4'; // TELEGRAM TOKEN
            var grup = '-1002122684774'; // CHAT ID
            var grup2 = '-1002097094091'; // CHAT ID
            var grup3 = '-1002006597152'; // CHAT ID
            // var grupList = [grup, grup2, grup3]; // Array of group IDs

            //getinput telegram
            var selectedGroup = document.getElementById("telegramGroup").value;

            // Get the file input element
            var fileInput = document.getElementById('fileInput');
            var file = fileInput.files[0];

            // Create FormData object to send both text and image
            var formData = new FormData();
            formData.append('chat_id', selectedGroup);
            formData.append('caption', `${judul}\n${isi_berita}`);
            formData.append('photo', file);

            var gabungan = judulOnly.value + "%0A" + isi_beritaOnly.value;


            // Create XMLHttpRequest to send the data
            var xhr = new XMLHttpRequest();
            xhr.open('POST', `https://api.telegram.org/bot${token}/sendPhoto`, true);
            xhr.onreadystatechange = function() {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                    if (xhr.status === 200) {
                        console.log('Message sent successfully.');
                    } else {
                        console.error('Error sending message:', xhr.status);
                    }
                }
            };
            xhr.send(formData);

            // grupList.forEach(function(groupId) {
            //     $.ajax({
            //         url: `https://api.telegram.org/bot${token}/sendMessage`,
            //         method: `POST`,
            //         data: {
            //             chat_id: groupId,
            //             text: message,
            //             parse_mode: 'html'
            //         },
            //         success: function(response) {
            //             console.log("Message sent to group ID: " + groupId);
            //             console.log(response);
            //         },
            //         error: function(xhr, status, error) {
            //             console.error("Error sending message to group ID: " + groupId);
            //             console.error(error);
            //         }
            //     });
            // });

            $.ajax({
                url: `https://api.telegram.org/bot${token}/sendMessage?chat_id=${selectedGroup}&text=${gabungan}&parse_mode=html`,
                method: `POST`,
            })



            // $.ajax({
            //     url: `https://api.telegram.org/bot${token}/sendMessage?chat_id=${grup2}&text=${gabungan}&parse_mode=html`,
            //     method: `POST`,
            // })

            // $.ajax({
            //     url: `https://api.telegram.org/bot${token}/sendMessage?chat_id=${grup3}&text=${gabungan}&parse_mode=html`,
            //     method: `POST`,
            // })
        }
    </script>
@endsection
