/*
匿名内部类：
1.匿名内部类其实就是内部类的简写格式。
2.定义匿名内部类的前提：内部类必须继承一个类或者实现接口。
3.匿名内部类的格式  new 父类或者接口(){定义子类的内容}
4.其实匿名内部类就是一个匿名子类对象。
*
abstract class AbsDemo
{
	abstract void show();	
}
class Outer
{
	int x = 3;
	/*
	class Inner extends AbsDemo
	{
		void show()
		{
			System.out.println("method"+x);	
		}
	}	
	*/

	/* 
	public void function()
	{
//		new Inner().show();	
		new AbsDemo()
		{
			void show()
			{
				System.out.println("x="+x);		
			}
			
			void show2()
			{
				System.out.println("。。。。。");		
			}
		}.show() //匿名对象不能同时调用两个方法
	}
	 */
	 
	 public void function()
	{
		// AbsDemo ad = new Inner();
		//Inner in = new Inner();
		//in.show();
		//in.show2();
		
		AbsDemo ad = new AbsDemo()
		{
			void show()
			{
				System.out.println("x="+x);		
			}
			
			void show2()
			{
				System.out.println("。。。。。");		
			}
		};
		ad.show();
		ad.show2(); //不能使用子类方法
	}
}

class InnerClassDemo3 
{
	public static void main(String[] args) 
	{
		new Outer().function();
	}
}


