<div class="container">
    <div class="sec-title">
                <h2 align="center" class="header">Talk To Us</h2>
            </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">

                <div class="panel-body">
                    <form class="callus padding-bottom" id="request-form" method="POST" action="/">
                    {{ csrf_field() }}

                        <div class="form-group">
                            <div id="result"></div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-md-3 control-label">Your Name</label>
                            <div class="col-md-8 input-group">
                                <input name="name" class="form-control">
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-3 control-label">Email Address</label>

                            <div class="col-md-8 input-group">
                                <input name="email" type="email" class="form-control" value="{{ old('email') }}" required autofocus>
                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span> 

                                @if ($errors->has('email'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span> @endif

                            </div>
                        </div>
                        <div class="form-group">
                            <label for="message" class="col-md-3 control-label">Message</label>
                            <div class="col-md-8 input-group">
                                <textarea name="message" rows="8" class="form-control"></textarea>
                                <span class="input-group-addon"><i class="fa fa-comment"></i></span>
                            </div>
                        </div>
                        <div class="col-md-8 col-md-offset-3">
                            <div>
                                <button class="btn btn-primary" type="submit">
                                    Submit
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>