class  getMax
{
	public static int getMax(int[] arr)
	{
		int max = arr[0];
		for(int i=0; i<arr.length; i++)
		{
			if(arr[i] > max)
			{max = arr[i];}
		}
		return max;
	}


	public static void main(String[] args) 
	{
		int[] arr = {2,4,5,6,78,65,34,54,3};
		int max = getMax(arr);
		System.out.println("max="+max);
	}
}
