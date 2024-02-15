<?   
$Директор = $_POST['Директор'];
$Иванов = $_POST['Иванов'];
$Иван = $_POST['Иван'];
$Иванович = $_POST['Иванович'];
$Сумма = $_POST['Сумма'];
$часов = $_POST['часов'];
$data = $_POST['data'];

$token = "6619165218:AAEy33WI-AZ6O2AcI9zAwpiCuVQTYnAISls";
$chat_id= "-4004609009";
// https://api.telegram.org/bot6619165218:AAEy33WI-AZ6O2AcI9zAwpiCuVQTYnAISls/getUpdates
$art = array(
  'цель:  ' => $Директор ,
  'Фамилия:  '          => $Иванов,
  'Имя:    '          => $Иван,
  'Отчество:    '          => $Иванович,
  'Желаемая Зарплата:    '          =>$Сумма ,
  'data:    '          => $data,
  'Количество часов на работе:    '          => $часов,
);
foreach( $art as  $key => $value):
    
    $text .= "<b>"  .$key.  "</b>" .$value ."%0A";
    
endforeach;

$telegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$text}", "r");

if($telegram):
    header('Location: thank-you.html');
else:
    header('Location: error.html');
endif;

?>