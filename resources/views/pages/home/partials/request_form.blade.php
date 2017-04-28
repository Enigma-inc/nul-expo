<div class="container">
    <div class="sec-title">
                <h2 align="center" class="header">Talk To Us</h2>
            </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">

                <div class="panel-body">
                    <form class="callus padding-bottom" id="contact-form" onSubmit="return false">

                        <div class="form-group">
                            <div id="result"></div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-md-3 control-label">Your Name</label>
                            <div class="col-md-8 input-group">
                                <input id="name" type="text" class="form-control" required name="name" id="name">
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-3 control-label">Email Address</label>

                            <div class="col-md-8 input-group">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
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
                                <textarea class="form-control" name="message" id="message"></textarea>
                                <span class="input-group-addon"><i class="fa fa-comment"></i></span>
                            </div>
                        </div>
                        <div class="col-md-8 col-md-offset-3">
                            <div>
                                <a class="btn btn-primary" href="#">
                            Submit
                        </a>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>