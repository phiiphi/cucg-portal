@extends('backend.layouts.app')

@section('content')

  <div id='wrap'>
    <div>
        <h4 class="text-center text-uppercase"> Cucg Academic Calendar</h4>
        <h4 class="text-center"> 2019/2020 ACADEMIC YEAR</h4>
    </div>

      {{-- SEMESTER CALENDAR --}}
      <div class="row ml-5">
        <div class="col-xl-12">
            <div class="card card-shadow mb-4">
                <div class="card-header border-0">
                    <div class="custom-title-wrap bar-primary">
                      <div class="custom-title">FIRST SEMESTER ACADEMIC CALENDAR</div>
                    </div>
                </div>
                <div class="card-body- pt-3 pb-4">
                  @if (count($activities) > 0)
                  <div class="table-responsive">
                    <table id="data_table" class="table table-bordered table-striped" cellspacing="0">
                        <thead>
                        <tr>
                            <th>WEEK</th>
                            <th>DATE</th>
                            <th>ACTIVITY</th>
                            <th>ACTIONS</th>
                            
                        </tr>
                        </thead>
                        <tfoot>
                        </tfoot>
                        <tbody>
                          @foreach ($activities as $activity)
                          <tr>
                              <td>{{$activity->week}}</td>
                              <td><b>Start:</b> {{formateDate($activity->start)}} - <b>End:</b> {{formateDate($activity->end)}}</td>
                              <td>{{$activity->activity}}</td>
                              <td>
                            <button type="button" class="btn btn-info" data-myweek="hello" data-mystart="{{$activity->start}}"
                                data-myend="{{$activity->end}}" data-myactivity="{{$activity->activity}}"
                                data-toggle="modal" data-target="#edit" data-whatever="@mdo">EDIT
                            </button>
                              <button type="button" class="btn btn-danger" data-toggle="modal" data-target=".bd-example-modal-sm"><a href="#" class="text-white">DELETE</a></button></td>
                          </tr>
                          @endforeach
                          </tbody>
                      </table>
                  </div>
                  @else
                      <p class="text-danger"> No Data Yet</p>
                  @endif
                </div>
            </div>
        </div>
    </div>
    {{-- END OF SEMESTER CALENDAR --}}

    {{-- Edit popup model--}}
    <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel5" aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel5">Edit Activity</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                <form class="needs-validation" method="POST" action="{{route('admin.calendar.update','')}}">
                  {{ csrf_field() }}
                  <div class="form-row">
                      <div class="col-md-4 mb-3">
                          <label class="text-uppercase" for="week">Week</label>
                          <select class="custom-select" id="inputGroupSelect01" name="week">
                              <option selected>Choose...</option>
                              <option id="week" value="Week 1" name="week">Week 1</option>
                              <option id="week" value="Week 2" name="week">Week 2</option>
                              <option id="week" value="Week 3" name="week">Week 3</option>
                              <option id="week" value="Week 4" name="week">Week 4</option>
                              <option id="week" value="Week 5" name="week">Week 5</option>
                              <option id="week" value="Week 6" name="week">Week 6</option>
                              <option id="week" value="Week 7" name="week">Week 7</option>
                              <option id="week" value="Week 8" name="week">Week 8</option>
                              <option id="week" value="Week 9" name="week">Week 9</option>
                              <option id="week" value="Week 10" name="week">Week 10</option>
                              <option id="week" value="Week 11" name="week">Week 11</option>
                              <option id="week" value="Week 12" name="week">Week 12</option>
                              <option id="week" value="Week 13" name="week">Week 13</option>
                              <option id="week" value="Week 14" name="week">Week 14</option>
                              <option id="week" value="Week 15" name="week">Week 15</option>
                              <option id="week" value="Week 16" name="week">Week 16</option>
                          </select>
                      </div>
                      <div class="col-md-4 mb-3">
                          <label class="text-uppercase" for="start_date">Start</label>
                              <div class="input-group">
                                  <div class="input-group date dpYears" data-date-viewmode="years" data-date-format="yyyy-mm-dd" data-date="2020-01-01">
                                      <input type="text" name="start_date" class="form-control" placeholder="2020-01-01" aria-label="Right Icon" aria-describedby="dp-ig">
                                      <div class="input-group-append">
                                          <button id="dp-ig" class="btn btn-outline-secondary" type="button"><i class="fa fa-calendar f14"></i></button>
                                      </div>
                                  </div>
                              </div>
                      </div>
                      <div class="col-md-4 mb-3">
                          <label class="text-uppercase" for="end_date">End</label>
                              <div class="input-group">
                                  <div class="input-group date dpYears" data-date-viewmode="years" data-date-format="yyyy-mm-dd" data-date="2020-01-01">
                                      <input type="text" name="end_date" class="form-control" placeholder="2020-01-01" aria-label="Right Icon" aria-describedby="dp-ig">
                                      <div class="input-group-append">
                                          <button id="dp-ig" class="btn btn-outline-secondary" type="button"><i class="fa fa-calendar f14"></i></button>
                                      </div>
                                  </div>
                              </div>
                      </div>
                  </div>
                  <div class="form-row">
                      <div class="col-md-12 mb-3">
                          <label class="text-uppercase" for="activity">Enter Activity</label>
                          <div class="input-group">
                              <div class="input-group-prepend">
                                  <span class="input-group-text">Activity</span>
                              </div>
                              <textarea class="form-control" name="activity" aria-label="With textarea"></textarea>
                          </div>
                      </div>
                  </div>
                  {{method_field('PUT')}}
                  {{-- <button class="btn btn-primary" type="submit">Create Activity</button> --}}
              </form>
              </div>
              <div class="modal-footer">
                  {{-- <button type="button" class="btn btn-danger" data-dismiss="modal">DELETE</button> --}}
                  <input type="submit" value="UPDATE" name="submit" class="btn btn-primary">
                  <button type="button" class="btn btn-secondary" class="close" data-dismiss="modal" aria-label="Close">CLOSE</button>
              </div>
          </div>
      </div>
  </div>

  {{--DELETE MODAL--}}
  <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="mySmallModalLabel">Delete Activity</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
               Hey! Are You Sure You Want to Delete
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-danger">Delete</button>
            </div>
        </div>
    </div>
</div>
  </div>


@endsection