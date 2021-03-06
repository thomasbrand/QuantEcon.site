<?php
	set_include_path($_SERVER['DOCUMENT_ROOT'] . '/includes');
	$page_title = 'Creating a Conda development environment';
	include ('header.php');
?>

<h1>Creating a Conda development environment</h1>

<p>One of the advantages of the Anaconda Python environment is that it is cheap to set up (and discard) Python environments for development versions of packages and populate them with your favorite scientific tools. For example, if you're working on <code>QuantEcon</code> you might find it useful to set up an environment (containing NumPy, SciPy, etc.) that uses your development version rather than the default one. This facilitates contributing to <code>QuantEcon</code> without worrying about corrupting the Python environment on which your other work depends.</p>

<p>Googling will locate plenty of tutorials on setting up Conda environments but here's a quick start. It assumes that you've already installed Anaconda</p>

<h3 id="step-1">Step 1:</h3>

<p><a href="https://help.github.com/articles/fork-a-repo">Fork and clone</a> a copy of the <code>quant-econ</code> repository on to your local machine.</p>

<h3 id="step-2">Step 2:</h3>

<p>Create a <code>conda</code> environment called <code>quantecon-dev</code> (say) by opening a terminal and typing</p>

<pre class="line-numbers"><code class="language-python">$ conda create -n quantecon-dev anaconda</code></pre>

<h3 id="step-3">Step 3:</h3>

<p>Activate the <code>quantecon-dev</code> environment:</p>

<pre class="line-numbers"><code class="language-python">$ source activate quantecon-dev</code></pre>

<h3 id="step-4">Step 4:</h3>

<p>Change into your local copy of the <code>quantecon</code> repo. For example, on a UNIX-like system, type</p>

<pre class="line-numbers"><code class="language-python">$ cd /PATH/TO/LOCAL/CLONE/</code></pre>

<h3 id="step-5">Step 5:</h3>

<p>Install your local version of quantecon. If you're at the top of the repo directory tree (where the file setup.py exists) they type</p>

<pre class="line-numbers"><code class="language-python">$ python setup.py install</code></pre>

<h2 id="other-useful-commands">Other useful commands</h2>

<p>To switch into the <code>quantecon-dev</code> Conda environment:</p>

<pre class="line-numbers"><code class="language-python">$ source activate quantecon-dev</code></pre>

<p>To shift back to your default Python environment type</p>

<pre class="line-numbers"><code class="language-python">$ source deactivate</code></pre>

<p>To delete the environ type</p>

<pre class="line-numbers"><code class="language-python">$ conda remove -n quantecon-dev --all</code></pre>

<p>To list all environments try</p>

<pre class="line-numbers"><code class="language-python">$ conda info -e</code></pre>

<?php
	include ('footer.php');
?>