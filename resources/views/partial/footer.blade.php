<div class="container-wrapper quick_links-wrapper">
	<div class="container">
		<div class="row">
			<div class="col-md-10 footer-wrapper">
				<div class="col-md-7 col-sm-12 col-xs-12">
					<div class="footer-image-marker">
						<div class="flag-0">
							{!! file_get_contents(public_path('images/aboriginal-flag.svg')) !!}
						</div>
						<div class="flag-1">
							{!! file_get_contents(public_path('images/torres-strait-flag.svg')) !!}
						</div>
					</div>
					<div class="footer-text">
						The department acknowledges Aboriginal and Torres Strait Islander people as the Traditional Custodians of the land and acknowledges and pays respect to their Elders, past and present.
					</div>
				</div>
				<div id="nrs-logo-div" class="col-md-2 col-sm-2 col-xs-3">
					<div class="footer-image-marker">
						<div class="nrs-logo">
							{!! file_get_contents(public_path('images/nrs-logo.svg')) !!}
						</div>
					</div>
				</div>
				<div id="nrs-text-div" class="col-md-3 col-sm-3 col-xs-9">
					<div class="footer-text">
						Deaf, hearing or speech impaired? Contact the National Relay Service:
						Call <a href="#" style="color: #ffffff; text-decoration: underline;">1800&nbsp;555&nbsp;660</a>
						or visit <a href="http://www.relayservice.com.au" target="_blank" style="color: #ffffff; text-decoration: underline;">www.relayservice.com.au&nbsp;
						<span class="external-link">{!! file_get_contents(public_path('images/ico-external-link.svg')) !!}</span></a>
					</div>
				</div>
			</div>
		</div><!-- /.row -->
	</div> <!-- /.container -->
</div> <!-- /.container-wrapper -->

<div class="container-wrapper quick_links-wrapper very-last-row">
	<div class="container">
				<div class="row">
					<div class="col-md-10 footer-wrapper">
						<div id="copyright-notice" class="col-md-7">
							<div class="footer-text">
								Department of Health and Human Services,  <br/>State Government of Victoria, Australia &copy; <?php echo date("Y"); ?>
							</div>
						</div>

							<div class="col-md-5">
								<div class="footer-image-marker">
									<div class="logo-vichs">
										{!! file_get_contents(public_path('images/logo-vichhs.svg')) !!}
									</div>
								</div>
							</div>
					</div>
				</div> <!-- /.row -->
			</div> <!-- /.container -->
		</div> <!-- /.container-wrapper -->

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>
