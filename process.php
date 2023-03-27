<?php
$secret_key = "6LdC-TUlAAAAANl5YxnhTcMPkiZkqSeSGy_jy2nw";
$response = $_POST["g-recaptcha-response"];
$remote_ip = $_SERVER["REMOTE_ADDR"];

$url = "https://www.google.com/recaptcha/api/siteverify";
$data = array(
	"secret" => $secret_key,
	"response" => $response,
	"remoteip" => $remote_ip
);

$options = array(
	"http" => array(
		"method" => "POST",
		"content" => http_build_query($data),
		"header" => "Content-Type: application/x-www-form-urlencoded\r\n"
	)
);

$context = stream_context_create($options);
$result = file_get_contents($url, false, $context);
$json = json_decode($result);

if ($json->success) {
	// reCAPTCHA validation passed, process form data
	$name = $_POST["name"];
	$email = $_POST["email"];
	$password = $_POST["password"];

	// do something with the form data, e.g. store in database
} else {
	// reCAPTCHA validation failed, show error message
	echo "reCAPTCHA validation failed!";
}
?>
