<?php
	set_include_path($_SERVER['DOCUMENT_ROOT'] . '/includes');
	$page_title = 'Use QE';
	include ('header.php');
?>

		
<h1>Use QE</h1>

<p>This page provides help on downloading, installing and using the QuantEcon
code libraries in each of its two flavors.  For further reading you can find examples of the
code in action in <a href="http://quant-econ.net">these lectures</a> or in our 
<a href="/notebooks/">featured notebooks</a>. </p>

<div class="tab-panel">

	<div class="tab-nav clearfix">

		<p class="visuallyhidden">Choose language:</p>
	
		<ul>
			<li class="active"><a href="#python-tab" id="python-toggle">Python instructions</a></li>
			<li><a href="#julia-tab" id="julia-toggle">Julia instructions</a></li>
		</ul>
		
	</div>
	
	<div class="tab-content">
	
		<div class="tab">
		
			<h2 class="visuallyhidden" id="python-tab">Python</h2>
			
			<h3>Installing the quantecon Python Package</h3>
			<p>The core of the QuantEcon Python code library is the Python package <code>quantecon</code>. This is a collection of programs that have been bundled together which can then be easily used in <code>python</code></p>
			<p>Assuming you have <a href="https://pypi.python.org/pypi/pip">pip</a> on your computer you can install the latest stable release of <code>quantecon</code> by typing</p>
			<pre><code>pip install quantecon</code></pre>
			<p>at a terminal prompt; Linux: <code>terminal</code>, OSX: <code>terminal</code>, and Windows: <code>powershell</code> or <code>cmd</code></p>
            <p>Once <code>quantecon</code> has been installed then it can be imported into a <code>python</code> or <code>ipython</code> session through <code>import</code>.</p>
            <pre><code>import quantecon as qe</code></pre>
            <p>You can check the version by running:</p>
            <pre><code>print qe.__version__ </code></pre>
            <p> If your version is below what's available on <a href="https://pypi.python.org/pypi/quantecon/">PyPI</a> then it is time to upgrade running:</p>
            <pre><code>pip install --upgrade quantecon</code></pre>
            <p>Further instructions can be found on <a href="http://quant-econ.net/py/getting_started.html#installing-anaconda">this page</a>.</p>

			<h3>Downloading the Repository</h3>
            <p>An alternative is to download the sourcecode of the <code>quantecon</code> package and install it manually from <a href="https://github.com/QuantEcon/QuantEcon.py/">the github repository</a>. This can be achieved by downloading a zip file directly from <a href="https://github.com/QuantEcon/QuantEcon.py/archive/master.zip">here</a> or using <code>git</code> to clone the repository to your computer. First you should browse to a location on your computer suitable for downloading the package folder and then run</p>
            <pre><code>git clone https://github.com/QuantEcon/QuantEcon.py</code></pre>
            <p>This repository contains both the <code>quantecon</code> python package, in addition to some examples as can be viewed in the <a href="https://github.com/QuantEcon/QuantEcon.py/">github code repository</a>. Once you have downloaded the source files then the package can be installed by running</p>
            <pre><code>python setup.py install</code></pre>
            <p>when at the base level of the repository folder.</p> 
            <p>If you would like to learn the basics about setting up Git see <a href="https://help.github.com/articles/set-up-git/">this link</a> is a good starting point.</p>

			<h3>Docs</h3>
			
            <p>Read the latest <a href="http://quanteconpy.readthedocs.org/en/latest/">documentation</a> for the <code>quantecon</code> package.</p>
			
		</div>

		<div class="tab">
		
			<h2 class="visuallyhidden" id="julia-tab">Julia</h2>

			<h3>Install QuantEcon.jl</h3>
						
            <p>To install the Julia QuantEcon package
            <code>QuantEcon.jl</code> start a Julia session and type</p>
            <pre><code>Pkg.add("QuantEcon")</code></pre>
            <p>This installs the <code>quantecon</code> package through the Julia package manager (via git) to the default Julia library location <code>~/.julia/QuantEcon</code>.</p>
            <p>Once installed the <code>quantecon</code> package can be used in Julia via the <code>using</code> framework such as</p>
            <pre><code>using QuantEcon</code></pre>
            <p>More detailed instructions are available at <a href="http://quant-econ.net/jl/getting_started.html">quant-econ.net</a>.</p>

			<h3>Docs</h3>

			<p>The Julia documentation is still a work in progress.  Please contact us if you'd like to help set it up.</p>
				        						
		</div>
	
	</div>
	
</div>



<?php
	include ('footer.php');
?>