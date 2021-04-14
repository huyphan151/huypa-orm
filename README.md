## 4 Tính chất của oop:

1. Tính trừu tượng: là quá trình đơn giản hóa một đối tượng mà trong đó chỉ bao gồm những đặc điểm quan tâm và bỏ qua những đặc điểm chi tiết nhỏ. Quá trình trừu tượng hóa dữ liệu giúp ta xác định được những thuộc tính, hành động nào của đối tượng cần thiết sử dụng cho chương trình.
Tính trừu tượng thể hiện qua Astract và Interface.

-Ex1: 
	<?php
	interface Animal {
	  public function makeSound();
	}

	class Cat implements Animal {
	  public function makeSound() {
	    echo "Meow";
	  }
	}

	$animal = new Cat();
	$animal->makeSound();
	?>
		
-Ex2: 
	abstract class ConNguoi
	{
	    protected $name;
	    abstract protected function getName();
	}

	class NguoiLon extends ConNguoi
	{
	    public function getName()
	    {
		return $this->name;
	    }
	}
	
2. Tính đa hình: Tính đa hình trong lập trình hướng đối tượng là sự đa hình của mỗi hành động cụ thể ở những đối tượng khác nhau. Các class con sẽ overwrite lại các phương thức của class cha. Các class cùng implement một interface nhưng chúng có cách thức thực hiện khác nhau cho các method của interface đó. 
	
Ex: 

	<?php
	interface Animal {
	  public function makeSound();
	}

	class Cat implements Animal {
	  public function makeSound() {
	    echo " Meow ";
	  }
	}

	class Dog implements Animal {
	  public function makeSound() {
	    echo " Bark ";
	  }
	}

	class Mouse implements Animal {
	  public function makeSound() {
	    echo " Squeak ";
	  }
	}
	
	<?
	
3. Tính kế thừa: Tính kế thừa trong lập trình hướng đối tượng cho phép một lớp có thể kế thừa các thuộc tính và phương thức từ các lớp khác đã được định nghĩa. Lớp được kế thừa còn được gọi là lớp cha và lớp kế thừa được gọi là lớp con.

Ex:
 	<?php
	class Fruit {
	  public $name;
	  public $color;
	  public function __construct($name, $color) {
	    $this->name = $name;
	    $this->color = $color;
	  }
	  protected function intro() {
	    echo "The fruit is {$this->name} and the color is {$this->color}.";
	  }
	}

	class Strawberry extends Fruit {
	  public function message() {
	    echo "Am I a fruit or a berry? ";
	  }
	}
	
	?>
	
4. Tính đóng gói: Tính đóng gói là tính chất không cho phép người dùng hay đối tượng khác thay đổi dữ liệu thành viên của đối tượng nội tại. Chỉ có các hàm thành viên của đối tượng đó mới có quyền thay đổi trạng thái nội tại của nó. . Trong PHP việc đóng gói được thực hiện nhờ sử dụng các từ khoá public, private và protected.

Ex: 
	<?php
	class Fruit {
	  public $name;
	  public $color;
	  public $weight;

	  function set_name($n) {  // a public function (default)
	    $this->name = $n;
	  }
	  protected function set_color($n) { // a protected function
	    $this->color = $n;
	  }
	  private function set_weight($n) { // a private function
	    $this->weight = $n;
	  }
	}

	$mango = new Fruit();
	$mango->set_name('Mango'); // OK
	$mango->set_color('Yellow'); // ERROR
	$mango->set_weight('300'); // ERROR
	?>
	
## tài liệu tham khảo:
w3schools.com
https://viblo.asia/p/lap-trinh-huong-doi-tuong-oop-trong-php-phan-1-gGJ59gyaZX2.
