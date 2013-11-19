/*
需求：数据库操作 
1.连接数据库 JDBC  Hibernate
2.操作数据库
	insert select delete update
3.关闭数据库连接
*/

/*
class UserInfoByJDBC
{
	public void addUser(User user)
	{
		//1.JDBC connect database
		//2.Add data
		//3.close connect
	}

	public void delUser(User user)
	{
		//1.JDBC connect database
		//2.Delete data
		//3.close connect
	}
}

class UserInfoByHibernate
{
	public void addUser(User user)
	{
		//1.Hibernate connect database
		//2.Add data
		//3.close connect
	}

	public void delUser(User user)
	{
		//1.Hibernate connect database
		//2.Delete data
		//3.close connect
	}
}
*/

interface UserInfoDao
{
	public void addUser(User user);
	public void delUser(User user);
}

class UserInfoByJDBC implements UserInfoDao
{
	public void addUser(User user)
	{
		//1.JDBC connect database
		//2.Add data
		//3.close connect
	}

	public void delUser(User user)
	{
		//1.JDBC connect database
		//2.Delete data
		//3.close connect
	}
}

class UserInfoByHibernate implements UserInfoDao
{
	public void addUser(User user)
	{
		//1.Hibernate connect database
		//2.Add data
		//3.close connect
	}

	public void delUser(User user)
	{
		//1.Hibernate connect database
		//2.Delete data
		//3.close connect
	}
}

class  DBOperate
{
	public static void main(String[] args) 
	{
		//UserInfoByJDBC ui = new UserInfoByJDBC();
		//UserInfoByHibernate ui = new UserInfoByHibernate();
		UserInfoDao ui = new UserInfoByJDBC();
		//UserInfoDao ui = new UserInfoByHibernate();

		ui.addUser(user);
		ui.delUser(user);
	}
}
