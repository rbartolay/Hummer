<style>
body {
  font-family: Helvetica, Verdana, sans-serif;
  font-size: 95%;
  margin: 0;
}

h1 {
  height: 80px;
  font-weight: normal;
  padding: 20px 20px 0;
  margin: 0 0 .5em;
  color: #fff;
  background: #6363c1 url(headbg.jpg) repeat-x 0 0;
}
li {
  margin-top: .5em;
  margin-bottom: .5em;
}
pre, code {
  font-size: 1em;
}
pre {
  padding: .5em;
  background-color: #eef;
}
#navigation {
  float: left;
  list-style-type: none;
  margin: -60px 0 0 20px;
  padding-left: 0;
}

#navigation li {
  float: left;
  margin: 5px 0;
  padding: 5px 0;
}
#navigation a {
  color: #fff;
  background: #6565c1;
  padding: 5px;
  text-decoration: none;
  border: 1px solid #fff;
}
#navigation a.active {
  color: #009;
  background: #fff;
  border: 1px solid #009;
  border-bottom: 1px solid #fff;
}
#container {
  clear: left;
  padding: .5em 20px 100px 20px;
}

.highlight {
  background: #fcc;
}
.highlighter {
  background: #ff3;
}
.back-to-top {
  display: block;
  margin-top: 1em;
  width: 7em;
}

.float-left {
  float: left;
  margin-right: .5em;
  display: inline;
  position: relative;
}
.float-right {
  float: right;
  margin-left: .5em;
  display: inline;
  position: relative;
}
h2 {
  font-size: 1.1em;
}
h3 {
  margin-top: 0;
  padding-top: 1em;
}
h4 {
  margin: .5em 0;
}
a {
  color: #009;
}
.html, .jquery {
  margin-top: .5em;
  color: #900;
  cursor: pointer;
  font-size: .9em;
  width: 8.5em;
}

ul li {
  margin: .5em 0;
}
ins {
  text-decoration: none;
  color: #090;
}
#jqlogo {
  position:absolute;
  top: 10px;
  right: 10px;
}
#jqlogo img {
  border: 0;
}
</style>
<script type="text/javascript" src="<?php echo Configuration::getJSPath() . "jquery.min.js";?>"></script>
<script type="text/javascript" src="<?php echo Configuration::getJSPath() . "jquery.cluetip.js";?>"></script>
<script type="text/javascript" src="<?php echo Configuration::getJSPath() . "jquery.hover.intent.js";?>"></script>
<script type="text/javascript" src="<?php echo Configuration::getJSPath() . "jquery.bgiframe.js";?>"></script>
<script>

/* the next line is an example of how you can override default options globally (currently commented out) ... */

  // $.fn.cluetip.defaults.tracking = true;
  // $.fn.cluetip.defaults.width = 'auto';
  // $.fn.cluetip.defaults.sticky = true;
  // $.fn.cluetip.defaults.arrows = true;

