<?php
// Q1 変数と文字列
echo '私の名前は「川口」です';

// Q2 四則演算
$num = 5 * 4;
echo $num;
echo "\n";
echo $num / 2;

// Q3 日付操作
echo date("Y年m月d日 h時i分s秒");

// Q4 条件分岐-1 if文
$device = 'Linux';
if ($device == 'windows') {
  echo '使用OSは、windowsです。';
} else {
if ($device == 'mac') {
  echo '使用OSは、macです。';
} else {
  echo 'どちらでもありません。';
}
}

// Q5 条件分岐-2 三項演算子
$age = 17;
if($age < 18) {
  echo '未成年です。';
} else {
  echo '成人です。';
}

// Q6 配列
$kanto_region = ['東京都'=>'新宿区','神奈川県'=>'横浜市','千葉県'=>'千葉市','埼玉県'=>'さいたま市','栃木県'=>'宇都宮市','群馬県'=>'前橋市','茨木県'=>'水戸市'];
$key = array_keys($kanto_region);
echo $key[2]."と".$key[3]."は関東地方の都道府県です。";

// Q7 連想配列-1
$kanto_region = ['東京都'=>'新宿区','神奈川県'=>'横浜市','千葉県'=>'千葉市','埼玉県'=>'さいたま市','栃木県'=>'宇都宮市','群馬県'=>'前橋市','茨木県'=>'水戸市'];
foreach ($kanto_region as $value) {
  echo $value . "\n";
}

// Q8 連想配列-2
$kanto_region = ['東京都'=>'新宿区','神奈川県'=>'横浜市','千葉県'=>'千葉市','埼玉県'=>'さいたま市','栃木県'=>'宇都宮市','群馬県'=>'前橋市','茨木県'=>'水戸市'];
foreach ($kanto_region as $key =>$value) {
  if ($key == '神奈川県') {
    echo $key . "の県庁所在地は" . $value."です。\n";
  };
}

// Q9 連想配列-3
$kanto_region = ['東京都'=>'新宿区','神奈川県'=>'横浜市','千葉県'=>'千葉市','埼玉県'=>'さいたま市','栃木県'=>'宇都宮市','群馬県'=>'前橋市','茨木県'=>'水戸市'];
$kanto_region ['愛知県'] = '名古屋市';
$kanto_region ['大阪府'] = '大阪市';
$kanto_area = ['東京都'=>'新宿区','神奈川県'=>'横浜市','千葉県'=>'千葉市','埼玉県'=>'さいたま市','栃木県'=>'宇都宮市','群馬県'=>'前橋市','茨木県'=>'水戸市'];

foreach ($kanto_region as $key => $value) {
  if (array_key_exists($key,$kanto_area)) {
    echo $key . "の県庁所在地は" . $value . "です。 \n";
  } else {
    echo $key . "は関東地方ではありません。\n";
  }
}

// Q10 関数-1
function hello($name = "Guest") {
  echo $name. "さん、こんにちは。\n";
}
hello ("アニサキス");
hello ("ロロイコクロリディウム");
// Q11 関数-2
$calcTaxInPrice = function($price,$fixed = 1.1) {
  return $price * $fixed;
};
$price = 1000;
$taxInPrice = $calcTaxInPrice($price);
echo $price."円の商品の税込価格は". $taxInPrice."円です。";

// Q12 関数とif文
function distinguishNum($number) {
  return $number % 2 === 0;
  return $number % 2 === 1;
}
$number = [5,6,9,12];
foreach ($number as $number) {
  if(distinguishNum($number)) {
    echo $number."は偶数です。\n";
  }else {
    echo $number."は奇数です。\n";
  }
}

// Q13 関数とswitch文
function evaluateGrade($point) {
  switch ($point) {
    case'A':
    case'B':
      return "合格です。\n";
    case'C':
      return "不合格です。\n";
    default:
      return "判定不明です。講師に問い合わせてください。\n";
  }
}
$points = ['A','D'];
foreach ($points as $point) {
  echo evaluateGrade($point);
}
?>