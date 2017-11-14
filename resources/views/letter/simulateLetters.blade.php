  <div class="form-group{{ $errors->has('service') ? ' has-error' : '' }}">
    <label for="service" class="col-md-2 control-label">Service:</label>
    <div class="col-md-8">

      <select id="service" name="service" class="form-control">
        <option value="7123456789">Application for Housing (most complete) Ref. No: 7123456789</option>
        <option value="1923293137">Application for Housing - Ref. No: 1923293137</option>
        <option value="2357111317">Application for Housing - Ref. No: 2357111317</option>
        <option value="9182393123">Application for Housing (property available) - Ref. No: 9182393123</option>
        <option value="1235255457">Tenanacy (outstanding debt) - Ref. No: 1235255457</option>
        <option value="1215000628">Tenancy (Six-monthly payment adjustment) - Ref. No: 1215000628</option>
        <option value="1103013">Bond (additional documentation) - Ref. No: 1103013</option>
        <option value="demo-1">Demo - Part 1</option>
        <option value="demo-2">Demo - Part 2</option>
      </select>

      @if ($errors->has('service'))
      	<span class="help-block"><strong>{{ $errors->first('service') }}</strong></span>
			@endif
    </div>
  </div>
