<h1>Job Seeker Registration</h1>

<div class="container">
<table width="100%">
	<tr>
		<td width="50%" valign="top">
		
            <iframe src="https://www.facebook.com/plugins/registration?
                client_id=132703346866636&
                redirect_uri=<?php echo Configuration::getURLPath() . "/registration/processFBRegistration";?>&
                fb_register=true&
                target=_self&
                fields=
					[
					 {'name':'name'},
					 {'name':'email'},
					 {'name':'first_name'},
					 {'name':'last_name'},
					 {'name':'location'},
					 {'name':'gender'},
					 {'name':'birthday'},
					 {'name':'password'},
					 {'name':'captcha'}
					]
                "
		           scrolling="auto"
		           frameborder="no"
		           style="border:none"
		           allowTransparency="true"
		           width="100%"
		           height="505">
		   </iframe>
		</td>
	</tr>
</table>
</div>

