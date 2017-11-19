$json = $file_get_contents(https://app.ticketmaster.com/discovery/v2/events.json?size=1&apikey=heleoTqKM6BG8OtZfxjDcLGqkGOdMIzf);
$json = $json_decode($json);

var_dump($json);