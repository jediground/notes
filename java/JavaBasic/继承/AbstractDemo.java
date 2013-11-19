// 当多个类中出现功能相同功能，但是功能主题不同，
// 这是可以进行向上抽取的，这是，只能抽取功能定义，而不抽取功能主体。
// 抽象：看不懂
// 特点：抽象方法定义在抽象类中
// 抽象方法和抽象类必须被abstract关键字修饰
// 抽象类不可以new对象，因为调用抽象方法没有意义
// 抽象类中的抽象方法要被调用，必须由子类复写其所有方法后，建立子类对象调用。
// 如果子类只覆盖了部分抽象方法，那么该子类还是一个抽象类
// 抽象类和普通类没有太大不同，只是要注意该如何描述事物就如何描述事物，不过该
// 类中多了些看不懂的事物，这些不确定的部分也是事物的功能需要明确出来，但是无法
// 定义主体。通过抽象方法来表示
// 抽象类比普通类多了抽象函数。就是在类中可以定义抽象方法。
// 抽象类不能实例化
// 抽象类中可以不定义抽象方法，其作用是不让该类建立对象
abstract class Student
{
	abstract void study();// 抽象方法只能放在抽象类中
	//abstract void study1();
	void sleep() // 抽象类中可以定义普通方法
	{
		System.out.println("趴着睡觉");
	}
}

class ChongciStudent extends Student
{
	void study()
	{
		System.out.println("chongci study");
	}
}	

class BaseStudent extends Student
{
	void study()
	{
		System.out.println("base study");
	}

	//void study(){}
}

class AdvanceStud extends Student
{
	void study()
	{
		System.out.println("advance study");
	}

}
class AbstractDemo 
{
	public static void main(String[] args) 
	{
		//new Student(); // 抽象类不能实例化
		new BaseStudent().study();
	}
}
