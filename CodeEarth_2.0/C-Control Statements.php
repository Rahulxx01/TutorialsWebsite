<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" type="text/css" href="ContentDesign.css"> 
<link rel="stylesheet" type="text/css" href="ProgramTable.css">
</head>
<body>
<h2 align="center">Control Statement</h2>
<hr>
<h2 align="left">Definition</h2>
     <p>
         Statements in a program are normally executed one after another till the last statement.
         A control statement is a statement which is used to alter the normal flow of execution. 
     </p>
<h2 align="left">Selection statement</h2>
     <p>
         A selection statement is a control statement which allows choosing between two or more execution paths in programs. The selection statements 
         in C are the if statement, if-else statement, nested if-else statement, else-if ladder and switch statement. These statements allow us to <b></i>select</b></i>
         a particular execution path based on a boolean expression which may be true or false. It is also called a conditional statement.
     </p>
<h2 align="left">if and if-else</h2>
     <p> 
         The if-else statements iis used to carry out a logical test and then take one of two possible actions, depending on the outcome of the test. the else 
         portion of the <i> if-else </i> statement is optional. Thus in its simplest general form, the statement can be written as 
         <i> if (expression) statement </i>
         The expression must be placed in paranthesis, a shown. In this form, the statement will be executed only if the expresion has a non zero valu(<i>i.e.
         if the statement is true</i>) then the statement will be ignored.
         The statement can either be simple or compound. In practice, it is often a compound statement which may include other control statements. The general 
         form of an <i> if </i> statement which includes the <i> else </i> clause is: 
         <i> if (expression) statement 1 else statement 2 </i>
         If the expression has a non zero value (i.e., if <i>expression</i> is true), then <i>statement 1</i> will be executed. Otherwise (i.e. if <i>expression</i> is 
         is false), then <i>statement 2</i> will be executed.</p>
<h2 align="left">Consider for example</h2>
<h2>Program to check whether a given year is a leap year. Centennial years are leap years only when they are divisible by 400</h2>

<pre class="inset">
 <span class="classname">#include</span> <span class="print">&ltstdio.h&gt</span>
<span class="classname">#include</span> <span class="print">&ltconio.h&gt</span>
             
