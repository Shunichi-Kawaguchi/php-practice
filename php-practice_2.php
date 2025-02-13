<?php
// Q1 tic-tac問題
$numbers = [];
for ($i = 1; $i <= 100; $i++) {
  $numbers[] = $i;
}
foreach ($numbers as $number) {
  if($number % 4 === 0 && $number % 5 === 0) {
    echo "tic-tac \n";
  }else{
    if($number % 5 === 0) {
     echo "tac \n";
  }else{
    if($number % 4 === 0){
     echo "tic \n";
  }else{
     echo $number. "\n";
  }
  }
  }
}

// Q2 多次元連想配列
echo $personalInfos[1]['name']."の電話番号は".$personalInfos[1]['tel']."です。";
// Q2-2
foreach ($personalInfos as $index =>$list) {
  echo ($index + 1)."番目の".$list['name']."メールアドレスは".$list['mail']."です。\n";}
// Q2-3
$ageList = [25, 30, 18];
foreach ($personalInfos as $index => &$list) {
    $list['age'] = $ageList[$index];
}
var_dump($personalInfos)
// Q3 オブジェクト-1
$student = new Student(120,'山田');
echo '学籍番号'. $student->studentId.'番の生徒は'.$student->studentName.'です。';

// Q4 オブジェクト-2
class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend($word)
    {
        $this->attend = $word;
        echo '授業に出席しました。';
    }
}
$yamada = new Student(120,'山田');
$yamada->attend('PHP');
echo $yamada->studentName.'は'.$yamada->attend.'の授業に参加しました。学籍番号：'.$yamada->studentId;

// Q5 定義済みクラス
$date = new DateTime('2021-3-2');
echo $date->modify('-1 months')->format('Y-m-d');

Q5-2
$date = strtotime("2021-03-02");
$date2 = strtotime("1992-04-25");
$date3 = ($date - $date2) / 86400;
echo "あの日から".$date3."日経過しました。";
?>