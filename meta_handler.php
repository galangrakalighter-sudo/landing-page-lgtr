<?php
// Menerima input dari JavaScript
$payload = json_decode(file_get_contents('php://input'), true);

if ($payload) {
    // --- KONFIGURASI ---
    $pixel_id     = '1414341770233839';
    $access_token = 'EAAcZCIOIBJ4IBQUW1fz8R3NISXBVvUGgKHTrFxDTNZCTqxxwPCsp9PkFPBUZB7ZBLj6WJdEcFnWiZCNzUx8LMcdFbzHZCUZAvhB6GxbUBgxUdnxYl2IV34tZC4KDZANvwzRTIzB88Tyn4yJYXlUKpAXEZBh7YSLjxBGeZC2qOLMzSBpa8YuiHZAOiIhPwDhiqsfecLx22QZDZD';
    $test_code    = 'TEST68315'; 

    // Identifikasi User (Localhost Fix)
    $user_ip = $_SERVER['REMOTE_ADDR'] === '::1' ? '1.1.1.1' : $_SERVER['REMOTE_ADDR'];
    $user_agent = $_SERVER['HTTP_USER_AGENT'];

    // --- STRUKTUR DATA META ---
    $data = [
        'data' => [[
            'event_name'       => $payload['event_name'] ?? 'PageView', 
            'event_time'       => time(),
            'action_source'    => 'website',
            'event_source_url' => $payload['url'] ?? "http://$_SERVER[HTTP_HOST]",
            'user_data'        => [
                'client_ip_address' => $user_ip,
                'client_user_agent' => $user_agent,
            ],
            // Custom data menangkap apapun yang dikirim dari JS
            'custom_data'      => $payload['custom_params'] ?? [] 
        ]],
        'test_event_code' => $test_code 
    ];

    // --- EKSEKUSI CURL ---
    $url = "https://graph.facebook.com/v18.0/{$pixel_id}/events?access_token={$access_token}";
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
    curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); 

    $response = curl_exec($ch);

    header('Content-Type: application/json');
    echo $response;
}