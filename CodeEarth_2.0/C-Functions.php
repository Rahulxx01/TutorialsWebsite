<html>
<head>
 <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" type="text/css" href="ProgramTable.css">
<link rel="stylesheet" type="text/css" href="ContentDesign.css">
</head>
<body>
<h2 align="center">Functions</h2>
     <p>
         A function is a self-control program segemnt that carries out some specific task. Functions are either built-in or user-defined.Following are the 
         advantages of using functions in C program:
         <ul>
         <li><b>Avoiding reduntant (unnecessary) program</b></li>
         
             Many programs require that a particular group of statements can be executed repeatedly within a program. These programs can be placed in a function
             which can then be called whenever needed. Moreover, a different set of data can be to transferred to the function each time it is accessed.
         
         <li><b>Logical Clarity</b></li>
           
             Using functions a program can be decomposed into several functions where each function performs a well defined function. Such programs are not only easier
             to write but also easier to debug and their logical clarity is more apparent than programs whuch lack this feature.True for lengthy and complicated programs.
         
         <li><b>Customized library</b></li>
         
             The use of functions enables a programmer to build a customized library of frequently used routines where each routine performs a specific task.
             If a program requires particular function,  the corresponing library function can be accessed and attached to the program during the computation process.
     </p>    
        </ul>
<h2 align="left">Defining a function</h2>
     <p> 
         The two principal components of functions are: Function Header(the first line) and the Body of the function. The first line of function definition contains the return
         type i.e. data type of the value returned by the function. Return type is followed by the function name and then an argument list i.e. a set of arguments along
         with their data types, separated by commas and enclosed in a set of paranthesis. The return type can be omitted if the function returns an intger or a
         character. An empty pair of paranthesis must follow the function name if the function definition does not include any arguments. In general terms
         the first line can be written as, <i>type function-name(type argument 1, type argument 2,....., type argument n)</i> where type refers to the data-type of value
         returned by the function or the data-type of arguments. The remainder of the function is a compound statement, which defines the action to be taken by the function.
         It is sometimes referred to as the body of the function.<br>
         The return statement transfers:</p>
         <ul>
         <li>value</li>
         <li>control</li>
         </ul>
         <p>to the calling portion of the program. Ideally each user defined function must have atleast one return statement. If the function returns no value then we
         may simply write<br>
         <i>return;</i>
         without any expression. However the return statement is optional if the function retrns no value. Depending on the logic of the program it may contain multiple
         return statements. However, only one will be executed since the <b>function terminates</b> when the return statement executes.<br>
         There are two types of arguments namely Formal and Actual arguments. <b>Formal Arguments</b> are data which appear in the function header. they are also 
         known as parameters or formal arguments. The corresponding arguments in the function reference or function call are called actual arguments, since 
         they define the information actually being transferred. They are also known as actual parameters or arguments.<br>
         <b> The actual arguments may be expressed as constants, single variables or more complex expressions. However formal arguments cannot be expressed as such, it
             has to be a variable or an array.</b>
    </p>
<h2 align="left">Function prototype</h2>
     <p>
         The general form of function prototype using ANSI standard is:<br>
         <i>data-type function-name(type1 a1, type2 a2,.... typeN aN);</i> respectively. Function prototype must include not only the type of return value but also
         the type and number of arguments to expect. Given below is an example:</p>

<pre class="inset">
main() 
{       
    float a,b,x; 
    <b>float mul(float a, float b); /*function prototype*/</b>
    ...... 
    ...... 
    x = mul(a,b);
    ......
}
</pre>

     
     <p>
         The arguments declaration is done using the comma separator. Each argument must be independently declared with type specifier and name. That is, similar 
         type arguments cannot be combined under one type name, like variable declarations. For example:<br>
          double mul(int a, int b, double c)  <br>
         is valid , where as <br>
          double mul(int a,b, double c) <br>
         is incorrect. The use of function prototype is mandatory in C <b><i>if function call precedes function definition.</b></i> One major reason for using function
         prototype is that it enables the compiler to check for any mismatchof type and number of arguments between the function calls and the function definitions.
         This argument names(a1, a2,....,aN) used in the function declaration and function definition. In case, a function does not return anything, or it does
         not have any arguments to declare, it can be declared using void as follows:
         <i>void read(void);</i>
     </p>
