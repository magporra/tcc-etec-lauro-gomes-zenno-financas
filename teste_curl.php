_<?php
$url = "https://kdsuvlaeepwjzqnfvxxr.supabase.co/rest/v1/";
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
if ($response === false) {
    echo "Erro cURL: " . curl_error($ch);
} else {
    echo "Requisição OK!";
}
curl_close($ch);
?>
