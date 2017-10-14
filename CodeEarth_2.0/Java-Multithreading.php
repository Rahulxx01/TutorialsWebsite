<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" type="text/css" href="ProgramTable.css">
<link rel="stylesheet" type="text/css" href="ContentDesign.css">
</head>

<body>
<h1 align="center">Java - Multithreading</h1>
<hr> 

<p>Java is amulti threaded programming language which means we can develop multi threaded program using Java. 
A multi threaded program contains two or more parts that can run concurrently and each part can handle different 
task at the same time making optimal use of the available resources specially when your computer has multiple CPUs.</p>

<p>By definition multitasking is when multiple processes share common processing resources such as a CPU. 
Multi threading extends the idea of multitasking into applications where you can subdivide specific operations 
within a single application into individual threads. Each of the threads can run in parallel. The OS divides
 processing time not only among different applications, but also among each thread within an application.</p>

<p>Multi threading enables you to write in a way where multiple activities can proceed concurrently in the same program.</p>

<h2>Life Cycle of a Thread:</h2>
<p>A thread goes through various stages in its life cycle. For example, a thread is born, started, runs, 
and then dies. Following diagram shows complete life cycle of a thread.</p>

<img src="MultithreadingImg.png"></img>

<p>Above-mentioned stages are explained here:</p>
<ul>
	<li>New: A new thread begins its life cycle in the new state. It remains in this state until the program starts the thread. It is also referred to as a born thread.</li>

	<li>Runnable: After a newly born thread is started, the thread becomes runnable. A thread in this state is considered to be executing its task.</li>

	<li>Waiting: Sometimes, a thread transitions to the waiting state while the thread waits for another thread to perform a task.
	<li>A thread transitions back to the runnable state only when another thread signals the waiting thread to continue executing.</li>

	<li>Timed waiting: A runnable thread can enter the timed waiting state for a specified interval of time. 
	A thread in this state transitions back to the runnable state when that time interval expires or when the event it is waiting for occurs.</li>

	<li>Terminated ( Dead ): A runnable thread enters the terminated state when it completes its task or otherwise terminates.</li>
</ul>
<h2>Thread Priorities:</h2>
<p>Every Java thread has a priority that helps the operating system determine the order in which threads are scheduled.</p>

<p>Java thread priorities are in the range between MIN_PRIORITY (a constant of 1) and MAX_PRIORITY (a constant of 10). 
By default, every thread is given priority NORM_PRIORITY (a constant of 5).</p>

<p>Threads with higher priority are more important to a program and should be allocated processor time before lower-priority threads.
 However, thread priorities cannot guarantee the order in which threads execute and very much platform dependent.</p>

<h2>Create Thread by Implementing Runnable Interface:</h2>
<p>If your class is intended to be executed as a thread then you can achieve this by implementing <b>Runnable</b> interface. You will need to follow three basic steps:</p>

<h2>Step 1:</h2>
<p>As a first step you need to implement a run() method provided by Runnable interface. This method provides entry point 
for the thread and you will put you complete business logic inside this method. Following is simple syntax of run() method:</p>


<pre class="inset">
<span class="classn">public void</span> run( )
</pre>


<h2>Step 2:</h2>
<p>At second step you will instantiate a <b>Thread</b> object using the following constructor:</p>


<pre class="inset">
<span class="classname">Thread</span>(<span class="classname">Runnable</span> threadObj, <span class="classname">String</span> threadName);
</pre>


<p>Where, threadObj is an instance of a class that implements the <b>Runnable</b> interface and <b>threadName</b> is the name given to the new thread.</p>

<h2>Step 3</h2>
<p>Once Thread object is created, you can start it by calling <b>start( )</b> method, which executes a call to run( ) method. Following is simple syntax of start() method:</p>

 
<pre class="inset">
<span class="classn">void</span> start( );
</pre>


<h2>Example:</h2>
<p>Here is an example that creates a new thread and starts it running:</p>


