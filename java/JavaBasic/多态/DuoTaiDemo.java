/*
基础班学生：
	学习，睡觉
高级班学生：
	学习，睡觉。
可以将这两类事物进行抽取。
*/
abstract class Student
{
	public abstract void study();
	public void sleep()
	{
		System.out.println("躺着睡觉");
	}

}

class DoSomething
{
	public static void doSomething(Student s)
	{
		s.study();

		if (s instanceof BaseStudent)
		{
			BaseStudent bs = (BaseStudent)s;
			bs.sleep();
		}
		if (s instanceof AdvStudent)
		{
			AdvStudent as = (AdvStudent)s;
			as.sleep();
		}
	}
}

class BaseStudent extends Student
{
	public void study()
	{
		System.out.println("Base study");
	}
}

class AdvStudent extends Student
{
	public void study()
	{
		System.out.println("Advance study");
	}

	public void sleep()
	{
		System.out.println("趴着睡觉");
	}
}


class  DuoTaiDemo //extends DoSomething
{
	public static void main(String[] args) 
	{
		/*
		BaseStudent bs = new BaseStudent();
		bs.study();
		bs.sleep();

		AdvStudent as = new AdvStudent();
		as.study();
		as.sleep();
		*/

		// class  DuoTaiDemo extends DoSomething
		/*
		doSomething(new BaseStudent());
		doSomething(new AdvStudent());
		*/

		DoSomething ds = new DoSomething();
		ds.doSomething(new BaseStudent());
		ds.doSomething(new AdvStudent());
	}

}