$(document).ready(function() {

 // $.cluetip.setup({insertionType: 'insertBefore', insertionElement: 'div:first'});
 // $.fn.cluetip.defaults.ajaxSettings.beforeSend = function(ct) {
 //     console.log(this);
 // };

//default theme
  $('a.title').cluetip({splitTitle: '|'});
  $('a.basic').cluetip();
  $('a.custom-width').cluetip({width: '200px', showTitle: false});
  $('h4').cluetip({attribute: 'id', hoverClass: 'highlight'});
  $('#sticky').cluetip({sticky: true, closePosition: 'title', arrows: true });
  $('#examples a:eq(5)').cluetip({
    hoverClass: 'highlight',
    sticky: true,
    closePosition: 'bottom',
    closeText: '<img src="cross.png" alt="close" width="16" height="16" />',
    truncate: 60
  });
  $('a.load-local').cluetip({local:true, hideLocal: true, sticky: true, arrows: true, cursor: 'pointer'});
  $('#clickme').cluetip({activation: 'click', sticky: true, width: 650});
  $('ol:first a:last').cluetip({tracking: true});

// jTip theme
  $('a.jt:eq(0)').cluetip({
    cluetipClass: 'jtip',
    arrows: true,
    dropShadow: false,
    sticky: true,
    mouseOutClose: true,
    closePosition: 'title',
    closeText: '<img src="cross.png" alt="close" />'
  });
  $('a.jt:eq(1)').cluetip({cluetipClass: 'jtip', arrows: true, dropShadow: false, hoverIntent: false});
  $('span[title]').css({borderBottom: '1px solid #900'}).cluetip({splitTitle: '|', arrows: true, dropShadow: false, cluetipClass: 'jtip'});

  $('a.jt:eq(2)').cluetip({
    cluetipClass: 'jtip',
    arrows: true,
    dropShadow: false,
    height: '150px',
    sticky: true,
    positionBy: 'bottomTop'
  });

  $('a.jt:eq(3)').cluetip({local: true, hideLocal: false});

  $('a.jt:eq(4)').cluetip({
    cluetipClass: 'jtip', arrows: true,
    dropShadow: false,
    onActivate: function(e) {
      var cb = $('#cb')[0];
      return !cb || cb.checked;
    }
  });

// Rounded Corner theme
  $('ol.rounded a:eq(0)').cluetip({arrows: true, sticky: true, splitTitle: '|', cluetipClass: 'rounded', showTitle: false});
  $('ol.rounded a:eq(1)').cluetip({cluetipClass: 'rounded', dropShadow: false, showTitle: false, positionBy: 'mouse'});
  $('ol.rounded a:eq(2)').cluetip({cluetipClass: 'rounded', dropShadow: false, showTitle: false, positionBy: 'bottomTop', topOffset: 70});
  $('ol.rounded a:eq(3)').cluetip({cluetipClass: 'rounded', dropShadow: false, sticky: true, ajaxCache: false});
  $('ol.rounded a:eq(4)').cluetip({cluetipClass: 'rounded', dropShadow: false});
});

//unrelated to clueTip -- just for the demo page...

$(document).ready(function() {
  $('div.html, div.jquery').next().css('display', 'none').end().click(function() {
    $(this).next().toggle('fast');
  });

  $('a.false').click(function() {
    return false;
  });
});

// inserting jQuery UI Themeswitcher tool

$('<button></button>', {
  'class': 'ui-button ui-widget ui-state-default',
  text: 'Try it with jQuery UI ThemeRoller!',
  click: function() {
    $(this).hide();
    $('#themeswitcher').themeswitcher({loadTheme: 'UI Lightness'});
  }
})
.prependTo('#container');

