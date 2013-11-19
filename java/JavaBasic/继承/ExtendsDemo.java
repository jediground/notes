class Fu
{
	Fu()
	{
		System.out.println("fun run...");	
	}
}

class Zi extends Fu
{
	Zi()
	{
		super();
		System.out.println("zi run,,,");
	}
}

class ExtendsDemo
{
	public static void main(String[] args)
	{
		Zi z = new Zi();
	}
}