<pre class="inset">
<span class="classn">class</span> <span class="classname">RunnableDemo</span> <span class="classn">implements</span> <span class="classname">Runnable</span> {
   <span class="classn">private</span> <span class="classname">Thread</span> t;
   <span class="classn">private</span> <span class="classname">String</span> threadName;
   
   <span class="classname">RunnableDemo</span>( <span class="classname">String</span> name){
       threadName = name;
       System.<span class="classn">out</span>.println(<span class="print">"Creating "</span> +  threadName );
   }
   <span class="classn">public void</span> run() {
      <span class="classname">System</span>.<span class="classn">out</span>.println(<span class="print">"Running "</span> +  threadName );
      <span class="classn">try</span> {
         <span class="classn">for</span>(<span class="classn">int</span> i = 4; i > 0; i--) {
            <span class="classname">System</span>.<span class="classn">out</span>.println(<span class="print">"Thread: "</span> + threadName + ", " + i);
            <span class="comment">// Let the thread sleep for a while.</span>
            <span class="classname">Thread</span>.sleep(50);
         }
     } <span class="classn">catch</span> (<span class="classname">InterruptedException</span> e) {
         <span class="classname">System</span>.<span class="classn">out</span>.println(<span class="print">"Thread "</span> +  threadName + <span class="print">" interrupted."</span>);
     }
     <span class="classname">System</span>.<span class="classn">out</span>.println(<span class="print">"Thread "</span> +  threadName + <span class="print">" exiting."</span>);
   }
   
   <span class="classn">public void</span> start ()
   {
      <span class="classname">System</span>.<span class="classn">out</span>.println(<span class="print">"Starting "</span> +  threadName );
      <span class="classn">if</span> (t == null)
      {
         t = <span class="classn">new</span> Thread (this, threadName);
         t.start ();
      }
   }

}

<span class="classn">public class</span> <span class="classname">TestThread</span> {
   <span class="classn">public static void</span> main(<span class="classname">String</span> args[]) {
   
      <span class="classname">RunnableDemo</span> R1 = <span class="classn">new</span> <span class="classname">RunnableDemo</span>( <span class="print">"Thread-1"</span>);
      R1.start();
      
      <span class="classname">RunnableDemo</span> R2 = <span class="classn">new</span> <span class="classname">RunnableDemo</span>( <span class="print">"Thread-2"</span>);
      R2.start();
   }   
}
</pre>


<p>This would produce the following result:</p>


<pre class="inset">
<span class="classname">Creating Thread</span>-1
<span class="classname">Starting Thread</span>-1
<span class="classname">Creating Thread</span>-2
<span class="classname">Starting Thread</span>-2
<span class="classname">Running Thread</span>-1
<span class="classname">Thread: Thread</span>-1, 4
<span class="classname">Running Thread</span>-2
<span class="classname">Thread: Thread</span>-2, 4
<span class="classname">Thread: Thread</span>-1, 3
<span class="classname">Thread: Thread</span>-2, 3
<span class="classname">Thread: Thread</span>-1, 2
<span class="classname">Thread: Thread</span>-2, 2
<span class="classname">Thread: Thread</span>-1, 1
<span class="classname">Thread: Thread</span>-2, 1
<span class="classname">Thread Thread</span>-1 exiting.
<span class="classname">Thread Thread</span>-2 exiting.
</pre>
</div>

<h2>Create Thread by Extending Thread Class:</h2>
<p>The second way to create a thread is to create a new class that extends <b>Thread</b> class using the following two simple steps. 
This approach provides more flexibility in handling multiple threads created using available methods in Thread class.</p>

<h2>Step 1</h2>
<p>You will need to override <b>run( )</b> method available in Thread class. This method provides entry point for
 the thread and you will put you complete business logic inside this method. Following is simple syntax of run() method:</p>

 
<pre class="inset">
<span class="classn">public void</span> run( )
</pre>


<h2>Step 2</h2>
<p>Once Thread object is created, you can start it by calling start( ) method, which executes a call to run( ) method. 
Following is simple syntax of start() method:</p>


<pre class="inset">
<span class="classn">void</span> start( );
</pre>


<h2>Example:</h2>
<p>Here is the preceding program rewritten to extend Thread:</p>


