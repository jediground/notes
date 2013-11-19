/*
异常：就是程序运行时出现不正常情况。
异常由来：问题也是现实生活中的一个具体事物，也可以通过
java的类的形式进行描述，并封装对对象。
其实就是java对不正常情况描述后的对象体现。

对于问题的划分：一种是严重的问题，一种是非严重的问题。
对于严重的问题java通过Error类描述。
	对于Error一般不编写针对性的代码对其进行处理。
对于非严重的问题java通过Exception类描述。
	对于Exception可以使用针对性的处理方式处理。

无论Error或者Exception都已一些共性的内容。
比如：不正常的信息，引发原因等。
Throeable
	|--Error
	|--Exception

2.异常的处理

java提供了特有语句进行处理。

try
{
//	需要被检测的代码
}
catch
{
//	处理异常的代码
}
finally
{
//	一定会执行的语句
}

3.对捕捉到的异常对象进行常见方法操作。
	String getMessage():获取异常信息。
	
在函数上声明异常。
便于提交安全性，让调用处进行处理，不处理编译失败。

对多异常的处理：
1.声明异常时，建议声明更为具体的异常，这样可以更具体。
2.对方声明几个异常，就对应有几个catch块。
	如果多个catch块中异常出现继承关系，父类异常catch块放在最后面。
3.不要定义多余的catch块。

建议在进行catch处理时，catch中一定要定义具体处理方式，不要简单
定义一句e。printStackTrace(),也不要就简单的输出一条语句


*/
class Demo
{
	int div(int a, int b) throws ArithmeticException,ArrayIndexOutOfBoundsException //在功能上通过throws关键字声明了该功能可能出现问题
	{
		return a/b;
	}
}

class  ExceptionDemo //throws Exception
{
	public static void main(String[] args) 
	{
		//System.out.println("Hello World!");
//		Demo d = new Demo();
//		int x = d.div(3, 0);
//		System.out.println("x="+x);
//		System.out.println("done");

//		byte[] arr = new byte[1024*1024*400]; // 内存溢出

		Demo d = new Demo();
		try
		{
//			int x = d.div(3, 0);
//			System.out.println("x="+x);
		}
		catch(ArithmeticException e)
		{
			System.out.println(e.toString());
			System.out.println("除数不能为零");
		}
		
		catch(ArrayIndexOutOfBoundsException e)
		{
			System.out.println(e.toString());
			System.out.println("角标越界了");
		}



//		catch (Exception e) // Exception e = new AirthmeticException();
//		{
//			System.out.println("除数不能为零");
//			System.out.println(e.getMessage());
//			System.out.println(e.toString());
//			e.printStackTrace();  // 默认的异常处理机制就是在调用
//								//printStackTrace方法，打印异常在堆栈中的异常信息
//			
//		}
//		finally
//		{
//			System.out.println("done");
//		}


//		Demo d = new Demo();
		int x = d.div(3, 0);
		System.out.println("x="+x);
		System.out.println("done");
	}
}
