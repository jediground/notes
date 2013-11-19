/*
	需求：获取一段程序运行的时间
	原理：获取程序开始时间和结束时间的差值

	获取时间：System.currentTimeMillis()
	当代码完成优化后就可以解决这类问题

	这种方式叫做 模板方法设计模式

	什么是模板方法？
	在 定义功能时，功能的一部分是确定的，但是有一部分是不确定的
	而确定的部分在使用不确定的部分，那么这是就将不确定的部分暴露出去，
	由该类的子类去完成。


*/

abstract class GetTime
{
	public final void getTime()
	{
		long start = System.currentTimeMillis();
		runCode();
		long end = System.currentTimeMillis();
		System.out.println("运行用时"+(end-start)+"毫秒");
	}

	public abstract void runCode();
}

class SubTime extends GetTime
{
	public void runCode() // 复写runCode便可以测试不同程序的运行时间
	{
		for (int x=0; x<3000; x++)
		{
			System.out.print(x);
		}
		System.out.println("\n");
	}
}

class TemplateDemo 
{
	public static void main(String[] args) 
	{
		//System.out.println("Hello World!");
		//GetTime gt = new GetTime();
		//gt.getTime();

		SubTime st = new SubTime();
		st.getTime();
	}
}
