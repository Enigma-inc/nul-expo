@extends('partials.master')
@section('content')
  <div class="row">
      <div class="col-md-12">
          <div class="panel panel-default">
              <div class="panel-heading">Exhibition Registration for
                <span class="color-primary">{{ucwords(str_replace('-',' ',$option))}}</span>
              </div>
              <div class="panel-body">
                  <form class="form-horizontal" role="form" method="POST"
                        action="{{ route('exhibition.register') }}">
                      {{ csrf_field() }}
                      <input type="text" hidden="true" name="option" value="{{$option}}">
                    <div class="col-xs-12 col-md-6">
                      <div class="form-group{{ $errors->has('company') ? ' has-error' : '' }}">
                          <label for="company" class="col-md-4 control-label">Company</label>

                          <div class="col-md-8">
                              <input id="company" type="text" class="form-control" name="company"
                                     value="{{old('company')}}"
                                     required>

                              @if ($errors->has('company'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('company') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>
                      <div class="form-group{{ $errors->has('names') ? ' has-error' : '' }}">
                          <label for="names" class="col-md-4 control-label">Contact Person Names</label>

                          <div class="col-md-8">
                              <input id="names" type="text" class="form-control" name="names"
                                     value="{{old('names')}}"
                                     required autofocus>

                              @if ($errors->has('names'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('names') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>

                      <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                          <label for="email" class="col-md-4 control-label">Contact Person Email</label>

                          <div class="col-md-8">
                              <input id="email" type="text" class="form-control" name="email"
                                     value="{{old('email')}}"
                                     required>

                              @if ($errors->has('email'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('email') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>
                      <div class="form-group{{ $errors->has('country') ? ' has-error' : '' }}">
                          <label for="country" class="col-md-4 control-label">Country</label>

                          <div class="col-md-8" style="display: flex">
                              <input hidden id="flag" name="country-flag"  type="text" value="https://restcountries.eu/data/lso.svg">
                              <img  height="36px" id="country-flag" src="{{(old('country-flag')) ? old('country-flag') :'https://restcountries.eu/data/lso.svg'}}" style="flex:1">
                              <input style="flex:9" id="country" type="text" class="form-control"
                                     name="country"
                                     value="{{(old('country')) ? old('country') :'Lesotho'}}" data-provide="typeahead" required>

                              @if ($errors->has('country'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('country') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>
                      <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                          <label for="phone" class="col-md-4 control-label">Phone</label>

                          <div class="col-md-8" style="display: flex">
                              <input readonly style="flex:1;min-width: 60px;" id="phone-code" type="text"
                                     class="form-control " name="phone-code" value="+266" required>
                              <input style="flex:9" id="phone" type="text" class="form-control"
                                     name="phone"
                                     value="{{old('phone')}}" required>

                              @if ($errors->has('phone'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('phone') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>
                    </div>
                    <div class="col-xs-12 col-md-6">
                      <div class="form-group{{ $errors->has('summary') ? ' has-error' : '' }}">
                          <label for="summary" class="col-md-4 control-label">Product/Business Summary</label>

                          <div class="col-md-8">
                              <textarea id="summary" type="text" rows="8" class="form-control" name="summary"
                                     required placeholder="Write a brief summary of your product/business in less than 100 words. ">{{old('summary')}}</textarea>

                            </textarea/>

                              @if ($errors->has('summary'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('summary') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>
                    </div>
                      <div class="col-xs-12 text-center">
                        <div class="form-group">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-check"></i> Submit
                                </button>
                        </div>
                      </div>
                  </form>
              </div>
          </div>
      </div>
  </div>
@endsection
@section('scripts')
    <script>
        var $input = $("#country");
        var flag = $('#country-flag');
        if(!flag.attr('src')){
            flag.hide();
        }

        $.get("https://restcountries.eu/rest/v2/all", function (data) {
            $input.typeahead({
                source: data,
                autoSelect: true
            });

        }, 'json');


        $input.change(function () {
            var current = $input.typeahead("getActive");
            if (current) {
                // Some item from your model is active!
                if (current.name == $input.val()) {
                    $('#phone-code').val('+' + current.callingCodes[0]);
                    $('#flag').val(current.flag);
                    var flag = $('#country-flag');
                    if(!flag.attr('src')){
                        flag.hide();
                    }
                    if (current.flag) {
                        flag.attr('src', current.flag).show();
                    }
                    // This means the exact match is found. Use toLowerCase() if you want case insensitive match.
                } else {
                    // This means it is only a partial match, you can either add a new item
                    // or take the active if you don't want new items
                }
            } else {
                // Nothing is active so it is a new value (or maybe empty value)
            }
        });



    </script>

@endsection
