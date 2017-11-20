<html>
@if (count($letters)>0)
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Letter</title>
    <script src="{{ asset('js/pdfjs/pdf.js-viewer/pdf.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    <script>
      console.log('start logging...');
		  $(document).bind('pagesloaded', function (e) {
			   console.log('Pages loaded.');
         fix_heights_on_pdf2html();
		  });
    </script>
    <link rel="stylesheet" href="{{ asset('js/pdfjs/pdf.js-viewer/viewer.css') }}">
  </head>

  <body>
    <div class="pdfjs">
      <?php  include 'js/pdfjs/pdf.js-viewer/viewer.html'; ?>
    </div>
    <script>
      PDFJS.webViewerLoad('/actual-letter/{{ $letters[0]->id }}');
    </script>
  </body>
@endif
</html>
