<?php
function denseRanking($skor, $skor_gits) {
    $daftar_skor = array_unique($skor);
    rsort($daftar_skor);
    $dense_rank = [];
    foreach ($daftar_skor as $index => $score) {
        $dense_rank[$score] = $index + 1;
    }
    $git_ranking = [];
    foreach ($skor_gits as $urutan_skor_gits) {
        $git_ranking[] = getRank($dense_rank, $urutan_skor_gits);
    } 
    return implode(" ", $git_ranking); 
}

function getRank($dense_rank, $score) {
    if ($score >= max(array_keys($dense_rank))) {
        return 1;
    }
    if ($score < min(array_keys($dense_rank))) {
        return count($dense_rank) + 1;
    }
    foreach ($dense_rank as $s => $rank) {
        if ($score >= $s) {
            return $rank;
        }
    } 
    return count($dense_rank) + 1;
}

echo "Masukkan jumlah pemain: ";
$total_pemain = intval(trim(fgets(STDIN))); 

echo "Masukkan skor pemain (pisahkan dengan spasi): ";
$skor = array_map('intval', explode(" ", trim(fgets(STDIN))));

echo "Masukkan jumlah skor Gits: ";
$hitung_permainan = intval(trim(fgets(STDIN)));

echo "Masukkan skor Gits (pisahkan dengan spasi): ";
$skor_gits = array_map('intval', explode(" ", trim(fgets(STDIN))));

// Output
$result = denseRanking($skor, $skor_gits);
echo "Ranking Gits: " . $result . "\n";
?>