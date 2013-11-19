/*
异常在子父类中覆盖的体现：
1，子类在覆盖父类时，如果父类的方法抛出异常，那么子类的覆盖方法就只能抛出父类的异常或者该异常的子类
2，如果父类方法抛出多个异常，那么子类在覆盖该方法时，只能抛出父类异常子集。
3，如果父类或者接口中的方法没有异常抛出，那么子类在覆盖方法时，也不可以抛出异常，如果子类方法发生了异常，就必须要进行try处理，绝对不能抛出异常。

*/
class AException extends Exception
{
	
}

class BException extends Exception
{
	
}

class Fu
{
	void show() throws AException
	{
		
	}
	
}

class Zi extends Fu
{
	void show() throws BException
	{
	
	}
}

class ExceptionDemo6
{
	public static void main(String[] args) 
	{
		System.out.println("Hello World!");
	}
}