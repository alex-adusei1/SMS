
          <div class="modal fade" id="editclassModal" role="dialog">
            <div class="modal-dialog modal-sm">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Update Classroom </h4>
                </div>
                <div class="modal-body">
                 <form action="{{ url('/classroom/create') }}" method="POST">
                     {{ csrf_field() }}
                     {{ method_field('PUT') }}
                    <div class="form-group">
                      <label for="class-name">Name of class: </label>
                      <input type="text" name="class_name" class="form-control" id="class-name">
                    </div>
                      <div class="form-group">
                        <label for="class_capacity">Classroom capacity</label>
                        <input type="number" name="class_capacity" value="0" id="class_capacity" class="form-control">
                      </div>
                      <div class="form-group">
                        <label for="class_floor">Floor name: </label>
                        <input type="text" name="class_floor" id="class_floor" class="form-control">
                      </div>
                    <div class="form-group">
                      <label for="class_location">Location: </label>
                      <input type="text" name="class_location" id="class_location" class="form-control">
                       <input type="hidden" method="PUT" name="_method" >
                    </div>
                    <div class="form-group">
                      <button type="submit" class="btn btn-sm form-btn btn-success">save</button>
                      <button type="reset" class="btn btn-sm form-btn btn-warning">refresh</button>
                      <button type="button" class="btn btn-sm form-btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                 </form>
                </div>
                <div class="modal-footer text-center">
                    {{ config('app.name') }}
                </div>
              </div>
            </div>
          </div>