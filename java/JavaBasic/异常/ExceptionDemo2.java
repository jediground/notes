/*
因为项目中会出现特有的问题，而这些问题并未被java所描述并封装对象。
所以对于这些特有的问题可以按照java的对问题进行封装的思想，对特有的
问题进行自定义的异常封装。

自定义异常：
需求：在本程序中，对于除数是负数也视为是错误的。
是无法进行运算的，那么就需要对这个问题进行自定义的描述。

当在函数内部出现了throw抛出异常兑现，就必须给出对应的处理动作。
要么在内部太try catch 处理
要么在函数上声明让调用者处理。

一般情况下函数内出现异常，函数上需要声明。

发现打印的结果中只有异常的名称，没有异常的信息。
因为自定义的异常并未定义信息。

如何定义异常信息呢？
因为父类中已经把异常信息的操作都完成了。
所以子类主要在构造是将异常信息传递给父类通过super语句
就可以直接通过getMessage()方法来获取自定义的异常信息。

自定义异常：
必须是自定义类继承Exception。
为什么要继承Exception?
异常体系有一个特点：因为异常类和异常对象都需要被抛出。
他们都具备可抛出性，这个可抛出性是Throwable这个体系中的
独有特点，只有这个体系中的类和对象才可以被throws和throw操作。

throws和throw的区别：
1，throws使用在函数上(大小括号之间)，throw使用在函数内。
2，throws后面跟的异常类。可以跟多个，用逗号隔开；throw后面跟的事异常对象。


*/

class FuShuException extends Exception // getMessage()
{
/*
	private String msg;
	FuShuException (String msg)
	{
		this.msg = msg;
	}
	
	public String getMessage()
	{
		return msg;
	}
*/

	private int value;
	
	FuShuException (String msg, int value)
	{
		super(msg);
		this.value = value;
	}
	
	public int getValue()
	{
		return value;
	}
}

class Demo
{
	int div(int a, int b) throws FuShuException
	{
		if (b < 0)	
		{
			throw new FuShuException("出现了除数是负数的情况", b); // 手动通过throw关键字抛出一个自定义异常对象。
		}
		return a/b;	
	}
}

class  ExceptionDemo2
{
	public static void main(String[] args) 
	{
		Demo d = new Demo();
		try
		{
			int x = d.div(3,-1);
			System.out.println("x="+x);
		}
		catch(FuShuException e)
		{
			System.out.println(e.toString());
//			System.out.println("除数不能为负数");
			System.out.println("错误的负数是"+e.getValue());

		}
		System.out.println("done!");
	}
}

 /*
class Throwable
{
	Throwable (String message)
	{
		this.message = message;
	}
	
	public String getMessage()
	{
		return message;
	}
}

class Exception extends Throwable
{
	Exception (String message)
	{
		super(message);
	}
}
*/