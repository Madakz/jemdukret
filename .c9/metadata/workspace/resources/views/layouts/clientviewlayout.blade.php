{"filter":false,"title":"clientviewlayout.blade.php","tooltip":"/resources/views/layouts/clientviewlayout.blade.php","undoManager":{"mark":78,"position":78,"stack":[[{"start":{"row":91,"column":6},"end":{"row":135,"column":12},"action":"remove","lines":["<div class=\"col-md-6 col-sm-5 col-xs-12\">","\t\t\t\t\t\t\t<div role=\"form\" class=\"wpcf7\" id=\"wpcf7-f7104-p869-o1\" lang=\"en-US\" dir=\"ltr\">","\t\t\t\t\t\t\t\t<div class=\"screen-reader-response\">\t\t\t\t\t\t\t\t","\t\t\t\t\t\t\t\t</div>","\t\t\t\t\t\t\t\t{{Form::open(['route' => 'store_get_intouch', 'method' => 'POST', 'class'=>'wpcf7-form'])}}\t\t\t\t\t\t\t\t\t","\t\t\t\t\t\t\t\t\t{{ csrf_field() }}","\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">","\t\t\t\t\t\t\t\t\t\t<div class=\"first-name-input\">","\t\t\t        \t\t\t\t\t\t\t<label>First Name</label><br />","\t\t\t \t\t\t\t\t\t\t\t\t<span class=\"wpcf7-form-control-wrap first-name\"><input type=\"text\" name=\"first_name\" value=\"{{old('first_name')}}\" size=\"40\" class=\"wpcf7-form-control wpcf7-text \" aria-required=\"true\" aria-invalid=\"false\" /></span>","\t\t\t  \t\t\t\t\t\t\t\t</div>","\t\t\t\t\t\t\t\t\t\t\t<div class=\"email-input\">","\t\t\t        \t\t\t\t\t\t\t<label>Email Address</label><br />","\t\t\t  \t\t\t\t\t\t\t\t\t<span class=\"wpcf7-form-control-wrap your-email\"><input type=\"email\" name=\"email\" value=\"{{old('email')}}\" size=\"40\" class=\"wpcf7-form-control wpcf7-text wpcf7-email \" aria-required=\"true\" aria-invalid=\"false\" /></span>","\t\t\t  \t\t\t\t\t\t\t\t</div>","\t\t\t\t\t\t\t\t\t\t</div>","\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">","\t\t\t\t\t\t\t\t\t\t\t<div class=\"last-name-input\">","\t\t\t        \t\t\t\t\t\t\t<label>Last Name</label><br />","\t\t\t  \t\t\t\t\t\t\t\t\t\t<span class=\"wpcf7-form-control-wrap last-name\">","\t\t\t  \t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"last_name\" value=\"{{old('last_name')}}\" size=\"40\" class=\"wpcf7-form-control wpcf7-text\" aria-invalid=\"false\" />","\t\t\t  \t\t\t\t\t\t\t\t\t\t</span>","\t\t\t  \t\t\t\t\t\t\t\t</div>","\t\t\t\t\t\t\t\t\t\t\t<div class=\"subject-input\">","\t\t\t        \t\t\t\t\t\t\t<label>Subject</label><br />","\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"wpcf7-form-control-wrap your-subject\">","\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"subject\" value=\"{{old('subject')}}\" size=\"40\" class=\"wpcf7-form-control wpcf7-text \" aria-required=\"true\" aria-invalid=\"false\" />","\t\t\t\t\t\t\t\t\t\t\t\t</span>","\t\t\t  \t\t\t\t\t\t\t\t</div>","\t\t\t\t\t\t\t\t\t\t</div>","\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12\">","\t\t\t\t\t\t\t\t\t\t\t<div class=\"message-input\">","\t\t\t        \t\t\t\t\t\t\t<label>Message</label><br />","\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"wpcf7-form-control-wrap your-message\">","\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea name=\"message\" value=\"{{old('message')}}\" cols=\"3\" rows=\"3\" class=\"wpcf7-form-control wpcf7-textarea\" aria-invalid=\"false\">\t\t\t\t\t\t\t\t\t\t\t","\t\t\t\t\t\t\t\t\t\t\t\t\t</textarea>","\t\t\t\t\t\t\t\t\t\t\t\t</span>","\t\t\t  \t\t\t\t\t\t\t\t</div>","\t\t\t\t\t\t\t\t\t\t</div>","\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12\">","\t\t\t  \t\t\t\t\t\t\t\t<input type=\"submit\" value=\"Send Message &rarr;\" class=\"wpcf7-form-control wpcf7-submit\" />","\t\t\t\t\t\t\t\t\t\t</div>","\t\t\t\t\t\t\t\t{{Form::close()}}","\t\t\t\t\t\t\t</div>","\t\t\t\t\t\t</div>"],"id":34}],[{"start":{"row":91,"column":5},"end":{"row":91,"column":6},"action":"remove","lines":["\t"],"id":35}],[{"start":{"row":91,"column":4},"end":{"row":91,"column":5},"action":"remove","lines":["\t"],"id":36}],[{"start":{"row":91,"column":3},"end":{"row":91,"column":4},"action":"remove","lines":["\t"],"id":37}],[{"start":{"row":91,"column":2},"end":{"row":91,"column":3},"action":"remove","lines":["\t"],"id":38}],[{"start":{"row":91,"column":1},"end":{"row":91,"column":2},"action":"remove","lines":["\t"],"id":39}],[{"start":{"row":91,"column":0},"end":{"row":91,"column":1},"action":"remove","lines":["\t"],"id":40}],[{"start":{"row":90,"column":0},"end":{"row":91,"column":0},"action":"remove","lines":["",""],"id":41}],[{"start":{"row":89,"column":12},"end":{"row":90,"column":0},"action":"remove","lines":["",""],"id":43}],[{"start":{"row":99,"column":2},"end":{"row":150,"column":26},"action":"remove","lines":["<!-- Footer Main Start -->","\t\t<section class=\"footer-main\">","\t\t\t<div class=\"container\">","\t\t\t\t<div class=\"row\">","\t\t\t\t\t<div class=\"col-sm-12 col-md-2 col-lg-2 socials\"></div>","\t\t\t\t\t<div class=\"col-sm-6 col-md-3 col-lg-3 socials\">","\t\t\t\t\t\t<h3>Jemduk Socials</h3>","\t\t\t\t\t\t<div class=\"row\">","\t\t\t\t\t\t\t<div class=\"col-md-12\">","\t\t\t\t\t\t\t\t<ul>","\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"zmdi zmdi-facebook\"></i> Facebook</a></li>","\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"zmdi zmdi-twitter\"></i> Twitter</a></li>","\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"zmdi zmdi-instagram\"></i> Instagram</a></li>","\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"zmdi zmdi-linkedin-box\"></i> Linkedin</a></li>","\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"zmdi zmdi-pinterest-box\"></i> Pinterest</a></li>","\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"zmdi zmdi-google-plus\"></i> Google Plus</a></li>","\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"zmdi zmdi-youtube\"></i> Youtube</a></li>","\t\t\t\t\t\t\t\t</ul>","\t\t\t\t\t\t\t</div>","\t\t\t\t\t\t</div>","\t\t\t\t\t</div>","\t\t\t\t\t<div class=\"col-sm-6 col-md-3 col-lg-3 footer-col\">","\t\t\t\t\t\t<h3>Quick Links</h3>","\t\t\t\t\t\t<div class=\"row\">","\t\t\t\t\t\t\t<div class=\"col-md-12\">","\t\t\t\t\t\t\t\t<ul>","\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Properties</a></li>","\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Rentals</a></li>","\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Properties Sell</a></li>","\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Agent</a></li>","\t\t\t\t\t\t\t\t</ul>","\t\t\t\t\t\t\t</div>","\t\t\t\t\t\t</div>","\t\t\t\t\t</div>","\t\t\t\t\t<div class=\"col-sm-6 col-md-3 col-lg-3 footer-col\">","\t\t\t\t\t\t<h3>Services</h3>","\t\t\t\t\t\t<div class=\"row\">","\t\t\t\t\t\t\t<div class=\"col-md-12\">","\t\t\t\t\t\t\t\t<ul>","\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Property Rentals</a></li>","\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Property Leasing</a></li>","\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Property Sell</a></li>","\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Agent</a></li>","\t\t\t\t\t\t\t\t</ul>","\t\t\t\t\t\t\t</div>","\t\t\t\t\t\t</div>","\t\t\t\t\t</div>","\t\t\t\t\t<div class=\"col-sm-12 col-md-1 col-lg-1 socials\"></div>","\t\t\t\t</div>","\t\t\t</div>","\t\t</section>","\t\t<!-- Footer Main End -->"],"id":44}],[{"start":{"row":99,"column":2},"end":{"row":100,"column":0},"action":"remove","lines":["",""],"id":45}],[{"start":{"row":99,"column":2},"end":{"row":100,"column":2},"action":"remove","lines":["","\t\t"],"id":46}],[{"start":{"row":78,"column":43},"end":{"row":78,"column":44},"action":"remove","lines":["1"],"id":47}],[{"start":{"row":78,"column":43},"end":{"row":78,"column":44},"action":"insert","lines":["2"],"id":48}],[{"start":{"row":78,"column":25},"end":{"row":78,"column":26},"action":"remove","lines":["1"],"id":49}],[{"start":{"row":78,"column":25},"end":{"row":78,"column":26},"action":"insert","lines":["2"],"id":50}],[{"start":{"row":78,"column":34},"end":{"row":78,"column":35},"action":"remove","lines":["1"],"id":51}],[{"start":{"row":78,"column":34},"end":{"row":78,"column":35},"action":"insert","lines":["2"],"id":52}],[{"start":{"row":90,"column":6},"end":{"row":90,"column":46},"action":"remove","lines":["<div class=\"col-md-1 col-sm-1 col-xs-1\">"],"id":53},{"start":{"row":90,"column":6},"end":{"row":90,"column":46},"action":"insert","lines":["<div class=\"col-md-2 col-sm-2 col-xs-2\">"]}],[{"start":{"row":78,"column":25},"end":{"row":78,"column":26},"action":"remove","lines":["2"],"id":60},{"start":{"row":78,"column":25},"end":{"row":78,"column":26},"action":"insert","lines":["3"]}],[{"start":{"row":78,"column":34},"end":{"row":78,"column":35},"action":"remove","lines":["2"],"id":61}],[{"start":{"row":78,"column":34},"end":{"row":78,"column":35},"action":"insert","lines":["3"],"id":62}],[{"start":{"row":78,"column":43},"end":{"row":78,"column":44},"action":"remove","lines":["2"],"id":63}],[{"start":{"row":78,"column":43},"end":{"row":78,"column":44},"action":"insert","lines":["3"],"id":64}],[{"start":{"row":79,"column":18},"end":{"row":79,"column":45},"action":"remove","lines":["col-md-4 col-sm-5 col-xs-12"],"id":72},{"start":{"row":79,"column":18},"end":{"row":79,"column":19},"action":"insert","lines":["r"]}],[{"start":{"row":79,"column":19},"end":{"row":79,"column":20},"action":"insert","lines":["o"],"id":73}],[{"start":{"row":79,"column":20},"end":{"row":79,"column":21},"action":"insert","lines":["w"],"id":74}],[{"start":{"row":82,"column":41},"end":{"row":83,"column":16},"action":"insert","lines":["","\t\t\t\t\t\t        \t\t"],"id":75}],[{"start":{"row":83,"column":16},"end":{"row":83,"column":17},"action":"insert","lines":["<"],"id":76}],[{"start":{"row":83,"column":17},"end":{"row":83,"column":18},"action":"insert","lines":["d"],"id":77}],[{"start":{"row":83,"column":18},"end":{"row":83,"column":19},"action":"insert","lines":["i"],"id":78}],[{"start":{"row":83,"column":19},"end":{"row":83,"column":20},"action":"insert","lines":["v"],"id":79}],[{"start":{"row":83,"column":17},"end":{"row":83,"column":20},"action":"remove","lines":["div"],"id":80},{"start":{"row":83,"column":17},"end":{"row":83,"column":27},"action":"insert","lines":["div></div>"]}],[{"start":{"row":83,"column":20},"end":{"row":83,"column":21},"action":"insert","lines":[" "],"id":81}],[{"start":{"row":83,"column":21},"end":{"row":83,"column":22},"action":"insert","lines":["c"],"id":82}],[{"start":{"row":83,"column":22},"end":{"row":83,"column":23},"action":"insert","lines":["l"],"id":83}],[{"start":{"row":83,"column":23},"end":{"row":83,"column":24},"action":"insert","lines":["a"],"id":84}],[{"start":{"row":83,"column":24},"end":{"row":83,"column":25},"action":"insert","lines":["s"],"id":85}],[{"start":{"row":83,"column":21},"end":{"row":83,"column":25},"action":"remove","lines":["clas"],"id":86},{"start":{"row":83,"column":21},"end":{"row":83,"column":26},"action":"insert","lines":["class"]}],[{"start":{"row":83,"column":26},"end":{"row":83,"column":27},"action":"insert","lines":["="],"id":87}],[{"start":{"row":83,"column":27},"end":{"row":83,"column":29},"action":"insert","lines":["\"\""],"id":88}],[{"start":{"row":83,"column":28},"end":{"row":83,"column":29},"action":"insert","lines":["c"],"id":89}],[{"start":{"row":83,"column":29},"end":{"row":83,"column":30},"action":"insert","lines":["o"],"id":90}],[{"start":{"row":83,"column":30},"end":{"row":83,"column":31},"action":"insert","lines":["l"],"id":91}],[{"start":{"row":83,"column":31},"end":{"row":83,"column":32},"action":"insert","lines":["="],"id":92}],[{"start":{"row":83,"column":31},"end":{"row":83,"column":32},"action":"remove","lines":["="],"id":93}],[{"start":{"row":83,"column":31},"end":{"row":83,"column":32},"action":"insert","lines":["-"],"id":94}],[{"start":{"row":83,"column":32},"end":{"row":83,"column":33},"action":"insert","lines":["m"],"id":95}],[{"start":{"row":83,"column":33},"end":{"row":83,"column":34},"action":"insert","lines":["d"],"id":96}],[{"start":{"row":83,"column":34},"end":{"row":83,"column":35},"action":"insert","lines":["-"],"id":97}],[{"start":{"row":83,"column":35},"end":{"row":83,"column":36},"action":"insert","lines":["5"],"id":98}],[{"start":{"row":83,"column":35},"end":{"row":83,"column":36},"action":"remove","lines":["5"],"id":99}],[{"start":{"row":83,"column":35},"end":{"row":83,"column":36},"action":"insert","lines":["6"],"id":100}],[{"start":{"row":83,"column":44},"end":{"row":84,"column":0},"action":"insert","lines":["",""],"id":101},{"start":{"row":84,"column":0},"end":{"row":84,"column":16},"action":"insert","lines":["\t\t\t\t\t\t        \t\t"]}],[{"start":{"row":84,"column":16},"end":{"row":84,"column":44},"action":"insert","lines":["<div class=\"col-md-6\"></div>"],"id":102}],[{"start":{"row":83,"column":38},"end":{"row":85,"column":16},"action":"insert","lines":["","\t\t\t\t\t\t        \t\t\t","\t\t\t\t\t\t        \t\t"],"id":103}],[{"start":{"row":86,"column":38},"end":{"row":88,"column":16},"action":"insert","lines":["","\t\t\t\t\t\t        \t\t\t","\t\t\t\t\t\t        \t\t"],"id":104}],[{"start":{"row":89,"column":19},"end":{"row":89,"column":178},"action":"remove","lines":["<p><i class=\"zmdi zmdi-phone\" aria-hidden=\"true\"></i> Phone: (+234) 8032851135 <br/>&nbsp;&nbsp; (+234) 7062193996 <br/>&nbsp;&nbsp; (+234) 8136943343</p><br/>"],"id":105}],[{"start":{"row":84,"column":17},"end":{"row":84,"column":176},"action":"insert","lines":["<p><i class=\"zmdi zmdi-phone\" aria-hidden=\"true\"></i> Phone: (+234) 8032851135 <br/>&nbsp;&nbsp; (+234) 7062193996 <br/>&nbsp;&nbsp; (+234) 8136943343</p><br/>"],"id":106}],[{"start":{"row":90,"column":19},"end":{"row":91,"column":180},"action":"remove","lines":["<p><i class=\"zmdi zmdi-local-post-office\" aria-hidden=\"true\"></i> Email: jemdukonline@gmail.com</p><br/>","            \t\t\t\t\t\t\t<p><i class=\"zmdi zmdi-pin\" aria-hidden=\"true\"></i> Address: nHub Nigeria , 3rd Floor Taen Business Complex, Opp. NITEL , Old Airport Road Jos Plateau State.</p>"],"id":111}],[{"start":{"row":87,"column":17},"end":{"row":88,"column":180},"action":"insert","lines":["<p><i class=\"zmdi zmdi-local-post-office\" aria-hidden=\"true\"></i> Email: jemdukonline@gmail.com</p><br/>","            \t\t\t\t\t\t\t<p><i class=\"zmdi zmdi-pin\" aria-hidden=\"true\"></i> Address: nHub Nigeria , 3rd Floor Taen Business Complex, Opp. NITEL , Old Airport Road Jos Plateau State.</p>"],"id":112}],[{"start":{"row":88,"column":19},"end":{"row":88,"column":20},"action":"insert","lines":["\t"],"id":113}],[{"start":{"row":79,"column":11},"end":{"row":79,"column":22},"action":"remove","lines":["class=\"row\""],"id":114},{"start":{"row":79,"column":11},"end":{"row":79,"column":46},"action":"insert","lines":["class=\"col-md-4 col-sm-5 col-xs-12\""]}],[{"start":{"row":79,"column":25},"end":{"row":79,"column":26},"action":"remove","lines":["4"],"id":115}],[{"start":{"row":79,"column":25},"end":{"row":79,"column":26},"action":"insert","lines":["6"],"id":116}],[{"start":{"row":79,"column":34},"end":{"row":79,"column":35},"action":"remove","lines":["5"],"id":117}],[{"start":{"row":79,"column":34},"end":{"row":79,"column":35},"action":"insert","lines":["6"],"id":118}],[{"start":{"row":87,"column":116},"end":{"row":87,"column":121},"action":"remove","lines":["<br/>"],"id":119}],[{"start":{"row":96,"column":25},"end":{"row":96,"column":26},"action":"remove","lines":["2"],"id":120}],[{"start":{"row":96,"column":25},"end":{"row":96,"column":26},"action":"insert","lines":["3"],"id":121}],[{"start":{"row":96,"column":34},"end":{"row":96,"column":35},"action":"remove","lines":["2"],"id":122}],[{"start":{"row":96,"column":34},"end":{"row":96,"column":35},"action":"insert","lines":["3"],"id":123}],[{"start":{"row":96,"column":43},"end":{"row":96,"column":44},"action":"remove","lines":["2"],"id":124}],[{"start":{"row":96,"column":43},"end":{"row":96,"column":44},"action":"insert","lines":["3"],"id":125}],[{"start":{"row":96,"column":43},"end":{"row":96,"column":44},"action":"remove","lines":["3"],"id":126}],[{"start":{"row":96,"column":43},"end":{"row":96,"column":44},"action":"insert","lines":["2"],"id":127}],[{"start":{"row":78,"column":43},"end":{"row":78,"column":44},"action":"remove","lines":["3"],"id":142},{"start":{"row":78,"column":43},"end":{"row":78,"column":44},"action":"insert","lines":["2"]}],[{"start":{"row":79,"column":44},"end":{"row":79,"column":45},"action":"remove","lines":["2"],"id":143}],[{"start":{"row":79,"column":44},"end":{"row":79,"column":45},"action":"insert","lines":["0"],"id":144}]]},"ace":{"folds":[],"scrolltop":542,"scrollleft":0,"selection":{"start":{"row":68,"column":0},"end":{"row":102,"column":25},"isBackwards":true},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":44,"state":"start","mode":"ace/mode/php"}},"timestamp":1517584571733,"hash":"abcbbcd54b1eae7ba09bc3ace1aa9bc25ec0eefd"}