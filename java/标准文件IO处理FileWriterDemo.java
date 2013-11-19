class  FileWriterDemo
{
	public static void main(String[] args) 
	{
		FileWriter fw = null;
		try
		{
			fw = new FileWriter("dem.txt");
			fw.write("this is standard io dispose method about writer file");
		}
		catch (IOException e)
		{
			System.out.println("catch:"+e.toString());
		}
		finally
		{
				try
				{
					if(fw != null)
						fw.close();
				}
				catch (IOException e)
				{
					System.out.println(e.toString());
				}
		}

	}
}
