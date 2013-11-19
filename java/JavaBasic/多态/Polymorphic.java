/*
多态(polymorphic)：事物存在的多种体现形态

人：男人，女人
动物：猫，狗，猪。。。。

猫 x = new 猫();
动物 x = new 猫();

1. 多态的基本体现
	父类引用指向了自己的子类对象
	父类的引用可以接受自己的子类对象
2. 多态的前途
	类与类之间有关系，要么继承，要么实现
3. 多态的好处
	提高了程序的扩展性
	存在覆盖
	弊端：提高了扩展性，但是只能引用父类的引用访问父类的成员
4. 多态的应用

5. 多态的出现代码的特点（注意事项）


*/

/*
动物，
猫，狗


*/
abstract class Animal
{
	abstract void eat();
}

class Cat extends Animal
{
	public void eat()
	{
		System.out.println("吃鱼");
	}

	public void catchMouse()
	{
		System.out.println("抓老鼠");
	}
}

class Dog extends Animal
{
	public void eat()
	{
		System.out.println("吃骨头");
	}

	public void kanJia()
	{
		System.out.println("看家");
	}
}

class Pig extends Animal
{
	public void eat()
	{
		System.out.println("吃饲料");
	}

	public void gongDi()
	{
		System.out.println("拱地");
	}
}

class  Polymorphic
{                           
	public static void main(String[] args) 
	{
		//System.out.println("Hello World!");
		//Cat c = new Cat();
		//c.eat();

		//Dog d = new Dog();
		//d.eat();

		//Cat c = new Cat();
		/*
		Cat c1  = new Cat();
		function(c1);
		function(new Dog());
		function(new Pig());
		*/

		//Animal c = new Cat(); // Cat c = new Cat();
		//c.eat();

		//function(new Cat()); 

		Animal a = new Cat(); // 类型提升，向上转型。
		a.eat();

		// 如果想要调用猫的特有方法时，如何操作？
		//强制将父类的引用转换成子类类型
		Cat c = (Cat)a;
		c.catchMouse();

		//千万不要出现这样的操作，将父类对象转换成子类类型
		//能转换的是父类引用指向了自己的子类对象时，该引用可以被提升，也可以被转换
		//多天自始自终都是子类在变化
		//Animal a = new Animal();
		//Cat c = (Cat)a;

		function(new Dog());
		function(new Cat());
	}
	/*
	public static void function(Cat c)
	{
		c.eat();
	}

	public static void function(Dog d)
	{
		d.eat();
	}

	public static void function(Pig p)
	{
		p.eat();
	}
	*/

	 //以上三个function可以等价于下面代码

	public static void function(Animal a)
	{
		a.eat();
		if (a instanceof Cat)
		{
			Cat c = (Cat)a;
			c.catchMouse();
		}
		if (a instanceof Dog)
		{
			Dog d = (Dog)a;
			d.kanJia();
		}
	}
}




