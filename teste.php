<?php
$url = "https://kdsuvlaeepwjzqnfvxxr.supabase.co";
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);

if ($response === false) {
    echo "❌ Erro cURL: " . curl_error($ch);
} else {
    echo "✅ Conectado com sucesso ao Supabase!";
}

curl_close($ch);
?>