<h2 align="left">Consider the following program:</h2>
     <p>Write a function t check whether a given integer is a square number or not.</p>

<pre class="inset">
<span class="classname">#include</span> <span class="print">&ltstdio.h&gt</span>
 <span class="classname">#include</span> <span class="print">&ltconio.h&gt</span>
 <span class="classname">#include</span> <span class="print">&ltmath.h&gt</span>

 int checksqaure(int n);
    void main()
    {
        int n,flag;
        clrscr();

        printf("Enter an integer:");
        scanf("%d",&n);
        flag=checksquare(n);

         if(flag==1)
			printf("%d is a square number:", n);
         else
            printf("%d" is not a square number", n);

      getch();
    }        
</pre>


<pre class="inset">
int checksquare(int n)
{
   double m;
    int a;

     m=sqrt(n);
      a=m;
                
     if(n==a*a)
       return 1;
      else
         return 0;
 }
 
 </pre>

<pre class="inset">
<h2 align="left">Output</h2>			   
 <b>Output 1</b>
Enter an integer: 16
16 is a square number
 <b>Output 2</b>
  Enter an integer: 8
 8 is not a square number
 </div>
</pre>
<h2 align="left">Recursion</h2>
     <p>
         Recursion in general is a technique in which solution to a problem is stated in terms of problem itself. In C, it is a process where a function calls itself
         repeatedly. Very often this calling itself is done with different argument(s). Moreover, this calling itself contiues till terminating condition is not reached.
         It should be understood that recursion is somewhat similar to iteration since in both the techniques a particular task is executed again and again.
         The first advantage of recursion lies in convinience. Sometimes the algorithm to be implemented can conviniently be defined recursively. For example:<br>
         factorial of any number = that number * factorial of predecessor of that number.<br>
         The terminating conition comes when factorial of zero is to be calculated which is by definition equal to 1. Using this logic the function for the calculation
         of factorial of an integer can very conviniently be written recursively. Hence, it is advantageous to use recursion for repetitive computations in which
         each action is stated in terms of a previous result. The disadvantage of recursion is that it takes  relatively more time and memory. In general, the non-
         recursive alternative of a recursive program is more eficient in terms of execution time and memory space. In a recursive version, extra time is spent
         in switching over from one function to another. Moreover, every time a function is called, time and memory is spent on memory allocation of ocal variables for that
         function. Hence, one should opt for recursion if convinience is an important factor then one should go for the iteration.
     </p>

<h2 align="left">Consider the following program for example:</h2>
    <p>Use Recursive function to find value of m raised to n where m is a real number and n is an integer greater than or equal to zero</p>

<pre class="inset">
  <span class="classname">#include</span> <span class="print">&ltstdio.h&gt</span>
<span class="classname">#include</span> <span class="print">&ltconio.h&gt</span>

 float power(float m, int n)
 {
	 if(n==0)
      return 1;
	else  
        return (m * power(m,n-1));
 }
void main()
{
	float m;  
	int n;
	clrscr();
	 printf("Enter m and n");
	scanf("%f%d", &m,&n);
				 
	printf("m raise to n= %f",power(m,n));
	getch();
 }			 
</pre>



<pre class="inset">
<h2 align="left">Output</h2>
Enter m and n: 2.5   3
m raise to n = 15.625000
</pre>
 <div>
<a href="C-Control Statements.php" target="iframe_content" class="button">PREV</a>
<a href="C-Scope Of Variable.php" target="iframe_content" style="float:right" class="button">NEXT</a>
</div>
     
</body>
</html>