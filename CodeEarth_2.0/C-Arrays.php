<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" type="text/css" href="ProgramTable.css">
<link rel="stylesheet" type="text/css" href="ContentDesign.css">
</head>

<body>
<h1 align="center">Arrays</h1>
<hr>
<h2 align="left">Single Dimension Arrays</h2>
<p>
     An array is a variable that refers to a collection of data items which all have the same name. The restriction is that all elements in an array must be of
	 the same data type. In other words, an array is simply a collection of elements of same data type.<br>
	 A <b>subscript</b> is an integer value/constant whose values refers to an individual array element. In other words, it is the subscript which distinguishes 
     the individual array elements from one another. If a one-dimensional array contains n-elements, the subscript will be an integer quantity ranging from <i>0 to n-1</i>
     Suppose that x is a 10- element array. The first element is referred to as x[0], the second as x[1] and so on. The last element will be x[9]. The subscript 
     associated with each element is shown in the aquare brackets. Thus the subscript for the element is 0, for the second element it is 1 and so on. A subscript can also
     be a variable. Hence x[0] can also be referred to as x[i] where i=0.<br>
</p>
     <h2>Defining or Declaring</h2>
<p>
     Arrays are defined in much the same manner as ordinary variables, except that each array name must b accompanied by a size specification. For a one-dimensional array
     the size is enclosed in square brackets. Size is usually written as a positive integer constant and sometimes as a symbolic constant. In general terms, a one dimensional array
     definition may be expressed as <br>
     <i>storage-class data-type array-name[size];</i> <br>
     where storage-class refers to the storage class of the array, data type is the type of data, array name is the name of the array and the size indicates the maximum
     number of elements the array can store. The storage-class is optional; default values are automatic for arrays defined within a function or a block, and external
     for arrays defined outside of a function.<br>
     Consider for example:</p><br>

<pre class="inset">
 #define size 10- 
 int x[size];
</pre>

 <p> where <i>size</i> is a symbolic constant having a value of 10.	 <br>
	 The initial values must appear in the order in which they will be assigned to the individual array elements, enclosed in braces and separated by commas.<br>
	 The general form is:<br>
	 <i>storage-class data-type array-name[size]={value 1, value 2,...., value n};
	 where value 1 refers to the value of the first element, value 2 refers to the value of the second element and so on. The appeareance of the size, which indicates
     the number of array elements, is <b></i>optional when initial values are present</i></b> it is not necessary to assign explicit initial values to all the elements
     of an array. Those <b>remaining</b> array elements that are not assigned explicit initial values are automatically initialized to 0.</p>

<h2 align="left">Processing</h2>
<p>
     Single operations involving <b>entire</b> arrays are not permitted in C. Thus, if a and b are similar arrays assignment operation, comparison operation or any 
     other operation must be carried out on an <b>element-by-element basis</b> Hence a statement like a=b; is invalid. The technique is to use a loop, where each pass
     through the loop is used to process one element  in array. Hence the number of passes through the loop is equal to the array elements to be processed. For example
     we may write : <i> for(i=0;i<10;i++)<br>
                         a[i]=b[i]; </i> <br>
     Thus, an entire array cannot be processed with single instructions without repetition.
</p>
<h2 align="left">Passing Single dimension array to function</h2>
<p>
     An array can be passed as an argument to a function. To pass an array to a function the array name must appear by itself as an actual argument within the function 
     call. The array name in the function call should <b>NOT</b> be followed by any brackets or subscripts. When declaring a one-dimensional array as a formal argument
     in the function's first line, the array name is written with a pair of empty sqaure brackets. The size of the array is <b>not</b> specified within the formal argument
     declaration. In the case of function prototypes, an empty pair of square brackets must follow the name of each array argument. The return statement cannot be used to return an array.
     The <i>return</i> statement can return only a <b>single-valued</b> expression to the calling  portion of the program. However, returning an array is not required in ost of the cases.
     This is because changes done to an array inside the function are permanent and will be reflected eve in the calling portion.<br>
     Consider the following program for example:<br>
     <b>Program to find the largest, second largest and smallest element in an array of integers.</b> </p>

<pre class="inset">
<span class="classname">#include</span> <span class="print">&ltstdio.h&gt</span>
void sort(int x[] , int n);
         
void main()
{
	int i,n,x[50];
	printf("Enter the number of elements:");
    scanf("%d",&n);
    printf("Enter the elements: \n");
    for(i=0 ; i&ltn ; i++)
       scanf("%d" , &x[i]);
    sort(x,n) ;
   <span class="comment">   // At this stage, array is sorted in descending array  </span>
 
    printf("largest element is %d\n" , x[0]);
    printf("Second largest element is %d\n" , x[1]);
	printf("Smallest element is %d\n" , x[n-1]);
}
void sort(int x[] , int n)
{
    int i , j , temp;
    for(i=0 ; i	&ltn-1 ; i++)
		for(j=0 ; j&ltn-1 ; j++)
			if(x[j] &lt x[j+1])
			{
				temp=x[j];
				x[j]=x[j+1];
				x[j+1]=temp;
			}
}
</pre>


