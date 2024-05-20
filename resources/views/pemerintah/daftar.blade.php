
@extends('layout.pemerintah')

@section('container')

  {{-- @dd($regist); --}}

<div class=" flex justify-center h-[130vh]">
    @if($errors->any())
      <div class="absolute top-20 z-10 alert bg-slate-400">
        <ul>
          @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif
    @if(session()->has('success'))
    <div class="alert alert-success" role="alert">
      <i class="bi bi-check-circle-fill"> </i>{{ session('success') }}
    </div>
    @endif

    <div class="flex flex-col justify-center items-center ml-40 relative mt-20 mb-8 bg-white w-[900px] rounded-[30px]">
        <div class="mt-4">
            <h1 class="text-center font-bold text-2xl">Lengkapi Username & Password</h1>
            <p class="text-center">Isi Keterangan Dibawah untuk Kelengkapan Akun Anda!</p>
        </div>

        <form class="relative bg-[FFFFFF] justify-center mt-2 w-auto flex flex-col space-y-3" enctype="multipart/form-data" action="" method="POST">
        @csrf    
            <div class="relative z-0 w-full group">
              <label for="username" class="px-4">Username</label>
                <input type="text" name="username" id="username" class="block py-2.5 px-4 text-sm text-[#72B944] w-[800px] border-[#72B944] focus:border-[#72B944] border-2 rounded-3xl" required/>
            </div>
            <div class="relative z-0 w-full mt-0.5 group">
              <label for="password" class="px-4">Password</label>
                <input type="password" name="password" id="password" class="block mb-4 py-2.5 px-4 text-sm text-[#72B944] w-[800px] border-[#72B944] focus:border-[#72B944] border-2 rounded-3xl" required />
            </div>
            <div class="mb-3">
              <h1 class="text-center font-bold text-2xl">Lengkapi Data Diri Kelompok Tani</h1>
              <p class="text-center">Isi Keterangan Kelompok Tani dibawah Ini dengan Sesuai!</p>
            </div>
            <div class="relative z-0 w-full group">
                <input type="text" name="nama_lengkap" id="nama_lengkap" class="block py-2.5 px-4 text-sm text-[#72B944] w-[800px] border-[#72B944] focus:border-[#72B944] border-2 rounded-3xl" placeholder="Nama Lengkap" required/>
            </div>
            <div class="relative z-0 w-full group">
                <input type="text" name="nama_kelompok" id="nama_kelompok" class="block py-2.5 px-4 text-sm text-[#72B944] w-[800px] border-[#72B944] focus:border-[#72B944] border-2 rounded-3xl" placeholder="Nama Kelompok" required/>
            </div>
            <div class="relative z-0 w-full group">
                <input type="text" name="nik" id="nik" class="block py-2.5 px-4 text-sm text-[#72B944] w-[800px] border-[#72B944] focus:border-[#72B944] border-2 rounded-3xl" placeholder="NIK" required/>
            </div>
            <div class="inline-flex ">
              <div class="relative z-0 w-full mb-1 group">
                  <input type="text" name="jalan" id="floating_first_name" class="block py-2.5 px-4 text-sm mb-2 text-[#72B944] w-[400px] border-[#72B944] focus:border-[#72B944] border-2 rounded-3xl" placeholder="Jalan" required />
                  <input type="text" name="kecamatan" id="floating_first_name" class="block py-2.5 px-4 text-sm text-[#72B944] w-[400px] border-[#72B944] focus:border-[#72B944] border-2 rounded-3xl" placeholder="Kecamatan" required />
                  <input type="text" name="kota" id="floating_first_name" class="block py-2.5 px-4 text-sm mt-2 text-[#72B944] w-[400px] border-[#72B944] focus:border-[#72B944] border-2 rounded-3xl" placeholder="Kota" required />
              </div>
              <div class="relative flex z-0 w-full mb-1 group">
                  <input type="text" name="tempat_lahir" id="tempat" class="block py-2.5 px-4 text-sm text-[#72B944] w-[120px] border-[#72B944] focus:border-[#72B944] border-2 rounded-3xl" placeholder="Tempat Lahir " required />
                  <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="block ml-[10px] py-2.5 px-4 text-sm text-[#72B944] w-[235px] border-[#72B944] focus:border-[#72B944] border-2 rounded-3xl" placeholder="Tanggal Lahir" required />
              </div>
            </div>

            
            <div class="relative z-0 w-full mb-1 group">
                <select class="block py-2.5 px-4 text-sm text-[#72B944] w-[800px] border-[#72B944] focus:border-[#72B944] border-2 rounded-3xl" name="jenis_kelamin" id="kelurahan">
                    <option value="" disabled selected>Jenis Kelamin</option>
                    @foreach ($jenis_kelamins as $item)
                      <option value="{{ $item->id }}" >{{ $item->nama }}</option>
                    @endforeach
                </select>
                {{-- <input type="text" name="jenis_kelamin" id="floating_phone" class="block py-2.5 px-4 text-sm text-[#72B944] w-[400px] border-[#72B944] focus:border-[#72B944] border-2 rounded-3xl" placeholder="Jenis Kelamin " required />  --}}
            </div>
            <div class=" px-80">
                    <button type="submit" class=" mt-2 text-white bg-[#72B944] hover:bg-[#5D9B35] focus:ring-2 focus:outline-none focus:ring-[#72B944] font-medium rounded-full text-[20px] w-full sm:w-auto px-20 py-1.5 text-center">Kirim</button>
            </div>
        </form>  
    </div>
</div>

<style>
  body{
    background-image: url('img/sawah.jpg');
    background-size: cover; /* Menutup seluruh bagian body */
    background-position: center; /* Pusatkan gambar */
    background-repeat: no-repeat;
  }
</style>
@endsection
