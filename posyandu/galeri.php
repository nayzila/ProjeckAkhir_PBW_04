<?php include 'header.php'; ?>

<div class="p-6 max-w-6xl mx-auto">
  <h1 class="text-2xl font-bold mb-6 text-center">Galeri Kegiatan Posyandu</h1>

  <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
    
    <div class="bg-white rounded-xl shadow-md hover:shadow-xl transition group cursor-pointer">
      <div class="h-48 overflow-hidden rounded-t-xl">
        <img src="img/galeri1.jpeg.jpg" alt="Pemberian Vitamin"
             class="w-full h-full object-cover group-hover:scale-105 transition duration-300"
             onclick="showModal(this.src)">
      </div>
      <div class="p-3 text-center text-sm font-medium text-gray-700">
        Imunisasi Balita
      </div>
    </div>

    
    <div class="bg-white rounded-xl shadow-md hover:shadow-xl transition group cursor-pointer">
      <div class="h-48 overflow-hidden rounded-t-xl">
        <img src="img/galeri2.jpeg.jpg" alt="Penimbangan Balita"
             class="w-full h-full object-cover group-hover:scale-105 transition duration-300"
             onclick="showModal(this.src)">
      </div>
      <div class="p-3 text-center text-sm font-medium text-gray-700">
        Pemberian Vitamin
      </div>
    </div>

    
    <div class="bg-white rounded-xl shadow-md hover:shadow-xl transition group cursor-pointer">
      <div class="h-48 overflow-hidden rounded-t-xl">
        <img src="img/galeri3.jpg" alt="Pemberian Vitamin"
             class="w-full h-full object-cover group-hover:scale-105 transition duration-300"
             onclick="showModal(this.src)">
      </div>
      <div class="p-3 text-center text-sm font-medium text-gray-700">
        Mengukur TB & BB
      </div>
    </div>

    
    <div class="bg-white rounded-xl shadow-md hover:shadow-xl transition group cursor-pointer">
      <div class="h-48 overflow-hidden rounded-t-xl">
        <img src="img/galeri4.jpeg.jpg" alt="Imunisasi 2025"
             class="w-full h-full object-cover group-hover:scale-105 transition duration-300"
             onclick="showModal(this.src)">
      </div>
      <div class="p-3 text-center text-sm font-medium text-gray-700">
        Kegiatan balita 2025
      </div>
    </div>

    
    <div class="bg-white rounded-xl shadow-md hover:shadow-xl transition group cursor-pointer">
      <div class="h-48 overflow-hidden rounded-t-xl">
        <img src="img/galeri5.jpg" alt="Pemberian Vitamin"
             class="w-full h-full object-cover group-hover:scale-105 transition duration-300"
             onclick="showModal(this.src)">
      </div>
      <div class="p-3 text-center text-sm font-medium text-gray-700">
        Penimbangan balita
      </div>
    </div>

    
    <div class="bg-white rounded-xl shadow-md hover:shadow-xl transition group cursor-pointer">
      <div class="h-48 overflow-hidden rounded-t-xl">
        <img src="img/galeri6.jpeg.jpg" alt="Pemberian Vitamin"
             class="w-full h-full object-cover group-hover:scale-105 transition duration-300"
             onclick="showModal(this.src)">
      </div>
      <div class="p-3 text-center text-sm font-medium text-gray-700">
        Pendaftaran Posyandu balita 2025
      </div>
    </div>
  </div>
</div>

<div id="imgModal" class="fixed inset-0 bg-black bg-opacity-80 flex items-center justify-center z-50 hidden" onclick="closeModal()">
  <img id="modalImg" src="" class="max-h-[90vh] max-w-[90vw] rounded-xl shadow-2xl border-4 border-white" />
</div>

<script>
  function showModal(src) {
    document.getElementById('modalImg').src = src;
    document.getElementById('imgModal').classList.remove('hidden');
  }

  function closeModal() {
    document.getElementById('imgModal').classList.add('hidden');
    document.getElementById('modalImg').src = '';
  }
</script>

<?php include 'footer.php'; ?>
