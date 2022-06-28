
 @extends('sb-user/app')
 @section('content')
   <section id="subintro">
    <div class="jumbotron subhead" id="overview">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="centered">
              <h3>Private Class</h3>
              <p>
                Private Class
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
          <li><a href="#general-template"><i class="icon-chevron-right"></i> Pesanan Saya </a></li>
          <li><a href="#file-structure"><i class="icon-chevron-right"></i> Pengaturan Akun</a></li>
        </ul>
      </div>
      <div class="span9">
        <!-- Download
        ================================================== -->
        <section id="general-template" class="doc">
          <div class="page-header">
            <h3>Pesanan Saya</h3>
     {{-- <p>
       Makes tables more compact by cutting cell padding in half.
     </p> --}}
     {{-- <div class="bs-docs-example">
       <table class="table table-condensed">
         <thead>
           <tr>
             <th>
               #
             </th>
             <th>
               First Name
             </th>
             <th>
               Last Name
             </th>
             <th>
               Username
             </th>
           </tr>
         </thead>
         <tbody>
           <tr>
             <td>
               1
             </td>
             <td>
               Mark
             </td>
             <td>
               Otto
             </td>
             <td>
               @mdo
             </td>
           </tr>
           <tr>
             <td>
               2
             </td>
             <td>
               Jacob
             </td>
             <td>
               Thornton
             </td>
             <td>
               @fat
             </td>
           </tr>
           <tr>
             <td>
               3
             </td>
             <td colspan="2">
               Larry the Bird
             </td>
             <td>
               @twitter
             </td>
           </tr>
         </tbody>
       </table>
     </div> --}}

     {{-- <div class="bd-example bd-example-tabs">
  <ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
    </li>
  </ul>
  <div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
      <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>
    </div>
    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
      <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</p>
    </div>
    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
      <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p>
    </div>
  </div>
</div> --}}





    <ul class="nav nav-tabs" role="tablist" id="awal">
        <li class="nav-item">
        <a class="nav-link active" data-toggle="tab" href="#home">Detail Pemesanan</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#menu1">Biaya</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#menu2">Status</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#menu3">Pembayaran</a>
        </li>
    </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div id="home" class="container tab-pane active"><br>
      {{-- <h3>HOME</h3> --}}
      {{-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p> --}}
      <div class="container">
        <h2>Detail Pemesanan</h2>
        <table class="table">
          <thead>
            <tr>
              <th>Tanggal</th>
              <th>Nama</th>
              <th>No HP</th>
              <th>Alamat</th>
            </tr>
          </thead>
          <tbody>
            <tr>
                <td>Tanggal</td>
                <td>Nama</td>
                <td>No HP</td>
                <td>Alamat</td>
            </tr>
          </tbody>
        </table>
      </div>

    </div>
    <div id="menu1" class="container tab-pane fade"><br>
      <h3>Menu 1</h3>
      <div class="container">
        <h2>Bordered Table</h2>
        <p>The .table-bordered class adds borders to a table:</p>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>No</th>
              <th>Produk</th>
              <th>Qty</th>
              <th>Harga</th>
              <th>Subtotal</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th>No</th>
              <th>Produk</th>
              <th>Qty</th>
              <th>Harga</th>
              <th>Subtotal</th>
            </tr>
            <tr>
            <th>No</th>
              <th>Produk</th>
              <th>Qty</th>
              <th>Harga</th>
              <th>Subtotal</th>
            </tr>
            <tr>
            <th>No</th>
              <th>Produk</th>
              <th>Qty</th>
              <th>Harga</th>
              <th>Subtotal</th>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <div id="menu2" class="container tab-pane fade"><br>
      <h3>Menu 2</h3>
      <div class="container">
        <h2>Bordered Table</h2>
        <p>The .table-bordered class adds borders to a table:</p>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>No</th>
              <th>Produk</th>
              <th>Qty</th>
              <th>Harga</th>
              <th>Subtotal</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th>No</th>
              <th>Produk</th>
              <th>Qty</th>
              <th>Harga</th>
              <th>Subtotal</th>
            </tr>
            <tr>
            <th>No</th>
              <th>Produk</th>
              <th>Qty</th>
              <th>Harga</th>
              <th>Subtotal</th>
            </tr>
            <tr>
            <th>No</th>
              <th>Produk</th>
              <th>Qty</th>
              <th>Harga</th>
              <th>Subtotal</th>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <div id="menu3" class="container tab-pane fade"><br>
        <h3>Menu 2</h3>
        <div class="container">
            <h2>Bordered Table</h2>
            <p>The .table-bordered class adds borders to a table:</p>
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Produk</th>
                  <th>Qty</th>
                  <th>Harga</th>
                  <th>Subtotal</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th>No</th>
                  <th>Produk</th>
                  <th>Qty</th>
                  <th>Harga</th>
                  <th>Subtotal</th>
                </tr>
                <tr>
                <th>No</th>
                  <th>Produk</th>
                  <th>Qty</th>
                  <th>Harga</th>
                  <th>Subtotal</th>
                </tr>
                <tr>
                <th>No</th>
                  <th>Produk</th>
                  <th>Qty</th>
                  <th>Harga</th>
                  <th>Subtotal</th>
                </tr>
              </tbody>
            </table>
          </div>
      </div>
  </div>
        </section>

        <!-- Contents
        ================================================== -->
        {{-- <section id="contents" class="doc">
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
        </section> --}}
        <!-- HTML template
        ================================================== -->
        {{-- <section id="html-template" class="doc">
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
        </section> --}}
        <!-- Next
        ================================================== -->
        {{-- <section id="what-next" class="doc">
          <div class="page-header">
            <h3>What next?</h3>
          </div>
          <p>
            Read Serenity documentation file that included in the download package and enjoy the template! For template support please send email via <a href="https://wrapbootstrap.com/user/iWebstudio">our profile contact form</a>.
          </p>
        </section> --}}
      </div>
    </div>
  </div>
  <!-- Footer
 ================================================== -->


 @endsection
