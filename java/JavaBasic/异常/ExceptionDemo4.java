/*
finally代码块，一定执行的代码
通常用于关闭资源。比如关闭数据库连接。
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
