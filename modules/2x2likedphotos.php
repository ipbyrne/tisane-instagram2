<div id="social-module-item-right">
		<table width="100%" border="0" cellspacing="0" cellpadding="0" id="social-module-title">
			<tbody>
				<tr>
					<td width="50%"><div id="blog-column-header-line">&nbsp;</div></td>
					<td><span class="blog-column-header-title" >COMMUNITY</span></td>
					<td width="50%"><div id="blog-column-header-line">&nbsp;</div></td>
				</tr>
			</tbody>
		</table>
		<div id="instafeed2" style="width:273px; margin-top: 20px;">
			<!-- Instagram Pics Here -->
		</div>
		<script type="text/javascript">
			var feed2 = new Instafeed({
				target: 'instafeed2',
				get: 'liked',
				limit: 4,
				accessToken: '1692331993.1677ed0.677230012c24401d8aefb67e8d6dd4fc', //Replace with your access token
				template: '<a href="{{link}}"><img style="width:129px; margin-left:3px;" src="{{image}}"/></a>',
				resolution: 'standard_resolution'
			});
			feed2.run();
		</script>
</div>
