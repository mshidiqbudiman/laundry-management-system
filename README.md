# Family Laundry System — Starter Repository

Starter repository untuk website dan sistem manajemen laundry keluarga.

## Status

Project masih berada pada tahap technical foundation. File kode awal ini sengaja kecil agar Codex dapat melanjutkan pembangunan secara bertahap tanpa mengasumsikan business rule yang belum disepakati.

## MVP Phase 1

- Public marketing website + WhatsApp-first ordering
- Admin system untuk customer, order, service/pricing, status, dan payment
- Tidak ada online ordering customer pada Phase 1
- Tidak ada customer account, payment gateway, automatic pickup radius/fee, atau item-level tracking

## Business rules yang sudah terkonfirmasi

- Cuci + Gosok: Rp8.000/kg
- Gosok Saja: Rp6.000/kg
- Minimum billing layanan berbasis kg: 1 kg
- Berat di atas 1 kg ditagihkan sampai 1 angka desimal dengan truncation, bukan rounding biasa
- Normal: 4 hari
- Express 3 hari: harga layanan + Rp2.000/kg
- Express 2 hari: harga layanan + Rp4.000/kg
- Special priority untuk sebagian barang dapat memakai flat additional charge hasil kesepakatan
- Payment dilakukan setelah laundry selesai/diserahkan dan dapat berstatus belum lunas

## Arsitektur yang direncanakan

Target implementasi: Laravel monolith + MySQL + Blade/Livewire seperlunya.

Starter ini belum menginisialisasi framework Laravel karena environment tempat file awal dibuat tidak memiliki Composer. Codex dapat menggunakan repository ini sebagai titik awal untuk Milestone 0 dan mengganti/menyesuaikan struktur setelah Laravel diinisialisasi.

Baca `docs/CODEX_MILESTONE_0.md` sebelum melanjutkan.
