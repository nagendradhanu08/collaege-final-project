@extends('app.layout.main')



@section('content')

    <div style="width: 90%;margin: auto;margin-top: 5em">

        <form method="post" action="{{Route('result.update',['id'=>$result->id])}}" enctype="multipart/form-data">

            {{csrf_field()}}
            <input type="hidden" value="put" name="_method">


            <div class="row">

                <div class="col-md-4">

                    <div class="form-group">

                        <label for="Title">Title:</label>
                        <input type="text" class="form-control" name="title" value="{{$result->title}}">

                    </div>

                </div>

                <div class="col-md-4">

                    <div class="form-group">

                        <label for="spi">SPI:</label>
                        <input type="text" class="form-control" name="spi" value="{{$result->spi}}">

                    </div>

                </div>

            </div>

            <div class="row">

                <div class="col-md-8">

                    <div class="form-group">

                        <label for="semester">Semester</label>
                        <select class="form-control" name="semester">
                            <option>Select semester</option>
                            @for($i=1;$i<=8;$i++)
                                <option value="{{$i}}"  @if($result->semester == $i) ? selected @endif>Semester {{$i}}</option>
                            @endfor
                        </select>

                    </div>

                </div>

            </div>

            <div class="row">

                <div class="col-md-8">

                    <div class="form-group">

                        {{--<label for="semester">Select Result Image"</label>--}}
                        {{--<input type="file" name="photo" value="{{$result->photo}}">--}}

                        <label class="btn btn-default btn-file">
                            Browse <input type="file" style="display: none;" name="photo" value="{{$result->photo}}" required>
                        </label>

                    </div>

                </div>

            </div>

            <div class="row">

                <div class="col-md-4">

                    <div class="form-group">

                        <input type="submit" class="btn light-blue darken-4" value="Update">
                        <a class="btn red lighten-1" href="{{Route('result.index')}}">Cancle</a>

                    </div>

                </div>

            </div>

        </form>


    </div>





@stop