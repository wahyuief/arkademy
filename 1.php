<?php
class Shop
{
  public $rater;
  public $score;
  public function Product()
  {
    header('Content-Type: application/json');
    $akmal = new Shop();
    $akmal->rater = 'akmal';
    $akmal->score = 4;
    $andi = new Shop();
    $andi->rater = 'andi';
    $andi->score = 5;
    $data = array(
      'itemId' => '12341822',
      'itemName' => 'desk',
      'price' => 700000,
      'ratings' => array($akmal, $andi),
      'freeShiping' => TRUE,
      'color' => array('brown', 'black')
    );
    return $data;
  }
}
$run = new Shop;
echo json_encode($run->Product());
?>
