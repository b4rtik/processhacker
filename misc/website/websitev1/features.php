<?php
    $title = "Features";
    include("header.php");
?>

<p>An almost complete feature list for Process Hacker 2:</p>

<h3>General</h3>
<ul>
  <li>View detailed system information and performance graphs</li>
  <li>Configure Process Hacker to alert you when new processes are started, services are 
  created, and other events</li>
</ul>

<h3>Processes</h3>
<ul>
  <li>View processes in a tree view with highlighting</li>
  <li>View detailed process statistics and performance graphs</li>
  <li>Process tooltips are detailed and show context-specific information</li>
  <li>Select multiple processes and terminate, suspend or resume them</li>
  <li>(32-bit only) Bypass almost all forms of process protection</li>
  <li>Restart processes</li>
  <li>Empty the working set of processes</li>
  <li>Set affinity, priority and virtualization</li>
  <li>Create process dumps</li>
  <li>Use over a dozen methods to terminate processes</li>
  <li>Detach processes from debuggers</li>
  <li>View process heaps</li>
  <li>View GDI handles</li>
  <li>Inject DLLs</li>
  <li>View DEP status, and even enable/disable DEP</li>
  <li>View environment variables</li>
  <li>View and edit process security descriptors</li>
  <li>View image properties such as imports and exports</li>
</ul>

<h3>Threads</h3>
<ul>
  <li>View thread start addresses and stacks with symbols</li>
  <li>Threads are highlighted if suspended, or are GUI threads</li>
  <li>Select multiple threads and terminate, suspend or resume them</li>
  <li>Force terminate threads</li>
  <li>View TEB addresses and view TEB contents</li>
  <li>(32-bit only) Find out what a thread is doing, and what objects it is waiting on</li>
  <li>View and edit thread security descriptors</li>
</ul>

<h3>Tokens</h3>
<ul>
  <li>View full token details, including user, owner, primary group, session ID, elevation status, and more</li>
  <li>View token groups</li>
  <li>View privileges and even enable, disable or remove them</li>
  <li>View and edit token security descriptors</li>
</ul>

<h3>Modules</h3>
<ul>
  <li>View modules and mapped files in one list</li>
  <li>Unload DLLs</li>
  <li>View file properties and open them in Windows Explorer</li>
</ul>

<h3>Memory</h3>
<ul>
  <li>View a virtual memory list</li>
  <li>Read and modify memory using a hex editor</li>
  <li>Dump memory to a file</li>
  <li>Free or decommit memory</li>
  <li>Scan for strings</li>
</ul>

<h3>Handles</h3>
<ul>
  <li>View process handles, complete with highlighting for attributes</li>
  <li>Search for handles (and DLLs and mapped files)</li>
  <li>Close handles</li>
  <li>(32-bit only) Set handle attributes - Protected and Inherit</li>
  <li>Granted access of handles can be viewed symbolically instead of 
  plain hex numbers</li>
  <li>View detailed object properties when supported</li>
  <li>View and edit object security descriptors</li>
</ul>

<h3>Services</h3>
<ul>
  <li>View a list of all services</li>
  <li>Create services</li>
  <li>Start, stop, pause, continue or delete services</li>
  <li>Edit service properties</li>
  <!--<li>View service dependencies and dependents</li>-->
  <li>View and edit service security descriptors</li>
</ul>

<h3>Network</h3>
<ul>
  <li>View a list of network connections</li>
  <li>Close network connections</li>
  <!--<li>Use tools such as whois, traceroute and ping</li>-->
</ul>

<?php include("footer.php"); ?>
