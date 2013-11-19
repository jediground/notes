interface Inter
{
	void method();
}

class Test
{
	/*
	static class Inner implements Inter
	{
		public void method()
		{
			System.out.println("method run");
		}
	}
	*/
	static Inter function()
	{
		return new Inter()
		{
			public void method()
			{
				System.out.println("method run");
			}
		};
	}
}

class InnerClassTest 
{
	public static void main(String[] args) 
	{
		// Test.function() : Test类中有一个静态方法function
		// .method() : function这个方法运算后结果是一个对象，而且是一个Inter类型对象
		// 因为只有Inter类型的对象才可以调用method方法
			
		Test.function().method();

		// Inter in = Test.function();
		// in.method();

		show(new Inter()
		{
			public void method()
			{
				System.out.println("method show run");
			}
		});
	}

	public static void show(Inter in)
	{
		in.method();
	}
}

class InnerTest
{
	
	public static void main(String[] args) 
	{
		new Object() // 不能使用命名句柄调用方法，因为Object里没有function()函数
		{
			public void function()
			{
				
			}
		}.function();
	}
}