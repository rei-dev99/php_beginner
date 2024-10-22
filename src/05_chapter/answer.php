<?php
function getSquareArea($height, $width) {
    return $height * $width;
}

$result = getSquareArea(5,10);

print "\n";
print "四角形の面積は{$result}cm";
print "\n";
?>

# 例
<?php
$hoge = 'Hello World!';
print "\n";

# ----- ↓ローカルスコープ↓ -----
function fuga($hoge) {
    $hoge = 'Goodbye World...';   # （＊1）
    return print $hoge;           # Goobye World..
}
# ----- ↑ローカルスコープ↑ -----

fuga($hoge);
print "\n\n";
print $hoge;                       # Hello World!（＊2）
print "\n\n";
?>


# 例
<?php
function hoge(&$number) {
  $number++;
  return $number;
}

$value = 5;

print "\n";
print hoge($value);   # 6

print "\n\n";
print $value;         # 5
print "\n\n";
?>

