/*
final 可以修饰类，函数，变量
final 修饰的类无法被继承
final 修饰的方法不能复写
final 修饰的变量是一个常量，只能赋值一次。
*/

final class Demo
{
	public static final double PI = 3.14;
	final void show1()
	{}
	void show2()
	{
		final int y = 4;
		//y = 6;
	}
}

class SubDemo extends Demo
{
	//void show1(){}
}
class FinalDemo 
{
	public static void main(String[] args) 
	{
		System.out.println("Hello World!");
	}
}
