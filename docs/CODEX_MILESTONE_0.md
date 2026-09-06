# Codex Task — Milestone 0: Foundation

## Goal

Ubah starter repository ini menjadi Laravel application yang bersih dan siap dikembangkan, tanpa mengimplementasikan business features laundry terlebih dahulu.

## Target stack

- Laravel versi stabil yang kompatibel dengan PHP >= 8.2
- MySQL
- Blade untuk public pages
- Livewire boleh dipasang jika memang diperlukan untuk admin interaction, tetapi jangan membuat fitur bisnis dulu
- PHPUnit/Pest sesuai default Laravel yang dipilih

## Scope

1. Initialize Laravel di repository ini tanpa menghilangkan dokumentasi dalam `/docs`.
2. Siapkan `.env.example` untuk MySQL.
3. Siapkan authentication admin sederhana.
4. Buat base layout public dan admin yang sangat minimal.
5. Pastikan test suite berjalan.
6. Pindahkan atau adaptasi `QuantityCalculator` dan test-nya ke struktur Laravel yang sesuai.
7. Tambahkan README setup lokal yang jelas.

## Do not implement yet

- Customer CRUD
- Service/pricing CRUD
- Order CRUD
- Payment CRUD
- Dashboard business metrics
- Online ordering
- Customer accounts
- Pickup radius/fee automation
- Notifications
- QR/barcode
- Advanced analytics

## Guardrails

- Jangan membuat business rule baru yang tidak ada di dokumentasi.
- Jangan hardcode daftar harga ke controller/view sebagai desain permanen.
- Jangan membuat microservice atau separate frontend application.
- Jangan menambahkan dependency yang tidak dibutuhkan Milestone 0.
- Pertahankan struktur sesederhana mungkin.

## Definition of done

- Laravel app dapat boot secara lokal.
- Database configuration tersedia melalui environment variables.
- Admin dapat login ke halaman admin kosong/minimal.
- Public homepage minimal dapat dibuka.
- Test `QuantityCalculator` lulus.
- Seluruh test suite lulus.
- README menjelaskan setup dan command utama.
