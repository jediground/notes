/*
int read() 
          读取单个字符。 
	返回：
		作为整数读取的字符，范围在 0 到 65535 之间 (0x00-0xffff)，如果		已到达流的	末尾，则返回 -1 

 int read(char[] cbuf) 
          将字符读入数组。 
		返回：
			读取的字符数，如果已到达流的末尾，则返回 -1 
		

*/

//读取一个.java文件，并打印在控制台上。
import java.io.*;

class FileReaderTest 
{
	public static void main(String[] args) throws IOException
	{
		FileReader  fr = new FileReader("DateDemo.java");

		char[] buf = new  char[1024];

		int num = 0;

		while((num=fr.read(buf))!=-1)
		{
			System.out.print(new String(buf,0,num));
		}

		fr.close();
	}

}