<pre class="inset">	 
<h2 align="left">output</h2>
Enter the number of elements: 7 <br>
Enter the elements:<br>
4 2 8 6 1 5 7<br>
Largest element is 8<br>
Second largest element is 7<br>
Smallest element is 1<br>
</pre>

</p>
<h2 align="left">Multidimensional Arrays</h2>
<p>
     Multidimensional arrays are defined in much the same manner as one dimensional arrays, except that a separate pair of square brackets is required for each subscript.
     Thus, a two dimensional array will require two pairs of square brackets, a three dimensional array requires three pairs of square brackets, and so on. In general
     terms, a multidimensional array definition can be written as:<br>
     <i>storage-class data-type array [expression 1][expression 2]....[expression n]</i> <br>
     In the above definition, storage-class refers to the storage class to the array, data type is the data type, array is the array name, and expression 1, expression 2,....
     ,....,expression n are positive valued integer expressions that indicte the number of array elements associated with each subscript. The storage class is optional. 
     The storage class is automatic for arrays that are defined inside a function and external for arrays defined outside a function. when a multidimensional array is passed to a function,
     the formal argument declarations within the function definition must include explicit size specifications in all of the subscript positions <b>except for the file</b>
     These specifications must be consistent with the corresponding size specifications in the calling program. The first subscript position must be written as an
     empty pair of square brackets, as with a one dimensional array. The corresponding function prototypes must be written in same manner.<br>
	 Consider the following program for example.</p>
<b>Program to find sum and difference of two matrices.</b>

<pre class="inset">
<span class="classname">#include</span> <span class="print">&ltstdio.h&gt</span>
<span class="classname">#include</span> <span class="print">&ltconio.h&gt</span>
			 
void read(int x[][10] , int nr , int nc);
void sumdiff(int a[][10] , int b[][10] , int s[][10] , int d[][10] , int nr , int nc) ;
void show(int y[][10] , int nr , int nc) ;

