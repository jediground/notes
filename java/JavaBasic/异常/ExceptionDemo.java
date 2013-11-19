class Demo
{
	int div(int a, int b)
	{
		return a/b;
	}
}

class  ExceptionDemo
{
	public static void main(String[] args) 
	{
		//System.out.println("Hello World!");
		Demo d = new Demo();
		int x = d.div(3, 0);
		System.out.println("x="+x);
		System.out.println("done");
	}
}
