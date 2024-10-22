<?php
# 例
class Product {
    public $name;
    public $price;

    public function __construct($name, $price) {
        $this->name = $name;
        $this->price = $price;
    }

    public function show() {
        return "Name：{$this->name}, Price：{$this->price}";
    }
}

class Book extends Product {
    public function show() {
        return "書籍名：{$this->name}, 価格：{$this->price}";
    }
}

print "\n";
$product = new Product('Hoge', 1500);
print $product->show();     # Name：Hoge, Price：1500
print "\n\n";

$book = new Book('「エンジニア×スタートアップ」こそ、最高のキャリアである', 'Priceless');
print $book->show();        # 書籍名：「エンジニア×スタートアップ」こそ、最高のキャリアである, 価格：Priceless
print "\n\n";
?>

<?php
class SimpleClass
{
    // プロパティの宣言
    public $name;
    public $number;

    public function __construct($name, $number) {
        $this->name = $name;
        $this->number = $number;
    }

    public function show() {
        return "名前は{$this->name}です。出席番号は{$this->number}です。";
    }
}

class Profile extends SimpleClass {
    public function show() {
        return "好きな食べ物は{$this->name}です。趣味は{$this->number}です。";
    }
}

print "\n";
$class = new SimpleClass('田中健太', 15);
print $class->show();
print "\n\n";

$profile = new Profile('ラーメン', '釣り');
print $profile->show();
print "\n\n";

?>