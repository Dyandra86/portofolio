🔧 Fitur Utama
CRUD Produk IT (Create, Read, Update, Delete):

Tambah produk (nama, harga, deskripsi, kategori, gambar).

Edit produk (data diisi kembali ke form).

Hapus produk (dengan konfirmasi).

Tampilkan daftar produk dalam card grid.

Penyimpanan Lokal (localStorage):

Data produk disimpan ke localStorage dengan key data.db.

Data akan otomatis dimuat kembali saat halaman direfresh.

Ekspor dan Impor Data Produk (File JSON):

Ekspor: Data dari localStorage diekspor ke file produkIT.json.

Impor: Memuat kembali data dari file .json dan menampilkannya.

Upload Gambar Produk:

Input gambar produk (tipe file image) yang dikonversi menjadi Base64 dan disimpan di localStorage.

Filter Produk Berdasarkan Kategori:

Dropdown kategori untuk menyaring tampilan produk.

Responsive Design dengan Bootstrap 5.3:

Gunakan grid layout Bootstrap (misal: .row, .col-md-4) agar tampil responsive di berbagai ukuran layar.

🧠 Fungsi JavaScript Penting
simpanKeLocalStorage() – Menyimpan array produkIT ke localStorage.

tampilkanProduk() – Menampilkan semua produk ke dalam HTML.

editProduk(index) – Mengisi kembali form dengan data produk yang dipilih untuk diedit.

hapusProduk(index) – Menghapus data produk berdasarkan index.

simpanProduk(...) – Menyimpan produk baru atau hasil edit ke dalam array dan localStorage.

exportLocalStorage() – Mengekspor data.db ke file JSON.

importLocalStorage(input) – Membaca file JSON dan mengganti data produkIT.

💡 Teknologi Digunakan
HTML & JavaScript murni

Bootstrap 5.3 (CDN)

Web Storage API (localStorage)

FileReader API (untuk membaca file gambar dan JSON)