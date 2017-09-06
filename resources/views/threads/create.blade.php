@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Create a New Thread</div>

                <div class="panel-body">
                <div>
                            <label for="email">Title:</label>
                            <div class="form-group">
                              <input type="text" class="form-control">
                            </div>
                        </div>
                </div>
                <div>
                </div>
                    <div class="panel-body">
               
                      

                        <div>
                            <label for="email">Body:</label>
                            <div class="form-group">
                              <textarea rows="10" class="form-control">
                                  
                              </textarea>
                            </div>
                        </div>
                        <br>
                        <div class="btn-group" role="group">
                        <button type="button" class="btn btn-default">Publish</button>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
