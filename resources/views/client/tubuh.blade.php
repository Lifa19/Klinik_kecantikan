
 @extends('sb-client/app')
 @section('content')
   <section id="subintro">
    <div class="jumbotron subhead" id="overview">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="centered">
              <h3>Treatment Tubuh</h3>
              <p>
                Treatment Tubuh
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="container">
    <!-- Docs nav
    ================================================== -->
    <div class="row">
      <div class="span3 bs-docs-sidebar">
        <ul class="nav nav-list bs-docs-sidenav">
          <li><a href="#Face-Basic"><i class="icon-chevron-right"></i> Facial Basic</a></li>
          <li><a href="#file-structure"><i class="icon-chevron-right"></i>File structure</a></li>
          <li><a href="#contents"><i class="icon-chevron-right"></i> What's included</a></li>
          <li><a href="#html-template"><i class="icon-chevron-right"></i> HTML template</a></li>
          <li><a href="#what-next"><i class="icon-chevron-right"></i> What next?</a></li>
        </ul>
      </div>
      <div class="span9">
        <!-- Download
        ================================================== -->
        <section id="Face-Basic" class="doc">
          <div class="page-header">
            <h3>Facial Basic</h3>
          </div>
          <p>
            Facial wajah umum dilakukan sebagai salah satu cara untuk membersihkan wajah,
            mengurangi penyumbatan pori-pori kulit akibat komedo dan jerawat, meremajakan kulit wajah,
            serta membuat kulit wajah tampak lebih bersih, segar, dan awet muda.
          </p>
        </section>

        <!-- Contents
        ================================================== -->
        <section id="contents" class="doc">
          <div class="page-header">
            <h3>What's included</h3>
          </div>
          <p>
            Serenity template comes equipped with HTML, CSS, and JS for all sorts of things also some PSD elements with template documentation to guide you when use this template. Otherwise all things already summarized with a handful of categories visible at the
            top of the <a href="overview.html">Serenity overview</a>.
          </p>
          <h5>Bootstrap and Serenity overview</h5>
          <h6><a href="scaffolding.html">Scaffolding</a></h6>
          <p>
            Global styles for the body to reset type and background, link styles, grid system, and two simple layouts.
          </p>
          <h6><a href="base-css.html">Base CSS</a></h6>
          <p>
            Styles for common HTML elements like typography, code, tables, forms, and buttons. Also includes <a href="http://glyphicons.com">Glyphicons</a>, a great little icon set.
          </p>
          <h6><a href="components.html">Components</a></h6>
          <p>
            Basic styles for common interface components like tabs and pills, navbar, alerts, page headers, and more.
          </p>
          <h6><a href="javascript.html">JavaScript plugins</a></h6>
          <p>
            Similar to Components, these JavaScript plugins are interactive components for things like tooltips, popovers, modals, and more.
          </p>
          <h5>List of components</h5>
          <p>
            Together, the <strong>Components</strong> and <strong>JavaScript plugins</strong> sections provide the following interface elements:
          </p>
          <ul>
            <li>Button groups</li>
            <li>Button dropdowns</li>
            <li>Navigational tabs, pills, and lists</li>
            <li>Navbar</li>
            <li>Labels</li>
            <li>Badges</li>
            <li>Page headers and hero unit</li>
            <li>Thumbnails</li>
            <li>Alerts</li>
            <li>Progress bars</li>
            <li>Modals</li>
            <li>Dropdowns</li>
            <li>Tooltips</li>
            <li>Popovers</li>
            <li>Accordion</li>
            <li>Carousel</li>
            <li>Typeahead</li>
          </ul>
        </section>
        <!-- HTML template
        ================================================== -->
        <section id="html-template" class="doc">
          <div class="page-header">
            <h3>Basic HTML template</h3>
          </div>
          <p>
            With a brief intro into the contents out of the way, we can focus on putting Bootstrap to use. To do that, we'll utilize a basic HTML template that includes everything we mentioned in the <a href="#file-structure">File structure</a>.
          </p>
          <p>
            Now, here's a look at a <strong>typical HTML file</strong>:
          </p>
          <pre class="prettyprint linenums">
				 &lt;!DOCTYPE html&gt; &lt;html&gt; &lt;head&gt; &lt;title&gt;Bootstrap 101 Template&lt;/title&gt; &lt;/head&gt; &lt;body&gt; &lt;h1&gt;Hello, world!&lt;/h1&gt; &lt;script src="http://code.jquery.com/jquery-latest.js"&gt;&lt;/script&gt; &lt;/body&gt; &lt;/html&gt;
			</pre>
          <p>
            To make this <strong>a Bootstrapped template</strong>, just include the appropriate CSS and JS files:
          </p>
          <pre class="prettyprint linenums">
				 &lt;!DOCTYPE html&gt; &lt;html&gt; &lt;head&gt; &lt;title&gt;Bootstrap 101 Template&lt;/title&gt; &lt;!-- Bootstrap --&gt; &lt;link href="css/bootstrap.min.css" rel="stylesheet" media="screen"&gt; &lt;/head&gt; &lt;body&gt; &lt;h1&gt;Hello, world!&lt;/h1&gt; &lt;script src="http://code.jquery.com/jquery-latest.js"&gt;&lt;/script&gt; &lt;script src="js/bootstrap.min.js"&gt;&lt;/script&gt; &lt;/body&gt; &lt;/html&gt;
			</pre>
          <p>
            <strong>And you're set!</strong> With those two files added, you can begin to develop any site or application with Bootstrap.
          </p>
        </section>
        <!-- Next
        ================================================== -->
        <section id="what-next" class="doc">
          <div class="page-header">
            <h3>What next?</h3>
          </div>
          <p>
            Read Serenity documentation file that included in the download package and enjoy the template! For template support please send email via <a href="https://wrapbootstrap.com/user/iWebstudio">our profile contact form</a>.
          </p>
        </section>
      </div>
    </div>
  </div>
  <!-- Footer
 ================================================== -->


 @endsection
