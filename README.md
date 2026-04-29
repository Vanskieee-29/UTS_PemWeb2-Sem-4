# UTS Mata Kuliah Pemrograman Web 2
- Nama: Askaria Davan Dafyanza
- NIM: 312410298
- Kelas: I241B

# Analisis dan Eksperimen SQL Injection pada Sistem Login Berbasis Web

Proyek ini merupakan hasil eksperimen dan analisis keamanan web yang berfokus pada kerentanan **SQL Injection** pada sistem login sederhana berbasis PHP dan MySQL.

## Deskripsi

Dalam pengembangan aplikasi web, fitur login sering kali dianggap sudah selesai ketika dapat berjalan dengan baik. Namun, dari eksperimen yang dilakukan, sistem login yang terlihat normal ternyata masih dapat memiliki celah keamanan yang serius.

Melalui proyek ini, dilakukan pengujian langsung terhadap sistem login untuk melihat bagaimana SQL Injection dapat dimanfaatkan untuk melewati proses autentikasi, serta bagaimana cara mencegahnya.

---

## Tahapan Eksperimen

Eksperimen dilakukan dalam beberapa tahap:

### 1. Login Normal
- Menggunakan username dan password yang valid
- Sistem berjalan sesuai fungsi

### 2. Uji SQL Injection (Sistem Rentan)
- Input: `' OR '1'='1`
- Sistem tetap memberikan akses login meskipun password salah
- Menunjukkan adanya celah keamanan

### 3. Perbaikan Sistem
- Menggunakan **prepared statement**
- Memisahkan query dan input pengguna

### 4. Uji Setelah Perbaikan
- Input yang sama tidak lagi berhasil
- Sistem berhasil menolak akses tidak valid

---

## Analisis Kerentanan

Kerentanan terjadi karena:
- Input pengguna langsung dimasukkan ke dalam query
- Tidak ada validasi atau pemisahan data dan perintah SQL
- Sistem tidak mampu membedakan antara data biasa dan perintah SQL

Hal ini memungkinkan manipulasi query yang menyebabkan proses autentikasi dapat dilewati.

---

## Solusi yang Diterapkan

Perbaikan dilakukan dengan:
- Menggunakan **prepared statement**
- Memastikan input diproses sebagai data, bukan bagian dari query
- Mengurangi kemungkinan manipulasi oleh user

---

## Hasil Eksperimen

| Kondisi | Hasil |
|--------|------|
| Sebelum perbaikan | Sistem dapat dibobol |
| Setelah perbaikan | Sistem aman dari SQL Injection |

---

## Insight

Dari eksperimen ini dapat disimpulkan bahwa:
- Sistem yang berjalan normal belum tentu aman
- Input pengguna adalah titik paling rentan dalam aplikasi
- Kesalahan sederhana dapat menjadi celah besar
- Keamanan harus dipertimbangkan sejak awal pengembangan

---

## Referensi

- Telkom University – SQL Injection  
- AlfaSiber – SQL Injection  
- PHP Documentation – Prepared Statement  

---

## Catatan

Proyek ini dibuat untuk tujuan pembelajaran dan pemahaman konsep keamanan web, khususnya SQL Injection.

## Sebelum menggunakan prepared statement
<img width="930" height="429" alt="Screenshot 2026-04-28 230746" src="https://github.com/user-attachments/assets/37105883-7c80-4d89-a34a-57a59f1c783b" />
<img width="1920" height="1200" alt="pwbener" src="https://github.com/user-attachments/assets/32c6ddbd-3430-4eb7-8c61-a5cbde5cd938" />
<img width="1920" height="1200" alt="pwbobol" src="https://github.com/user-attachments/assets/8ca07ade-1202-41ab-abf0-9feb28baad83" />

## Setelah menggunakan prepared statement
<img width="951" height="734" alt="Screenshot 2026-04-28 234528" src="https://github.com/user-attachments/assets/73af7b30-1ebf-478f-a303-edeed70c2482" />
<img width="1920" height="1200" alt="pakepwbobol" src="https://github.com/user-attachments/assets/60c333cf-675a-40e1-8130-edf01c3468c7" />

