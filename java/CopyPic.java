import java.io.*;
class CopyPic
{
	public static void main(String [] args) throws IOException
	{
		copyM1();
		copyM2();
	}
	public static void copyM1()
	{
		FileInputStream fis = null;
		FileOutputStream fos = null;

		try
		{
			fis = new FileInputStream("1.bmp");
			fos = new FileOutputStream("2.bmp");

			byte[] buf = new byte[1024];
			int len = 0;
			while ((len=fis.read(buf)) != -1)
			{
				fos.write(buf,0,len);
			}
		}
		catch (IOException e)
		{
			throw new RuntimeException("¸´ÖÆÎÄ¼þÊ§°Ü");
		}
		finally
		{
			try
			{
				if (fis != null)
				{
					fis.close();
				}
			}
			catch (IOException e)
			{
				throw new RuntimeException("¹Ø±Õ¶ÁÈ¡Ê§°Ü");
			}

			try
			{
				if (fos != null)
				{
					fos.close();
				}
			}
			catch (IOException e)
			{
				throw new RuntimeException("¹Ø±ÕÐ´Ê§°Ü");
			}
		}
	}
	
	public static void copyM2()
	{
		BufferedInputStream bfis  = null;
		BufferedOutputStream bfos = null;

		try
		{
			bfis = new BufferedInputStream(new FileInputStream("1.bmp"));
			bfos = new BufferedOutputStream(new FileOutputStream("2.bmp"));
			
			byte[] buf = new byte[1024];
			int len = 0;
			while ((len=bfis.read(buf,0,1024)) != -1)
			{
				bfos.write(buf,0,len);
			}
		}
		catch (IOException e)
		{
			throw new RuntimeException("¸´ÖÆÎÄ¼þÊ§°Ü");
		}
			finally
		{
			try
			{
				if (bfis != null)
				{
					bfis.close();
				}
			}
			catch (IOException e)
			{
				throw new RuntimeException("¹Ø±Õ¶ÁÈ¡Ê§°Ü");
			}

			try
			{
				if (bfos != null)
				{
					bfos.close();
				}
			}
			catch (IOException e)
			{
				throw new RuntimeException("¹Ø±ÕÐ´Ê§°Ü");
			}
		}
	}
}