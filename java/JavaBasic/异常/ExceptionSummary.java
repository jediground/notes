/*
异常总结:
是什么？是对问题的描述。将问题进行对象的封装。

异常体系
	Throwable
		|--Error
		|--Exception
			|--RuntimeException
			
异常体系的特点：异常体系中的所有类以及建立的对象都具备可抛性
				也就是说可以被throws和throw关键字操作。
				只有异常体系具备这个特点。
throws和throw的用法：
throw定义在函数内，用于抛出异常对象。
throws定义在函数上，用于抛出异常类，可以抛出多个用逗号隔开。


当函数内有throw抛出异常对象，并未进行try处理，必须要在函数上声明，否则编译失败
注意：RuntimeException除外，也就是说函数内抛出的事RuntimeException异常，函数内可以不用声明。

如果函数声明了异常，调用者需要进行处理。处理方式可抛可try。

异常有两种：
一种是编译时异常；
	该异常在编译时如果没有处理(没抛没try)，编译失败，该异常被表示，代表可以被处理。
另一种是运行时异常(编译时不检测)：
	在编译时，不需要处理，编译器不检查。该异常发生，建议不处理，让程序停止，需要对代码进行修正。

异常处理的语句：
try
{
	// 需要被检测的代码
}
catch ()
{
	// 处理异常的代码	
}
finally
{
	// 一定会执行的代码
}

有三种结合格式：
try/catch
try/finally
try/catch/fianlly

注意：
1，finally中定义的通常是关闭资源代码。因为资源必须释放。
,2，finally只有一种情况不会执行，执行到System.exit(0)finally就不会执行。

自定义异常：
	定义类继承Exception或者RuntimeException
	1，是为了让该自定义类具备可抛性；
	2，让该类具备操作异常的共性方法。
	
	当要定义自定义异常的信息时，可以使用父类已经定义好的功能。
	异常信息传递给父类的构造函数。
	
	class MyException extends Exception
	{
		MyException(String Message)
		{
			super(String Message);
		}	
	}
	
自定义异常，按照java的面向对象的思想，将程序中出现的特有问题进行封装。

异常的好处：
1，将问题进行封装。
2，将正常的流程代码和问题处理代码相分离，方便阅读。

异常的处理原则：
1，处理方式有两种：try or throws
2，调用到抛出异常的功能时，抛出几个，就处理几个。
	try对应多个catch的情况
3，多个catch，父类的catch放到最下面
4，catch内需要定义针对性的处理方式，不要简单的printStackTrace，输出语句，也不要不写。
	当捕获到的异常，本功能处理不力时，可以继续再catch中抛出。
	try
	{
		throw new AException();
	}
	catch (AException e)
	{
		throw e;
	}
	
	如果该异常处理不了，但并不属于该功能出现的异常，可以将异常转换后在抛出和该功能相关的异常。或者异常可以处理，当需要将异常产生后的和本功能相关的问题提供出去，当调用者知道，并处理。也可以捕获异常处理后，转换新的异常抛出。
	try
	{
		throw new AException();
	}
	catch (AException e)
	{
		// 对AException处理
		throw new BException;
	}

异常的注意事项：
在子父类覆盖时：
1，子类抛出的异常必须是父类异常的子类或者子集。
2，如果父类或者接口没有异常抛出时，子类覆盖出现异常，只能try不能抛。


*/


class 
{
	public static void main(String[] args)
	{
		
	}	
}