<pre class="inset">
<span class="classn">class</span> <span class="classname">ThreadDemo</span> <span class="classn">extends</span> <span class="classname">Thread</span> {
   <span class="classn">private</span> <span class="classname">Thread</span> t;
   <span class="classn">private</span> <span class="classname">String</span> threadName;
   
   <span class="classname">ThreadDemo</span>( <span class="classname">String</span> name){
       threadName = name;
       <span class="classname">System</span>.<span class="classn">out</span>.println(<span class="print">"Creating "</span> +  threadName );
   }
   <span class="classn">public void</span> run() {
      <span class="classname">System</span>.<span class="classn">out</span>.println(<span class="print">"Running "</span> +  threadName );
      <span class="classn">try</span> {
         <span class="classn">for</span>(<span class="classn">int</span> i = 4; i > 0; i--) {
            <span class="classname">System</span>.<span class="classn">out</span>.println(<span class="print">"Thread: "</span> + threadName + ", " + i);
            <span class="comment">// Let the thread sleep for a while.</span>
            <span class="classname">Thread</span>.sleep(50);
         }
     } <span class="classn">catch</span> (<span class="classname">InterruptedException</span> e) {
         System.<span class="classn">out</span>.println(<span class="print">"Thread "</span> +  threadName + <span class="print">" interrupted."</span>);
     }
     System.<span class="classn">out</span>.println(<span class="print">"Thread "</span> +  threadName + <span class="print">" exiting."</span>);
   }
   
   <span class="classn">public void</span> start ()
   {
      System.<span class="classn">out</span>.println(<span class="print">"Starting " </span>+  threadName );
      <span class="classn">if</span> (t == null)
      {
         t = <span class="classn">new</span> Thread (<span class="classn">this</span>, threadName);
         t.start ();
      }
   }

}

<span class="classn">public class</span> TestThread {
   <span class="classn">public static void</span> main(<span class="classname">String</span> args[]) {
   
      <span class="classname">ThreadDemo</span> T1 = <span class="classn">new</span> <span class="classname">ThreadDemo</span>( <span class="print">"Thread-1"</span>);
      T1.start();
      
      <span class="classname">ThreadDemo</span> T2 = <span class="classn">new</span> <span class="classname">ThreadDemo</span>( <span class="print">"Thread-2"</span>);
      T2.start();
   }   
}
</pre>

<p>This would produce the following result:</p>


<pre class="inset">
<span class="classname">Creating Thread</span>-1
<span class="classname">Starting Thread</span>-1
<span class="classname">Creating Thread</span>-2
<span class="classname">Starting Thread</span>-2
<span class="classname">Running Thread</span>-1
<span class="classname">Thread: Thread</span>-1, 4
<span class="classname">Running Thread</span>-2
<span class="classname">Thread: Thread</span>-2, 4
<span class="classname">Thread: Thread</span>-1, 3
<span class="classname">Thread: Thread</span>-2, 3
<span class="classname">Thread: Thread</span>-1, 2
<span class="classname">Thread: Thread</span>-2, 2
<span class="classname">Thread: Thread</span>-1, 1
<span class="classname">Thread: Thread</span>-2, 1
<span class="classname">Thread Thread</span>-1 exiting.
<span class="classname">Thread Thread</span>-2 exiting.
</pre>


<p>The previous methods are invoked on a particular Thread object. The following methods in the Thread class are static.
 Invoking one of the static methods performs the operation on the currently running thread.</p>


<h2>Example:</h2>
<p>The following ThreadClassDemo program demonstrates some of these methods of the Thread class. Consider a class <b>DisplayMessage</b> which implements <b>Runnable:</b></p>


<pre class="inset">
<span class="comment">// File Name : DisplayMessage.java
// Create a thread to implement Runnable</span>
<span class="classn">public class</span> <span class="classname">DisplayMessage</span> <span class="classn">implements</span> <span class="classname">Runnable</span>
{
   <span class="classn">private String</span> message;
   <span class="classn">public</span> <span class="classname">DisplayMessage</span>(String message)
   {
      <span class="classn">this</span>.message = message;
   }
   <span class="classn">public void</span> run()
   {
      <span class="classn">while</span>(<span class="classn">true</span>)
      {
         <span class="classname">System</span>.<span class="classn">out</span>.println(message);
      }
   }
}
</pre>


<p>Following is another class which extends Thread class:</p>