void main()
{ 
	int a[10[10] , b[10][10] , s[10][10] , d[10][10] , nra , nca , nrb , ncb ;
	clrscr();
			 
	printf("Enter the number of rows and columns of first matrix: ");
	scanf("%d %d",&nra , &nca);
			 
	printf("Enter the number of rows and columns of second maatrix: ");
	scanf("%d %d", &nrb, &ncb);
  			 
	if(nra==nrb && nca==ncb)
	{
		printf("Enter elements of first matrix: \n");
		read(a,nra,nca) ;
			 
		printf("Enter elements of second matrix: \n");
		read(b,nrb,ncb) ;
			 
		sumdiff(a,b,s,d,nra,nca);
		printf("Result of matrix addition is:\n");
		show(s,nra,nca);
		printf("Result of matrix subtraction is: \n");
		show(d,nra,nca) ;
	}
	else
		printf("Matrix addition and subtraction is not possible.");
				 
		getch();
	}

	void read(int x[][10] , int nr , int nc)
    {
		int r,c ;
		for(r=0 ; r&ltnr ; r++)
			for(c=0 ; c&ltnc ; c++)
				 scanf("%d" , &x[r][c]);
	}
    void sumdiff(int a[][10] , int b[][10] , int s[][10] , int d[][10] , int nr , int nc)
    {
		int r,c;
		for(r=0 ; r&ltnr ; r++)
			for(c=0 ; c&ltnr ; c++)
			{
			    s[r][c]=a[r][c]+b[r][c] ; 
				d[r][c]=a[r][c]-b[r][c] ; 
			}
	}
 
    void show(int y[][10] , int nr , int nc)
    {
		int r , c;
		for(r=0 ; r&ltnr ; r++)
		{
			for(c=0 ; c&ltnc ; c++)
				printf("%d", y[r][c]);
				printf("\n") ; 
		}
	}
 </pre>

		 

		 
<h2 align="left">Output 1</h2>
<pre class="inset"> 
Enter the number of rows and columns of first matrix: 2 2
Enter the number of rows and columns of second matrix: 2 2
Enter elements of first matrix:
2 4
5 7
Enter elements of second matrix:
1 2
4 3
Result of matrix addition is:
3 6
9 10
Result of matrix subtraction is:
1 2
1 4
		 
<h2 align="left">Output 2</h2>
		
Enter the number of rows and columns of first matrix: 2 3
Enter the number of rows and columns of second matrix: 2 4
 Matrix addition and subtraction not pssible.
</pre>

	
<h2 align="left">Strings</h2>
<p>
     A string is simply a single dimensional array of characters. A string can be declared by writing a statement like <br>
	 <i>char str[20];</i>
	 This statement creates a string str which can store mximum of 20 characters. A string can be initialized by writing statement like<br>
	 <i>char str[4]="red";</i>
	 Now str[0]='r' , str[1]='e' , str[2]='d' and str[3]='\0' . The compiler inserts the null character (\0) at the end of the string automatically whenever a string
	 is read or initialized. The statement given above can also be written as <br>
	 <i>char str[]="red";</i>
	 although the following is invalid<br>
	 <i>char str[]="red";</i>
	 This is because now there is no space left for insertion of null character.<br>
	 <b>Library functions</b><br>
	 <ul>
	     <li>strlen()function:</li>
		 
		     This function counts and returns the number of characters in a string. Its general format is:<br>
			 <i>n=strlen(string);</i>
			 Here n is an integer variable which receives the length of the string. The argument may be a string constant or a string variable. The counting
			 ends at the null character.
		 
		 <li>strcpy()function:</li>
		 
		     The strcpy function works almost like an assignmengt operator. It takes the form<br>
			 <i>strcpy(string1, string2);</i>
			 and assigns the contents of string2 to string1. string2 may be a string variable or a string constant. however, string1 <b>must be a string variable</b>
			 For example, the statement          <i>strcpy(city,"DELHI");</i>
			 will assign the string "DELHI" to the string variable <i>city.</i> However, a statement like<br>
			 <i>strcpy("DELHI",city);</i> is invalid since the first argument has to be a variable.<br>
			 The statement                       <i>strcpy(city1, city2);</i>
			 will assign the contents of the string variable <i>city2</i> to string variable <i>city1.</i> The size of the array <i>city1</i> should be large enough to receives
             the contents of <i>city2.</i>
         
         <li>strcat()</li>
         
             The strcat function joins two strings together. It takes the following form:<br>
             <i>strcat(string1, string2);</i>
             where <b>string1 should be a string varaiable.</b> and string2 can be a string variable or a string constant. When the function <i>strcat</i> is executed,
			 <i>string2</i> is appended to <i>string1.</i> It does so by removing the null character at the end of <i>string1</i> and placing <i>string2</i> from there. The string at
			 <i>string2</i> remains unchanged. We must make sure that the sie of <i>string1</i> (to which <i>string2</i> is appended) is large enough to accommodate string.
             C permits nesting of strcat functions. For example: <br>
             <i>strcat (strcat(string1, string2), string3);</i>
             is allowed and concatenates all three strings together. The resultant string is stored in <i>string1</i>
         
         <li>strcmp()</li>
        
             The <i>strcmp</i> function compares two strings and returns 0 if they are equal. If they are not equal, it returns the difference in ASCII values of first non-matching
             characters in the strings. It takes the form:<br>
             <i>strcmp(string1, string2);</i>
             <b>string1 and string2 may be string variables or string constants</b></p>
			 </ul>

<pre class="inset">
 Examples:
 <i>strcmp(name1, name2);
strcmp(name1, "John");
strcmp("John", name1);
strcmp("Rom", "Ram");
</i>
				
Thus strcmp(s1,s2)=0 , if s1=s2
&lt0 , if s1&lts2
&gt0 , if s1&gts2
</pre>
			
<p>C also supports a function called <i>strcmpi()</i> which is exactly same as </i>strcmp()</i> the only difference being that <i>strcmpi()</i> is not case
sensitive. for example, 
<i>strcmpi("new" , "New") = 0
However strcmp("new" , "New") will result into a non-zero value.</p>
	    
	
	<p>Consider the following program for example:<br></p>
	<h2>Program to count frequency of a given character in a string</h2>

<pre class="inset">
<span class="classname">#include</span> <span class="print">&ltstdio.h&gt</span>
<span class="classname">#include</span> <span class="print">&ltconio.h&gt</span>
		 
void main()
{
	char str[50] , x;
	int i , count=0;
	clrscr();
		  
	printf("Enter a string: ");
	gets(str) ;
		  
	printf("Enter a character: ");
	x=getchar();
		  
	for(i=0 ; str[i]!='\0' ; i++)
		 if(str[i]==x)
			 count++;
				 
		 printf("Frequency of%c in %s is %d", x , str , count) ;
			 
	getch();
}
</pre>

	 
<h2 align="left">Output</h2>
<pre class="inset">
Enter a string: Programming <br>
Enter a character: m <br>
Frequency of m in programming is 20
</pre>

<div>
<a href="C-Scope Of Variable.php" target="iframe_content" class="button">PREV</a>
<a href="C-Pointers.php" target="iframe_content" style="float:right" class="button">NEXT</a>
</div>
	     
</body>
</html>
		 