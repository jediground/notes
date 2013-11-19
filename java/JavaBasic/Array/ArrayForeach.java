class ArrayForeach 
{
	public static void main(String[] args) 
	{
		//Êı×é±éÀú
		//int[] arr = new int[3];
		int[] arr = {2,3,4,5,7,2,3};
		for(int i = 0; i < arr.length; i++)
		{
			System.out.println("arr["+i+"]="+arr[i]+";");
		}
	}

	public static void printArray(int[] arr)
	{
		for(int i=0; i<arr.length; i++)
		{
			if(i != arr.length-1)
				System.out.println(arr[i]+",");
			else
				System.out.println(arr[i]);
		}
	}
}
