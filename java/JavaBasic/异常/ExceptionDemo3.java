/*
Exception中有一个特殊的子类异常，叫做RuntimeException
如果在函数内部抛出该异常，函数上可以不用声明，编译一律通过。
如果在函数上声明了该遗产，调用者可以不用进行处理，编译一样通过。

不用再函数上声明，是因为不需要调用者处理。
当发生该异常，希望程序停止，出现了无法继续运算的情况，希望停止程序后，
对代码进行修正

自定义异常时，如果该异常的发生，无法再继续进行运算，就让自定义异常继承RuntimeException。

对于异常分两种：
1，编译时被检测的异常。
2，编译时不被检测的异常(运行时异常，RuntimeException以及其子类)
*/

class FuShuException extends RuntimeException
{
	FuShuException(String msg)
	{
		super(msg);
	}
}
class Demo
{
	int div(int a, int b) //throws ArithmeticException
	{
		if (0 == b)
		{		
			throw new ArithmeticException("被零除啦！");
		}
		if (b < 0 )
		{
			throw new ArithmeticException("除数为负数了！");

		}
		return a/b;
	}
}	

class  ExceptionDemo3
{
	public static void main(String[] args) 
	{
		Demo d = new Demo();
		
		int x = d.div(3,-9);
		System.out.println("x="+x);
		System.out.println("Done!");
		
	}
}
/*
class Person
{
	public void checkName(String name)
	{
		//if (name.equals("lisi")) // NullPointerException
		if ("lisi".equals(name)) // if (name != null && name.equals("lisi"))
		{
			System.out.println("用户名正确");
		}
		else
		{
			System.out.println("用户名不正确");

		}
	}
}

main()
{
	Person p = new Person();
	p.checkName(null);
}
*/