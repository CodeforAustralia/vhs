<html>
@if (count($letters)>0)
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
      document.onreadystatechange = function () {
        console.log('document.readyState = ' + document.readyState);
        if (document.readyState === "complete") {
          console.log('Document finished loading');
        }
      };
    </script>
    <link rel="stylesheet" href="{{ asset('js/pdfjs/pdf.js-viewer/viewer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom-viewer.css') }}">
  </head>

  <body>
    <div class="pdfjs">
      <?php  include 'js/pdfjs/pdf.js-viewer/viewer.html'; ?>
    </div>

    <script>
/*      PDFJS.disableWorker = true; */
/*      PDFJS.webViewerLoad('/actual-letter/{{ $letters[0]->id }}#zoom=page-width'); */
/*      PDFJS.webViewerLoad('/actual-letter/{{ $letters[0]->id }}#zoom=page-width').then(function () {

          console.log('Promise worked!');
});
*/
      window.PDFJS.webViewerLoad();
      window.PDFViewerApplication.open('/actual-letter/{{ $letters[0]->id }}#zoom=page-width').then(function () {
                console.log('Promise worked!');
                fix_heights_on_pdf2html();
                console.log('Fixed height');
      });
    </script>
  </body>
@endif
</html>
