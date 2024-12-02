<?php

function isBalanced($input) {
    $input = preg_replace('/\s+/', '', $input);
    $stack = [];
    $matchingBrackets = [
        ')' => '(',
        '}' => '{',
        ']' => '['
    ];
    for ($i = 0; $i < strlen($input); $i++) {
        $char = $input[$i];  
        if (in_array($char, ['(', '{', '['])) {
            array_push($stack, $char);
        }
        elseif (in_array($char, [')', '}', ']'])) {
            if (empty($stack)) {
                return [
                    'balanced' => "NO",
                    'error' => "$char bracket bagian kanan tidak sesuai dengan bracket yang ada di bagian kiri",
                    'error_index' => $i
                ];
            }
            $lastOpenBracket = array_pop($stack);
            if ($matchingBrackets[$char] !== $lastOpenBracket) {
                return [
                    'balanced' => "NO",
                    'error' => "$char bracket bagian kanan tidak sesuai dengan $lastOpenBracket yang ada di bagian kiri",
                    'error_index' => $i
                ];
            }
        }
    }   
    return empty($stack) ? ['balanced' => "YES"] : ['balanced' => "NO", 'error' => "Brackets tidak seimbang", 'error_index' => strlen($input)];
}
echo "Masukkan bracket yang ingin diuji di sini: ";
$input = trim(fgets(STDIN)); 
$result = isBalanced($input);
echo "Balanced: " . $result['balanced'] . "\n";
if ($result['balanced'] === "NO") {
    echo "Error not balanced: " . $result['error'] . "\n";
    echo "Error index: " . $result['error_index'] . "\n";
}
?>