<footer class="relative bg-gradient-to-br from-green-900 via-green-800 to-green-700 text-white mt-20 py-14 px-6 overflow-hidden rounded-t-3xl shadow-xl">

  <!-- Soft Glow Background -->
  <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_left,rgba(255,255,255,0.15),transparent_40%)]"></div>

  <div class="relative max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-8 text-left" data-aos="fade-up">
    <!-- Kolum 1: Logo & Info -->
    <div>
      <div class="flex items-center gap-3 mb-4">
        <img src="{{ asset('images/Logo e-PKAH.jpeg') }}" alt="Logo e-PKAH" class="w-12 h-12 rounded-full border border-green-300 shadow-md">
        <h2 class="text-xl font-bold text-white drop-shadow-md tracking-wide">e-PKAH</h2>
      </div>

      <p class="text-white/85 text-sm leading-relaxed">
        Platform digital memperkasakan pendidikan kelestarian<br>
        ke arah ekonomi kitaran di Negeri Kelantan.
      </p>

      <!-- Social Icons -->
      <div class="mt-3 flex gap-3">
        <a href="#" class="hover:scale-125 transition-all duration-300 text-white hover:text-yellow-300">
          <i class="fab fa-facebook text-lg"></i>
        </a>
        <a href="tel:+6097488899" class="hover:scale-125 transition-all duration-300 text-white hover:text-yellow-300">
          <i class="fas fa-phone-alt text-lg"></i>
        </a>
        <a href="mailto:mubaara­kan@kelantanutilities.com.my" class="hover:scale-125 transition-all duration-300 text-white hover:text-yellow-300">
          <i class="fas fa-envelope text-lg"></i>
        </a>
      </div>

      <div class="mt-3 flex flex-wrap gap-3 text-sm">
        <a href="#" class="hover:text-yellow-300 transition-all">Facebook</a>
        <a href="#" class="hover:text-yellow-300 transition-all">Instagram</a>
        <a href="#" class="hover:text-yellow-300 transition-all">Laman Rasmi</a>
      </div>
    </div>

    <!-- Kolum 2: Perkhidmatan & Undang-Undang -->
    <div>
      <h3 class="text-lg font-semibold mb-3 text-yellow-300 uppercase tracking-wide">Perkhidmatan</h3>
      <ul class="space-y-2 text-white text-sm">
        <li><a href="#" class="hover:text-yellow-300 transition-all">Pusat Kitar Semula</a></li>
        <li><a href="#" class="hover:text-yellow-300 transition-all">Program</a></li>
        <li><a href="#" class="hover:text-yellow-300 transition-all">Rangkaian Vendor</a></li>
      </ul>

      <h3 class="text-lg font-semibold mt-6 mb-3 text-yellow-300 uppercase tracking-wide">Undang-Undang</h3>
      <ul class="space-y-2 text-white text-sm">
        <li><a href="#" class="hover:text-yellow-300 transition-all">Terma & Dasar Privasi</a></li>
      </ul>
    </div>

    <!-- Kolum 3: Hubungi + Statistik -->
    <div>
      <h3 class="text-lg font-semibold mb-3 text-yellow-300 uppercase tracking-wide">Hubungi Kami</h3>
      <ul class="space-y-1 text-white/85 text-sm">
        <li>Email:
          <a href="mailto:mubaara­kan@kelantanutilities.com.my" class="hover:text-yellow-300"> mubaara­kan@kelantanutilities.com.my</a>
        </li>
        <li>Telefon:
          <a href="tel:+6097488899" class="hover:text-yellow-300"> +609-748 8899</a> /
          <a href="tel:+6097488809" class="hover:text-yellow-300"> +609-748 8809</a>
        </li>
        <li>Alamat: Kompleks Kota Darulnaim, 15503 Kota Bharu, Kelantan</li>
      </ul>

      <h3 class="text-lg font-semibold mt-6 mb-2 text-yellow-300 uppercase tracking-wide">Statistik Pengunjung</h3>

      <div class="overflow-hidden rounded-lg bg-green-900/60 backdrop-blur-md shadow-md border border-green-300/40 hover:scale-[1.01] transition-all duration-300">
        <table class="w-full text-sm text-white/85">
          <tbody>
            <tr class="border-b border-green-500/40 hover:bg-green-800/40 transition">
              <td class="px-3 py-1.5 text-left">Pengguna Online</td>
              <td class="px-3 py-1.5 text-right font-semibold">{{ $online ?? '-' }}</td>
            </tr>
            <tr class="border-b border-green-500/40 hover:bg-green-800/40 transition">
              <td class="px-3 py-1.5 text-left">Hari Ini</td>
              <td class="px-3 py-1.5 text-right font-semibold">{{ $today ?? '-' }}</td>
            </tr>
            <tr class="border-b border-green-500/40 hover:bg-green-800/40 transition">
              <td class="px-3 py-1.5 text-left">Semalam</td>
              <td class="px-3 py-1.5 text-right font-semibold">{{ $yesterday ?? '-' }}</td>
            </tr>
            <tr class="hover:bg-green-800/40 transition">
              <td class="px-3 py-1.5 text-left">Jumlah</td>
              <td class="px-3 py-1.5 text-right font-semibold">{{ $total ?? '-' }}</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <!-- Garis bawah -->
  <div class="relative border-t border-green-400/40 mt-10 pt-4 text-left text-white/80 text-[11px]">
    © {{ date('Y') }} <span class="font-semibold text-white">e-PKAH</span>. Semua Hak Terpelihara.
  </div>

  <!-- Scroll to Top Button -->
  <button id="scrollTopBtn" class="hidden fixed bottom-5 right-5 bg-yellow-400 text-green-900 p-2.5 rounded-full shadow-lg hover:bg-yellow-300 transition-all duration-300">
    <i class="fas fa-arrow-up text-sm"></i>
  </button>
</footer>

<!-- Font Awesome -->
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

<!-- AOS Animation -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

<!-- Scroll to Top Script -->
<script>
  AOS.init({ duration: 900, once: true });

  const scrollTopBtn = document.getElementById("scrollTopBtn");
  window.addEventListener("scroll", () => {
    if (window.scrollY > 200) scrollTopBtn.classList.remove("hidden");
    else scrollTopBtn.classList.add("hidden");
  });
  scrollTopBtn.addEventListener("click", () => {
    window.scrollTo({ top: 0, behavior: "smooth" });
  });
</script>