</script>

  <h1 id="top">clueTip : A jQuery Plugin</h1>
  <ul id="navigation">
    <li><a href="../#getting-started">Overview</a></li>
    <li><a class="active" href="/">Demo</a></li>
    <li><a href="../#details">Details</a></li>
    <li><a href="../#options">API / Options</a></li>
    <li><a href="../#faq">FAQ</a></li>
    <li><a href="../#credits">Credits</a></li>
    <li><a href="../#download">Download &amp; Support</a></li>
  </ul>
  <div id="container">
    <div id="themeswitcher"></div>
    <div id="examplesection">
    <h3>clueTip Plugin Demo</h3>
    <p>Below are quite a few examples of how you can add a clueTip to your page, using a wide range of options. Keep in mind that there is nothing magical about the HTML markup. You can use any jQuery selector you want to attach your clueTips. For example, if you want to attach clueTips to all links with a class of "peanuts," you would simply write in your jQuery code: <code>$('a.peanuts').cluetip();</code>.</p>
    <h4>Default Style</h4>
    <div id="examples">
      <ol>
        <li><strong>basic tip from title</strong>: <a class="title" href="#" title="This is the title|The first set of body content comes after the first delimiter in the title.|In this case, the delimiter is a pipe.">This example</a> pulls the clueTip's contents from the invoking element's title attribute via the "splitTitle" option.
          <div class="html">View the HTML</div>
          <pre><code>&lt;a class="title" href="#" title="This is the title|The first set of contents comes after the first delimiter in the title.|In this case, the delimiter is a pipe"&gt;</code></pre>
          <div class="jquery">View the jQuery</div>
          <pre><code>$('a.title').cluetip({splitTitle: '|'});</code></pre>
        </li>
        <li><strong>basic ajax</strong>, with no title attribute: This one <a class="basic" href="ajax.html" rel="ajax.html">requires no options</a>.
          <div><select style="width: 600px"><option>no bleed-thru</option><option>in IE6</option><option>when using bgiframe plugin</option></select> </div>
          <div class="html">View the HTML</div>
          <pre><code>&lt;a class="basic" href="ajax.html" rel="ajax.html"&gt;</code></pre>
          <div class="jquery">View the jQuery</div>
          <pre><code>$('a.basic').cluetip();</code></pre>
        </li>
        <li><strong>custom width and hidden title bar</strong>: This tip has a custom width of 200px. The clueTip title bar (heading) is hidden. <a class="custom-width" href="ajax3.html" rel="ajax3.html">Try me!</a>
          <div class="html">View the HTML</div>
          <pre><code>&lt;a class="custom-width" href="ajax3.html" rel="ajax3.html"&gt;</code></pre>
          <div class="jquery">View the jQuery</div>
          <pre><code>$('a.custom-width').cluetip({width: '200px', showTitle: false});</code></pre>
        </li>
        <li><strong>sticky, with arrows</strong>:This sticky clueTip has its "close" text in the title bar. It won't close until you close it, or until you hover over another clue-tipped link. It also displays an arrow on one of its sides, pointing to the invoking element. <a id="sticky" href="ajax6.html" rel="ajax6.html">sticky clueTip with arrows</a>
          <div class="html">View the HTML</div>
          <pre><code>&lt;a id="sticky" href="ajax6.html" rel="ajax6.html"&gt;</code></pre>
          <div class="jquery">View the jQuery</div>
          <pre><code>$('#sticky').cluetip({sticky: true, closePosition: 'title', arrows: true});</code></pre>
        </li>

        <li><strong>non-link element, custom attribute, and hover class</strong>: Block-level items such as this <code>h4</code> have clueTips positioned by the mouse.
          <h4 title="Fancy Title!" id="ajax3.html">Hover over me.</h4>
          <div class="html">View the HTML</div>
          <pre><code>&lt;h4 title="Fancy Title!" id="ajax3.html"&gt;Hover over me&lt;/h4&gt;</code></pre>
          <div class="jquery">View the jQuery</div>
          <pre><code>$('h4').cluetip({attribute: 'id', hoverClass: 'highlight'});</code></pre>
        </li>
        <li><strong>local, with arrows</strong>:  This one uses local content from a hidden <code>div</code> element and displays an arrow that points to the invoking element: <a id="load-local" class="load-local" href="#loadme" rel="#loadme">hover for local</a>
          <div class="html">View the HTML</div>
          <pre><code>&lt;a class="load-local" href="#loadme" rel="#loadme"&gt;</code></pre>
          <div class="jquery">View the jQuery</div>
          <pre><code>$('a.load-local').cluetip({local:true, cursor: 'pointer'});</code></pre>
        </li>
        <li><strong>sticky, truncated clueTip</strong> with custom hover class, close position, and close text (it also has a title). Its <code>href</code> is different from its <code>rel</code>, so if you <em>click</em> it, you'll go to the linked page <a href="http://www.learningjquery.com" title="about this link:" rel="ajax6.html">hover for cluetip, click to visit URL</a>
          <div class="html">View the HTML</div>
          <pre><code>&lt;a href="http://www.learningjquery.com" title="about this link:" rel="ajax6.html"&gt;</code></pre>
          <div class="jquery">View the jQuery</div>
