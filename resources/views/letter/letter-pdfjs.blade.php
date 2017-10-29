@if (count($letters)>0)
<html>
  <head>
    <title>Letter</title>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    <script src="{{ asset('js/pdfjs/pdf.js-viewer/pdf.js') }}"></script>
    <script>
      console.log('Starting pdf rendering');
      document.addEventListener('pagerendered', function (evt) {
        console.log('Page renedring event fired');
        console.log(evt);
        fix_heights_on_pdf2html();
        console.log('fixed height');
      });

    </script>
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
/* Hide pdf.js toolbar, solution came from https://support.mozilla.org/en-US/questions/1119523 */
      #outerContainer #mainContainer div.toolbar {
        display: none !important; /* hide PDF viewer toolbar */
      }
      #outerContainer #mainContainer #viewerContainer {
        top: 0 !important; /* move doc up into empty bar space */
      }

/* Make a grey background */
    .pdfjs #outerContainer {
      background-color: #f3eee9;
    }

/*
    #viewer, #outerContainer #mainContainer #viewerContainer {
      width: 929px;
    }
*/

/*
    .pdfjs .pdfViewer .page {
      margin: 1px auto -8px auto;
      border: 1px solid #04446c !important;
      border-bottom: 3px solid #04446c !important;
      background-clip: content-box;
      border-image: none;
      width: 100%;
      margin: 0;
    }
*/
    </style>
  </head>

  <body>
    <div class="pdfjs">
      <?php  include 'js/pdfjs/pdf.js-viewer/viewer.html'; ?>
    </div>

    <script>
      PDFJS.disableWorker = true;
      PDFJS.webViewerLoad('/actual-letter/{{ $letters[0]->id }}#zoom=page-width');
    </script>
  </body>
</html>
@endif
