class printArray 
{

	//print array function
	public static void printArray(int[] arr)
	{
		System.out.print("[");
		for(int i=0; i<arr.length; i++)
		{
			if(i != arr.length-1)
				System.out.print(arr[i]+",");
			else
				System.out.print(arr[i]);
		}
		System.out.println("]");
	}

	public static void main(String[] args) 
	{
		int[] arr = {2,3,4,5,63,,3,4};
		printArray(arr);
		System.out.println(arr);
	}
}