<pre><code>$('#examples a:eq(5)').cluetip({
  hoverClass: 'highlight',
  sticky: true,
  closePosition: 'bottom',
  closeText: '&lt;img src="styles/cross.png" alt="" /&gt;'
  truncate: 60
});</code></pre>
        </li>
        <li><strong>click to activate</strong>:  This one won't show the clueTip unless you click it: <a id="clickme" href="ajaxclick.htm" rel="ajaxclick.htm" title="active ingredients">click me</a>. It's also really wide.
          <div class="html">View the HTML</div>
          <pre><code>&lt;a href="ajaxclick.htm" rel="ajax5.html" title="active ingredients"&gt;</code></pre>
          <div class="jquery">View the jQuery</div>
          <pre><code>$('#clickme').cluetip({activation: 'click', width: 650});</code></pre>
        </li>
        <li><strong><ins>experimental</ins> mouse tracking</strong>: <a href="ajax5.html" title="mouse tracks" rel="ajax5.html">The clueTip will move</a> in the direction of your mouse movement, as long as you're still hovering over the invoking element.
          <div class="html">View the HTML</div>
          <pre><code>&lt;a href="ajax5.html" title="mouse tracks" rel="ajax5.html"&gt;</code></pre>
          <div class="jquery">View the jQuery</div>
<pre><code>$('ol:first a:last').cluetip({tracking: true});</code></pre>
        </li>
      </ol>
      <h4>jTip Theme</h4>
      <ol>
        <li><a class="jt" href="ajax6.html" rel="ajax6.html" title="jTip Style!">jTip Style clueTip</a>, with slideDown effect and an image placed in the title for closing it, because it's sticky. <br />
        <ins>New</ins>: The clueTip will close if you mouse out of it.
          <div class="html">View the HTML</div>
          <pre><code>&lt;a class="jt" href="ajax6.html" rel="ajax6.html" title="jTip Style!"&gt;</code></pre>
          <div class="jquery">View the jQuery</div>
<pre><code>$('a.jt:eq(0)').cluetip({
  cluetipClass: 'jtip',
  arrows: true,
  dropShadow: false,
  hoverIntent: false,
  sticky: true,
  mouseOutClose: true,
  closePosition: 'title',
  closeText: '&lt;img src="cross.png" alt="close" /&gt;'
});
</code></pre>
        </li>
        <li>This one has hoverIntent turned off. Look for the link floated right: <span style="float:right"><a class="jt" href="ajax5.html" rel="ajax5.html">jTip Style clueTip</a></span>
          <div class="html">View the HTML</div>
          <pre><code>&lt;a class="jt" href="ajax5.html" rel="ajax5.html"&gt;</code></pre>
          <div class="jquery">View the jQuery</div>
<pre><code>$('a.jt:eq(1)').cluetip({cluetipClass: 'jtip', arrows: true, dropShadow: false, hoverIntent: false});
</code></pre>
        </li>
        <li>This one pulls the clueTip contents directly from the <code>title</code> attribute of a <code>span</code> tag: <span title="Split Title|This clueTip's contents were created directly from the title attribute|Nice for minimum info.">splitTitle clueTip</span>
          <div class="html">View the HTML</div>
          <code>&lt;span title="Split Title|This clueTip's contents were created directly from the title attribute|Nice for minimum info."&gt;</code>
          <div class="jquery">View the jQuery</div>
<pre><code>$('span[title]').css({borderBottom: '1px solid #900'}).cluetip({
  splitTitle: '|',
  arrows: true,
  dropShadow: false,
  cluetipClass: 'jtip'}
);</code></pre>
        </li>
        <li>this sticky clueTip has a <a class="jt" href="ajax5.html" rel="ajax5.html">fixed height</a>. It's generally a good idea to make fixed-height clueTips sticky as well, just in case the content requires a scrollbar to read it fully. It will be positioned below the clicked element unless there isn't enough room, in which case it will be positioned above.
          <div class="html">View the HTML</div>
          <pre><code>&lt;a class="jt" href="ajax5.html" rel="ajax5.html"&gt;</code></pre>
          <div class="jquery">View the jQuery</div>
