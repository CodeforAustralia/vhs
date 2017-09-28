@if (count($letters)>0)
<html>
  <head>
    <title>Letter</title>

    <script src="{{ asset('js/pdfjs/pdf.js-viewer/pdf.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('js/pdfjs/pdf.js-viewer/viewer.css') }}">
    <style>
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      body {
  	    background-color: #ffffff; !important;
       }
      .pdfjs .toolbar {
        visibility: hidden;
        display: none;
      }

    </style>
  </head>

  <body>
    <div class="pdfjs">
      <!--#include virtual="pdfjs/pdf.js-viewer/viewer.html" -->
      <?php  include 'js/pdfjs/pdf.js-viewer/viewer.html'; ?>
    </div>

    <script>
      PDFJS.webViewerLoad('/actual-letter/{{ $letters[0]->id }}');
    </script>
  </body>
</html>
@endif
