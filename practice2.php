<?php
$name = "shiho";
/* Q1 $name があなたの名前だったら 「私は shiho です」、
もし違ったら「shihoではありません」と表示
*/
if ($name == "ann"){
  echo "私は　shiho　です";
} else {
  echo "shihoではありません";
}

 ?>

 <?php
 // Q2 for文を使って、1から10000までの合計の値を表示
$total = 0;
for ($i =0; $i <=10000; $i++) {
  $total += $i;
}
echo $total;

  ?>

<?php
// Q3 $fruits に配列で好きなフルーツを5個代入し、foreach文で順番に出力
$fruits = array("apple","orange","banana","grape","peach");
foreach ($fruits as $fruit){
  echo "好きなフルーツは" . $fruit;
  echo "\n";
}

 ?>

 <?php
 /* Q4 【応用】
 for文の始めの値を定義する */
 $start = 1;
 /* for文の終わりの値を定義する */
 $end = 100;

 for($i = $start; $i <= $end; $i++){

   // 5で割り切れたら{}内を実行する
   if ($i % 5 == 0)
     echo $i;
     echo "\n";
   }
  ?>
