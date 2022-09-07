<?php
include 'inter.php';

$string = 'Cờ tướng là trò chơi từ xa xưa, và áp dụng những luật lệ được công nhận. Cho nên nếu như muốn chơi cờ giỏi, bạn nhớ là phải biết được cách di chuyển các quân cờ trong một ván bài nhé.

Trong đó, Tướng là quân cờ mang tính biểu tượng nhất, Tướng mất thì coi như thua. Tướng luôn chỉ di chuyển trong phạm vi cho phép (gọi là Cung) và khá hạn chế.

Quân Sĩ – là quân được xếp ở hai bên của quân Cờ tướng và cũng Cờ tướng chỉ được di chuyển trong phạm vi “Cung”.

Quân Tượng, chỉ được đi chéo 2 ô , không được đi sang phần sân đối phương.

Quân Mã – đi như quân Mã trong cờ vua Cờ tướng (đi 2 ô ngang – 1 ô dọc, hoặc 2 ô dọc, 1 ô ngang)

Quân Xe, Pháp – đi theo đường thẳng (ngang hoặc dọc)

Quân Tốt chỉ được đi mỗi lần một nước, chỉ đi thẳng. Nếu như quân tốt chưa vượt qua sông thì chỉ có thể đi thẳng, nếu vượt qua sông rồi thì có thể đi tiến lùi tùy ý.';


$inter = [
  [
  'id' => '1',
  'keyword' => 'Cờ tướng',
  'is_tab' => '1',
  'is_tag' => '1',
  'id_internal_link' => '1',
  "href" => "https://forextradingvn.top"
  ],
  [
  'id' => '2',
  'keyword' => 'Tướng',
  'is_tab' => '1',
  'is_tag' => '1',
  'id_internal_link' => '2',
  "href" => "https://ssss.ss"
  ],
  [
  'id' => '3',
  'keyword' => 'quân Mã',
  'is_tab' => '1',
  'is_tag' => '1',
  'id_internal_link' => '3',
  "href" => "https://eeeee.top"
  ],
];
$data = InterLink::init()->setcontent($string)->setDataInterLink($inter)->get();
var_dump($data);