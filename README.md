# Problem Solving Test - GITS.ID

## Deskripsi

### third-problem.php

Program ini memeriksa apakah string yang diberikan memiliki bracket yang seimbang. Bracket yang diperbolehkan adalah:

- `(` dan `)`
- `{` dan `}`
- `[` dan `]`

Program ini juga memberikan informasi tentang kesalahan jika bracket tidak seimbang, termasuk jenis bracket yang tidak sesuai dan indeksnya.

## Cara Penggunaan

1. Jalankan skrip PHP di terminal.

```bash
    php filename.php'
```

contoh :

```bash
  php third-problem.php
```

2. Masukkan string bracket yang ingin diuji saat diminta.

Contoh input "YES" : `{([{}])}`
Contoh input "NO" : `{ ( { [] } )) }`

## Output

Program akan mencetak:

- Status keseimbangan: `YES` atau `NO`
- Jika tidak seimbang, program akan mencetak jenis bracket yang tidak sesuai dan indeksnya.

## Kompleksitas

### Kompleksitas Waktu

- **O(n)**: Di mana `n` adalah panjang string input. Program melakukan satu iterasi melalui string dan setiap operasi pada stack (push dan pop) memiliki waktu konstan. Oleh karena itu, waktu eksekusi program sebanding dengan panjang input.

### Kompleksitas Ruang

- **O(n)**: Dalam kasus terburuk, jika semua karakter dalam string adalah bracket buka, kita akan menyimpan semua karakter tersebut di stack. Ini berarti bahwa ruang yang digunakan untuk menyimpan stack dapat mencapai `n` dalam kasus terburuk.

### Contoh Kasus

1. **Input**: `{ [ ( ) ] }`

   - **Output**: `Balanced: YES`
   - **Kompleksitas**: Waktu O(n), Ruang O(n)

2. **Input**: `{ ( { [] } )) }`
   - **Output**:
     ```
     Balanced: NO
     Error not balanced: ) bracket bagian kanan tidak sesuai dengan ( yang ada di bagian kiri
     Error index: 7
     ```
   - **Kompleksitas**: Waktu O(n), Ruang O(n)
