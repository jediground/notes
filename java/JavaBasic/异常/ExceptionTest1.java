/*
有一个圆形和长方形
都可以获取面积，对于面积如果出现非法的数值，视为获取面积出现问题
问题通过异常来表示。

先要对这个程序进行基本设计：


*/
class NoValueException extends RuntimeException
{
	NoValueException(String message)
	{
		super(message);
	}
}

interface Shape
{
	void getArea();
}

class Rec implements Shape
{
	private int len, wid;

	Rec(int len, int wid) //throws NoValueException
	{
		if (len<=0 || wid <=0)
		{
			throw new NoValueException("长和宽不能为负数");
		}
		this.len = len;
		this.wid = wid;		
	}

	public void getArea()
	{
		System.out.println(len*wid);
	}
}

class Circle implements Shape
{
	private int radius;
	public static final double PI = 3.14;
	
	Circle (int radius)
	{
		if (radius <= 0)
		{
				throw new NoValueException("数据不合法");
		}
		this.radius = radius;
	}
	
	public void getArea()
	{
		System.out.println(radius*radius*PI);
	}
}
class  ExceptionTest1
{
	public static void main(String[] args) 
	{
		
//		try 
//		{
//			Rec r = new Rec(-3, 4);
//			r.getArea();
//		}
//		catch (NoValueException e)
//		{
//			System.out.println(e.toString());
//		}
		
		Circle c = new Circle(-9);
		c.getArea();

		System.out.println("Done!");
	}
}
