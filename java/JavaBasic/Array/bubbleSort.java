class bubbleSort 
{
	//bubble sort
	public static void bubbleSort(int[] arr)
	{
		for(int i=0; i<arr.length-1; i++)
		{
			for(int j=0; j<arr.length-i-1; j++)
			{
				if(arr[j] > arr[j+1])
				{
					int temp = arr[j];
					arr[j] = arr[j+1];
					arr[j+1] = temp;
				}
			}
		}
	}

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
		int arr[] = {1,3,4,2,8,3,6,4,8,9};
		//排序前打印
		printArray(arr);
		bubbleSort(arr);
		//排序后打印
		printArray(arr);
	}
}
