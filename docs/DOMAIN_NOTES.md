# Domain Notes v1

## Core entities planned

- User
- Customer
- Service
- ServicePriceOption
- Order
- OrderItem
- SpecialRequest
- Payment
- OrderStatusHistory
- BusinessSetting

## Important modeling decisions

1. Order adalah transaksi customer.
2. Order dapat mempunyai lebih dari satu OrderItem.
3. OrderItem menyimpan snapshot nama layanan, unit, quantity, dan harga saat transaksi dibuat.
4. Service tidak boleh dimodelkan menjadi kolom hardcoded seperti `harga_gorden` atau `harga_boneka`.
5. Price option menyimpan harga final per unit agar Express tidak dipaksa selalu mengikuti formula surcharge.
6. Special request berbeda dari Express reguler. Contoh: seragam dalam laundry 3 kg didahulukan dengan additional charge flat berdasarkan kesepakatan; berat order tetap 3 kg.
7. Order status dan payment status adalah konsep berbeda.
8. Public customer tidak mempunyai account pada MVP Phase 1.