<pre class="inset">
<span class="comment">// File Name : GuessANumber.java
// Create a thread to extentd Thread</span>
<span class="classn">public class</span> <span class="classname">GuessANumber</span> <span class="classn">extends</span> <span class="classname">Thread</span>
{
   <span class="classn">private int</span> number;
   <span class="classn">public</span> <span class="classname">GuessANumber</span>(<span class="classn">int</span> number)
   {
      <span class="classn">this</span>.number = number;
   }
   <span class="classn">public void</span> run()
   {
      int counter = 0;
      int guess = 0;
      <span class="classn">do</span>
      {
          guess = (<span class="classn">int</span>) (Math.random() * 100 + 1);
          <span class="classname">System</span>.out.println(<span class="classn">this</span>.getName()
                       + <span class="print">" guesses "</span> + guess);
          counter++;
      }<span class="classn">while</span>(guess != number);
      <span class="classname">System</span>.<span class="classn">out</span>.println(<span class="print">"** Correct! "</span> + <span class="classn">this</span>.getName()
                       + <span class="print">" in "</span> + counter + <span class="print">" guesses.**"</span>);
   }
}
</pre>

<p>Following is the main program which makes use of above defined classes:</p>


<pre class="inset">
<span class="comment">// File Name : ThreadClassDemo.java</span>
<span class="classn">public class</span> ThreadClassDemo
{
   <span class="classn">public static void</span> main(<span class="classname">String</span> [] args)
   {
      <span class="classname">Runnable</span> hello = <span class="classn">new</span> <span class="classname">DisplayMessage</span>(<span class="print">"Hello"</span>);
      <span class="classname">Thread</span> thread1 = <span class="classn">new</span> <span class="classname">Thread</span>(hello);
      thread1.setDaemon(true);
      thread1.setName(<span class="print">"hello"</span>);
      <span class="classname">System</span>.<span class="classn">out</span>.println(<span class="print">"Starting hello thread..."</span>);
      thread1.start();
      
      <span class="classname">Runnable</span> bye = <span class="classn">new</span> <span class="classname">DisplayMessage</span>(<span class="print">"Goodbye"</span>);
      <span class="classname">Thread</span> thread2 = <span class="classn">new</span> <span class="classname">Thread</span>(bye);
      thread2.setPriority(Thread.MIN_PRIORITY);
      thread2.setDaemon(true);
      <span class="classname">System</span>.<span class="classn">out</span>.println(<span class="print">"Starting goodbye thread..."</span>);
      thread2.start();

      <span class="classname">System</span>.<span class="classn">out</span>.println(<span class="print">"Starting thread3..."</span>);
      <span class="classname">Thread</span> thread3 = new <span class="classname">GuessANumber</span>(27);
      thread3.start();
      <span class="classn">try</span>
      {
         thread3.join();
      }<span class="classn">catch</span>(<span class="classname">InterruptedException</span> e)
      {
         <span class="classname">System</span>.<span class="classn">out</span>.println(<span class="print">"Thread interrupted."</span>);
      }
      <span class="classname">System</span>.<span class="classn">out</span>.println(<span class="print">"Starting thread4..."</span>);
      <span class="classname">Thread</span> thread4 = <span class="classn">new</span> <span class="classname">GuessANumber</span>(75);
      
	  thread4.start();
      <span class="classname">System</span>.<span class="classn">out</span>.println(<span class="print">"main() is ending..."</span>);
   }
}
</pre>


<p>This would produce the following result. You can try this example again and again and you would get different result every time.</p>


<pre class="inset">
<span class="classname">Starting</span> hello thread...
<span class="classname">Starting</span> goodbye thread...
<span class="classname">Hello</span>
<span class="classname">Hello</span>
<span class="classname">Hello</span>
<span class="classname">Hello</span>
<span class="classname">Hello</span>
<span class="classname">Hello</span>
<span class="classname">Goodbye</span>
<span class="classname">Goodbye</span>
<span class="classname">Goodbye</span>
<span class="classname">Goodbye</span>
<span class="classname">Goodbye</span>
....... 
</pre>


<div>
<a href="Java-Inheritance.php" target="iframe_content" class="button">PREV</a>
<a href="Java-Overriding.php" target="iframe_content" style="float:right" class="button">NEXT</a>
</div>
 
</body>
</html>