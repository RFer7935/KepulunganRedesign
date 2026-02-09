<div class="card lg:card-side bg-base-100 w-full rounded-4xl">      
   <div class="lg:w-2/5 p-8 bg-white">
      <figure>
         <img
            src="https://images.unsplash.com/photo-1626074353765-517a681e40be?q=80&w=1000&auto=format&fit=crop"
            alt="Nasi Kuning"
            class="rounded-3xl w-full aspect-square object-cover" />
      </figure>
      
      <div class="mt-6">
         <div class="flex justify-between items-start">
            <h2 class="text-2xl font-bold text-gray-800">Nasi Kuning {{ $slug }}</h2>
            <span class="text-xl font-bold text-orange-500">Rp 12.000</span>
         </div>
         <p class="text-gray-500 mt-2 text-sm leading-relaxed">
            Nasi kuning dengan mie, kacang dan sayuran
         </p>
      </div>
   </div>

   <div class="lg:w-3/5 p-8 bg-gray-50/50">
      <div class="space-y-4">
         <div class="flex items-center justify-between">
            <label class="font-bold text-gray-700">Jumlah</label>
            <div class="join bg-gray-200 rounded-full overflow-hidden">
               <button class="btn btn-ghost btn-sm join-item text-lg">-</button>
               <input class="input input-ghost input-sm join-item w-12 text-center focus:outline-none" value="1" readonly />
               <button class="btn btn-ghost btn-sm join-item text-lg">+</button>
            </div>
         </div>

         <div class="form-control w-full">
            <label class="label pt-0">
               <span class="label-text font-bold text-gray-700">Nama Pemesan</span>
            </label>
            <input type="text" class="input input-bordered bg-gray-200 border-none rounded-2xl w-full" />
         </div>

         <div class="form-control w-full">
            <label class="label pt-0">
               <span class="label-text font-bold text-gray-700">Tambah Menu lain</span>
            </label>
            <select class="select select-bordered bg-gray-200 border-none rounded-2xl w-full font-normal">
               <option disabled selected>Pilih...</option>
               <option>Sate Ayam</option>
               <option>Telor Balado</option>
            </select>
         </div>

         <div class="form-control w-full">
            <label class="label pt-0">
               <span class="label-text font-bold text-gray-700">Catatan Tambahan</span>
            </label>
            <textarea class="textarea textarea-bordered bg-gray-200 border-none rounded-2xl h-24 w-full"></textarea>
         </div>

         <div class="form-control w-full">
            <label class="label pt-0">
               <span class="label-text font-bold text-gray-700">Metode pembayaran</span>
            </label>
            <select class="select select-bordered bg-gray-200 border-none rounded-2xl w-full">
               <option>QRIS</option>
               <option>Transfer Bank</option>
               <option>Cash</option>
            </select>
         </div>

         <div class="pt-4 border-t border-gray-200">
            <div class="flex justify-between items-center mb-6">
               <span class="font-bold text-lg text-gray-800">Total yang harus di bayar</span>
               <span class="font-bold text-xl text-orange-500">Rp 12.000</span>
            </div>
            <a href="https://api.whatsapp.com/send?phone=6278888888888&text=test" target="blank" class="btn btn-block bg-[#99582a] hover:bg-[#7f4a23] text-white border-none rounded-full capitalize text-lg">
               Bayar Sekarang
            </a>
         </div>
      </div>
   </div>
</div>