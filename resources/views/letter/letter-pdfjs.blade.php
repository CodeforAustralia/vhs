@if (count($letters)>0)
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Letter</title>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    <script src="{{ asset('js/pdfjs/pdf.js-viewer/pdf.js') }}"></script>
    <script>
      console.log('Starting pdf rendering');
      $('#letterIframe').load(function() {
        console.log('loaded the iframe');
        console.log('will fix height');
      });
      document.addEventListener('pagerendered', function (evt) {
        console.log('Page renedring event fired');
        console.log(evt);
//        fix_heights_on_pdf2html();
//        console.log('fixed height');
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
      background-color: #faf8f7;
    }

/* Outline page */
.pdfjs .pdfViewer .page {
    border: 1px solid #003b68;
}


/*
    #viewer, #outerContainer #mainContainer #viewerContainer {
      width: 929px;
    }
*/

/*
    .pdfjs .pdfViewer .page {
      margin: 1px auto -8px auto;
      border: 1px solid #0063ae !important;
      border-bottom: 3px solid #0063ae !important;
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
/*      PDFJS.disableWorker = true; */
      PDFJS.webViewerLoad('/actual-letter/{{ $letters[0]->id }}#zoom=page-width');
    </script>
  </body>
</html>
@endif
