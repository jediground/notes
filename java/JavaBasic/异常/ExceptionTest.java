/*
	老师用电脑上课
	
开始思考，上课中出现的问题
比如问题是：
	电脑蓝屏
	主机损坏
对问题进行描述，封装成对象。
当电脑损坏后，会出现无法讲课异常。
就出现了教师的问题，课时计划无法完成。
*/
class blueScreenException extends Exception
{
	blueScreenException(String message)
	{
		super(message);
	}
}

class comptBreakException extends Exception
{
	comptBreakException(String message)
	{
		super(message);
	}
}

class NoPlanException extends Exception
{
	NoPlanException(String msg)
	{
		super(msg);
	}
}

class Computer
{
	private int state = 3;
	public void run() throws blueScreenException, comptBreakException
	{
		if (2 == state)
		{
			throw new blueScreenException("蓝屏了");
		}
		if (3 == state)
		{
			throw new comptBreakException("主机损坏了");
		}
		System.out.println("run...");	
	}
	
	public void reset()
	{
		state = 1;
		System.out.println("reset...");
	}
}
class Teacher
{
	private String name;
	private Computer cmpt;
	
	Teacher(String name)
	{
		this.name = name;
		cmpt = new Computer();
	}
	
	public void prelect() throws NoPlanException
	{
		try
		{
			cmpt.run();
			
		}
		catch (blueScreenException e)
		{
			cmpt.reset();
		}
		catch (comptBreakException e)
		{
			test();
			throw new NoPlanException("课时无法继续！"+e.getMessage());
		}
		System.out.println("讲课");
	}
	
	public void test()
	{
		System.out.println("做练习");
	}
}

class  ExceptionTest
{
	public static void main(String[] args) 
	{
		Teacher t = new Teacher("zhangsan");
		try
		{
			t.prelect();
		}
		catch (NoPlanException e)
		{
			System.out.println(e.toString());
			System.out.println("换老师讲课，或者换电脑或者放假");
		}
	}
}
