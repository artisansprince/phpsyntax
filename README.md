### PHP Syntax

Repo ini berisi kumpulan contoh syntax PHP dari dasar hingga konsep Object-Oriented Programming (OOP). Tujuan dari repo ini adalah menyediakan referensi cepat untuk mempelajari syntax dan konsep fundamental dalam bahasa pemrograman PHP.

#### Struktur Folder

```plaintext
php-syntax
├── 01-basic
│   ├── 01-hello-world.php
│   ├── 02-variables.php
│   ├── 03-data-types.php
│   ├── 04-operators.php
│   ├── 05-conditions.php
│   ├── 06-loops.php
│   └── 07-arrays.php
├── 02-functions
│   ├── 01-functions.php
│   ├── 02-scope.php
│   └── 03-recursive.php
├── 03-advanced
│   ├── 01-associative-arrays.php
│   ├── 02-array-functions.php
│   ├── 03-string-functions.php
│   └── 04-file-handling.php
├── 04-oop
│   ├── 01-classes-objects.php
│   ├── 02-constructors-destructors.php
│   ├── 03-inheritance.php
│   ├── 04-interfaces.php
│   ├── 05-traits.php
│   └── 06-namespaces.php
└── README.md
```

---

### Penjelasan Folder

- **01-basic**  
  Folder ini berisi syntax dasar PHP yang sering dipakai dalam pemrograman sehari-hari:
  - `01-hello-world.php`: Program sederhana untuk menampilkan "Hello, World!" di layar.
  - `02-variables.php`: Contoh penggunaan variabel dalam PHP.
  - `03-data-types.php`: Penjelasan tipe data seperti integer, float, string, dan boolean.
  - `04-operators.php`: Contoh penggunaan operator matematika seperti tambah, kurang, kali, dan bagi.
  - `05-conditions.php`: Struktur kondisi seperti `if` dan `else`.
  - `06-loops.php`: Contoh penggunaan loop (`for`, `while`, dll).
  - `07-arrays.php`: Dasar penggunaan array dalam PHP.

- **02-functions**  
  Topik ini membahas fungsi dan cara kerjanya dalam PHP:
  - `01-functions.php`: Contoh membuat dan memanggil fungsi sederhana.
  - `02-scope.php`: Menjelaskan lingkup variabel (global dan lokal) dalam fungsi.
  - `03-recursive.php`: Contoh fungsi rekursif untuk operasi berulang.

- **03-advanced**  
  Folder ini membahas konsep yang lebih mendalam untuk manipulasi data di PHP:
  - `01-associative-arrays.php`: Membahas array asosiatif yang menggunakan key sebagai penanda.
  - `02-array-functions.php`: Fungsi-fungsi untuk operasi pada array seperti `array_sum`.
  - `03-string-functions.php`: Fungsi manipulasi string seperti `strtoupper`.
  - `04-file-handling.php`: Operasi dasar file handling seperti membuka dan menulis file.

- **04-oop**  
  Folder ini mengumpulkan contoh kode PHP untuk konsep Object-Oriented Programming:
  - `01-classes-objects.php`: Membuat class dan object serta pengenalan metode dalam OOP.
  - `02-constructors-destructors.php`: Penggunaan konstruktor dan destruktor untuk inisialisasi dan penghancuran objek.
  - `03-inheritance.php`: Contoh inheritance, di mana satu class mewarisi properti dan metode dari class lain.
  - `04-interfaces.php`: Penggunaan interface untuk membuat kontrak dalam class.
  - `05-traits.php`: Penggunaan trait untuk reuse metode tanpa inheritance.
  - `06-namespaces.php`: Contoh namespaces untuk menghindari konflik nama dalam proyek besar.

---

### Cara Penggunaan

1. Clone repo ini ke direktori lokal:
   ```bash
   git clone https://github.com/username/php-syntax.git
   ```

2. Jalankan setiap file PHP menggunakan perintah:
   ```bash
   php path/to/file.php
   ```

   Misalnya:
   ```bash
   php 01-basic/01-hello-world.php
   ```

