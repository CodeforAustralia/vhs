 <form class="form my-2 my-lg-0 step__3--form" method="post" enctype="multipart/form-data" action="{{ route('report.submit') }}">

 	<input type="hidden" name="refNumber" value="{{ $refNumber }}"/>
 	<input type="hidden" name="dateMatched" value="{{ $dateMatched }}"/>