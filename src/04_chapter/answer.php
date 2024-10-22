# 例題① 配列
<?php
$array = ['hoge', 'fuga', 'PHP', 'Laravel', 'Ruby', 'Ruby on Rails'];
print "\n";

foreach ($array as $value) {
    print "{$value}";
    print "\n";
}

print "\n";
?>

# 例題② 連想配列
<?php
$array = [
    'php_framework' => 'Laravel',
    'ruby_framework' => 'Ruby on Rails',
    'python_framework' => 'Django'
];
print "\n";

foreach ($array as $key => $value) {
    print "{$key}：{$value}";
    print "\n";
}

print "\n";
?>


# 例題③ 連想配列（例題①と同じ記載した場合）
<?php
$array = [
    'php_framework' => 'Laravel',
    'ruby_framework' => 'Ruby on Rails',
    'python_framework' => 'Django'
];
print "\n";

foreach ($array as $value) {
    print "{$value}";
    print "\n";
}

print "\n";
?>

<?php
$array = ['hoge', 'fuga', 'PHP', 'Laravel', 'Ruby on Rails', 'Ruby'];
print "\n";

foreach ($array as $value) {
    if ($value == 'Ruby') {   # 'Ruby'の部分を他の配列内の要素にいろいろ変えてみましょう。
      break;
    }
    print "{$value}";
    print "\n";
}

print "\n";
?>


<?php
$array = [0, 1, 2, 'PHP', 3, 4, 'Laravel', 5];

print "\n";

foreach ($array as $value) {
    # $valueの値が2以下の場合は以降の処理をスキップし、2以上の場合は以降の処理を実行します。
    if ($value <= 3) { continue; }   # 2 の部分を他の配列内の要素にいろいろ変えてみましょう。

    print "{$value}";
    print "\n";
}

print "\n";
?>