void main()
{
    int y;
     clrscr();
    printf("Enter any year:"); 
    scanf("%d",&y);
    if(y%4 == 0)
    {
        if(y%100!=0)    <span class="comment">  //  checks whether y is not centennial  </span>
            printf("%d" is a leap year\n" ,y);
        else
            if(y%400==0)   <span class="comment">  //  checks centennial year is divisible by 400  </span>
                printf("%d" is a centennial but not a leap year \n",y)
    }
	else
        printf("%d" is not a leap year \n",y);
        getch();
}
			 
</pre>

<h2 align="left">Output is:</h2>

<pre class="inset">
  Enter any year: 2012
  2012 is a leap year
        
 Enter any year: 2013
 2013 is not a leap year
             
Enter any year: 2000
 2000 is a centennial leap year
 
Enter any year: 1900
1900 is a centennial but not a leap year
     </pre>
	          
    
<h2 align="left">nested if-else and else-if ladder</h2>
     <p> 
         Nesting means <b>"One within another"</b>. It is possible to nest <i>if-else</i> statements can take.The most general form of two-layer nesting is:</p>

<pre class="inset">
if(e1)
    if(e2)
        s1
    else
         s2
 else
    if(e3)
        s3
    else
	s4
   
</pre>

         <p>where e1,e2 and e3 represent expressions, and s1,s2,s3 and s4 represent statements which can be simple or compound. In this situation, one complete
         if-else statement( if e2 s1 else s2 ) will be executed if e1 is non-zero(true), and another complete if-else statement( if e3 s3 else s4 ) will be executed
         if e1 is zero (false). It is, ofcourse, possible that s1, s2, s3 and s4 are themselves if-else statements. We would then have multilayer nesting.
         </p>
		 <h2 align="left">Consider for example:</h2>
<p>Program to print those terms of fibonacci series which are between 1 and n</p>
         
		 <pre class="inset">
             <span class="comment">  // We assume that the fibonacci series starts with 1 1  </span>
               <span class="classname">#include</span> <span class="print">&ltstdio.h&gt</span>
               <span class="classname">#include</span> <span class="print">&ltconio.h&gt</span>
               void main()
                {
                  long a=1, b=1, c;
                  int i,nl
                  clrscr();
                   printf("Enter n:");
                   scanf("%d",&n);
                   printf("Fibonacci series is as shown: \n");
                   
                     if(n==1)
                         printf("%1d %1d ",a,b);
                     else if(n>1)
                     {
                         printf("%1d %1d ",a,b);
                         c=a+b;
                         do
                         {
                         printf("%1d ",c);
                         a=b;
                         b=c;
                         c=a+b;
                         }
                     
                       while(c<=n);
                     }
                  getch();
                 }
        </pre>
		
<h2 align="left"> The output is: </h2>
     
	 <pre class="inset">
         <b>Output 1:</b>
         Enter n: 1
         Fibonacci series is as shown:
         1 1
      
         <b>Output 2:</b>
         Enter n: 3
         Fibonacci series is as shown:
         1 1 2 3
 
         <b>Output 3:</b>
         Enter n: 4
         Fibonacci series is as shown:
         1 1 2 3
     </pre>
	 

     </p>
     <p>
         In else-if ladder there is a chain of if's and the statement associated with each <i>if</i> is an </i>else</i>. This construct is mainly used when 
         multiple decisions are involved. It takes the following general form:
         <pre class="inset">
             if(expression 1)
                 statement-1
             else if(expression 2)
                 statement-2
                 ....
             else if(expression n)
                 statement-n
             else  
                 default-statement
             statement-x
         </pre>
         The conditions are evaluated from the top of the ladder downwards. As soon as a true condition is found, The statement associated with it is executed 
         and the control is transferred to statement-x thereby skipping rest of the ladder. When all the exressions are false, the default-statement is executed 
         and control is transferred to statement-x. However, this defaukt statement is optional.
     <p>
<h2 align="left">switch statement</h2>
     <p> 
         switch statement is a selection statement. It causes a particular group of statements to be chosen from several available groups. The selection is based upon the
         current value of an expression that is included within the switch statement.
         The general form is:</p>
         
		 <pre class="inset">
             <b><i>switch</b></i>(expression)
             {
                 <b><i>case</b></i> value-1;block-1
                                             <b><i>break;</b></i>
                 <b><i>case</b></i> value-2;block-2
                                             <b><i>break;</b></i>
                 ........
                 ........
                 <b><i>default:</b></i> default-block
                                             <b><i>break;</b></i>
             }
             statement-x
         </pre>
		 
     <p> Here, the expression should result to an integer or character value. each block is generally  compound statement that specifies one particular
         course of action. The break statement after each block signals the end of a particular case and causes an exit from switch statement, thereby
         transferring the control to statement-x following the switch. <i>value-1, value-2..... </i> should be an integer constants or character constants and 
         are known as case labels. When the switch is executed, the value of the expression is successively compared with values <i>value-1, value-2,....</i>
         If a case is found whose value matches the value of the expression, then the block of statements in that case is executed. After this, break terminates
         the switch and control is transferred to statement-x.
     </p>
<h2 align="left">Iteration or looping statements</h2>
     <p>
         Many programs require that a statement or a group of statements be executed repeatedly, as long as particular condition is true. This is known as
         looping or iteration. There are 3 statements which perform looping - while, do while and for.
         The while statement is a looping statement and is used to carry out looping operations. The general form of the statement is:
         <i> while(expression) statement </i>
         The included statement will be executed repetedly, as long as the value of expression is non-zero i.e.as long as expression is true. The statement can be simple
         or compound. The logical expression in while is evaluated at the beginning of each pass.
     
	 <pre class="inset">
         <span class="classname">#include</span> <span class="print">&ltstdio.h&gt</span>
         <span class="classname">#include</span> <span class="print">&ltconio.h&gt</span>
         void main()
         {
             int i,n,p,d,flag;
             clrscr();
             printf("Enter n:");
             scanf("%d",&n);
             printf("First %d prime numbers are as follows: \n",n);
             p=2;
             i=1;
             while(i<=n)
             {
                 flag=1;
                 for(d=2 ; d<=p-1 ; d++) <span class="comment"> //d<=p/2 is also correct </span>
                 if(p%d==0)               <span class="comment">  //True if number is not prime  </span>
                 {
                     flag=0;
                     break;           <span class="comment"> //Loop terminates if p is not prime  </span>
                 }
             if(flag=1)
             {
                 printf("%d",p);
                 i++;
             }
                 p++;
             }
             getch();
         }
	 
     </pre>
     </p>    
 <h2 align="left">Output is:</h2>
 <pre class="inset">
         Enter n: 13
         First 13 prime numbers are as follows:
         2 3 5 7 11 13 17 19 23 29 31 37 41
</pre>       
<h2 align="left">Jump statements</h2>
     <p>
     <ul>
     <li>break statement</li>
         
            The break statement is used to <b>terminate</b> a loop or a switch statement. It can be used within a while, do-while, for or switch statement.
            The break statement is written simply as <i>break;</i> without any embedded expressions or statements. If a break statement is included in a while,
            do-while or for loop, then contro will immediately be transferred out of loop when the break statement is encountered. In case of nested while, do-while,
            for or switch statements, the break statement terminates only the <b><i>immediately enclosing</i></b> loop or switch, but not the outer ones.
         
     <li>continue statement</li>
       
            The continue statement is used to <b><i>skip the remaining portion</i></b> of the loop. The continue statement can be included within a while, a do-whle,
            or a for statement. It is written simply as <i>continue;</i> without any embedded statements or expressions. The loop does not terminate when a continue 
            statement is encountered. Rather, the remaining loop statements are skipped and the computation proceeds directly to the next execution of the loop. 
        
     <li>goto statement</li>
         
             The goto statement is used to alter the normal sequence of program execution by transferring control to some other part of the program. In its general
             form, the <i>goto</i> statement is written as: <i>goto label;</i>
             where label is an identifier used to identify the target statement to which control will be transferred. Control may be transferred to any other statement
             within the program. To be more precise control may be transferred anywhere within the current function. The target statement must be labeled and a colon
             must follow the label. Thus the target statement will appear as <i>label:statement</i>
             Each labeled statement within the program must have a unique label i.e., no two statements can have the same label.
         
     </ul>
     </p>
<h2 align="left">Comma Operator</h2>
     <p>
         The comma operator (,) is used with the for statement. This operator permits two different expressions to appear in situations where only one expression w
         would ordinarily be used. For example, it is possible to write
         <i>for(expression 1a, expression 1b; expression 2; expression 3)statement</i>
         where expressions 1a and 1b are separated by the comma operator. These two expressions may typically initialize two separate indices that would be used 
         simultaneously within the for loop. Similarly, a statement might make its use in the following manner:
         <i>for(expression1; expression2; expression 3a, expression 3b)statement</i>
         Here expressions 3a and 3b, separated by comma operator, appear in place of usual single expression.In this application the two separate expressions
         would typically be used to alter the two different indices used simultaneously within the loop. For example, one index might count forward while the other
         counts backwards. Also a statement like:  <i>for(expression 1; expression 2; expression 3a,expression 3b)</i> statement is valid.
         However a statement like: <i>for(expression 1; expression 2a, expression 2b; expression 3)</i>statement is invalid. This is because two conditions can
         be combined using logical or(||) or logical and(&&). They cannot be combined using a comma operator.
     </p>
	 
	 <div>
<a href="C-Data input and output.php" target="iframe_content" class="button">PREV</a>
<a href="C-Functions.php" target="iframe_content" style="float:right" class="button">NEXT</a>
</div>
</body>
</html>     