<pre><code>$('a.jt:eq(2)').cluetip({
  cluetipClass: 'jtip', arrows: true,
  dropShadow: false,
  height: '150px',
  sticky: true,
  positionBy: 'bottomTop'
});</code></pre>
        </li>
        <li>For this one, we're loading <a class="jt" href="#" rel="p.localvisible">visible local content</a>
        <div class="html">View the HTML</div>
        <pre><code>&lt;a class="jt" href="#" rel="p.localvisible"&gt;visible local content&lt;/a&gt;</code></pre>
        <div class="jquery">View the jQuery</div>
        <pre><code>$('a.jt:eq(3)').cluetip({local: true, hideLocal: false});</code></pre>
        <p class="localvisible">and here is our visible local content!</p>
        </li>
        <li><a class="jt" href="ajax3.html" rel="ajax3.html">togglable clueTip</a> can be turned off by unchecking the checkbox<br />
          <input type="checkbox" name="cb" id="cb" checked="checked" /> <label for="cb">clueTips</label>
          <div class="html">View the HTML</div>
          <pre><code>&lt;a class="jt" href="ajax5.html" rel="ajax5.html"&gt;</code></pre>
          <div class="jquery">View the jQuery</div>
<pre><code>$('a.jt:eq(3)').cluetip({
  cluetipClass: 'jtip', arrows: true,
  dropShadow: false,
  onActivate: function(e) {
    var cb = $('#cb')[0];
    return !cb || cb.checked;
  }
});</code></pre>
        </li>
      </ol>
      <h4>Rounded Corners Theme</h4>
      <ol class="rounded">
        <li><a href="ajax4.html" title="|first line body|second line body">content from title attribute</a>, with the clueTip heading hidden.
          <div class="html">View the HTML</div>
          <pre><code>&lt;a href="ajax4.html" title="|first line body|second line body"&gt;</code></pre>
          <div class="jquery">View the jQuery</div>
          <pre><code>$('ol.rounded a:eq(0)').cluetip({arrows: true, sticky: true, splitTitle: '|', cluetipClass: 'rounded', showTitle: false});</code></pre>
        </li>
        <li>
          <a href="ajax4.html" rel="ajax4.html" title="mouse positioned">rounded corners theme and positioning by mouse</a>.
          <div class="html">View the HTML</div>
          <pre><code>&lt;a href="ajax4.html" rel="ajax4.html" title="mouse positioned"&gt;</code></pre>
          <div class="jquery">View the jQuery</div>
          <pre><code>$('ol.rounded a:eq(1)').cluetip({
  cluetipClass: 'rounded',
  dropShadow: false,
  positionBy: 'mouse'
});</code></pre>
        </li>
        <li>Another one with rounded corners theme. This one has <a href="ajax4.html" rel="ajax4.html" title="bottom/top positioned">"bottomTop" positioning</a>: positioned under link, unless there isn't enough room (then over). It also has <strong>"topOffset" set to 70</strong>.
            <div class="html">View the HTML</div>
            <pre><code>&lt;a href="ajax4.html" rel="ajax4.html" title="bottom/top positioned"&gt;</code></pre>
            <div class="jquery">View the jQuery</div>
            <pre><code>$('ol.rounded a:eq(2)').cluetip({cluetipClass: 'rounded', dropShadow: false, positionBy: 'bottomTop', topOffset: 70});</code></pre>
        </li>
        <li><a href="ajax4.html" rel="ajax4.html" title="rounded corners">non-caching ajax clueTip</a>.
          <div class="html">View the HTML</div>
          <pre><code>&lt;a href="ajax4.html" rel="ajax4.html" title="rounded corners"&gt;</code></pre>
          <div class="jquery">View the jQuery</div>
          <pre><code>$('ol.rounded a:eq(3)').cluetip({cluetipClass: 'rounded', dropShadow: false, sticky: true, ajaxCache: false});</code></pre>
        </li>
        <li><a href="ajax404.htm" rel="ajax404.htm">ajax error</a>: This one points to a file that does not exist.
          <div class="html">View the HTML</div>
          <pre><code>&lt;a href="ajax404.htm" rel="ajax404.htm"&gt;</code></pre>
          <div class="jquery">View the jQuery</div>
          <pre><code>$('ol.rounded a:eq(4)').cluetip({cluetipClass: 'rounded', dropShadow: false});</code></pre>
        </li>
      </ol>

    </div>

    <div id="loadme">this is the <a class="false" href="http://www.learningjquery.com">local content</a> to load when the 'local' parameter is set to true.</div>
    </div>

  </div>