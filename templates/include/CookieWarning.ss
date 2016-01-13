<% if not $CookieWarningShown %>
<div class="cookie-warning">
	<div class="alert fade in alert-dismissible" role="alert">
		<div class="col-md-10">
			$SiteConfig.CookieWarning
		</div>
		<div class="col-md-2">
			<button type="button" class="btn btn-inverse pull-right" data-dismiss="alert" aria-label="Close">OK</button>
		</div>
	</div>
</div>
<% end_if %>