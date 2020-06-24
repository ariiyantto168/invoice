<section class="content-header">
    <h1>
        Invoices
        <small>Master</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{url('/home')}}"><i class="fa fa-dashboard"></i>Home</a>
        <li class="active"><i class="fa fa-database"></i>Master</a>
        <li><a href="{{url('/invoices')}}"><i class="fa fa-cubes"></i>invoices</a>
        <li class="active"><i class="fa fa-plus"></i>Create New</a>
    </ol>
</section>

<!-- {{-- main content --}} -->
<section>

    <!-- {{-- default box --}} -->
    <section class="content">

            <!-- Default box -->
            <div class="box">
              <div class="box-header with-border">
                <h3 class="box-title">Update</h3>
                <button type="button" class="btn btn-info btn-xs pull-right" data-toggle="modal" data-target="#myModal">Delete</button> 
              </div>
              <div class="box-body">
              {{Form::open(array('url' => 'invoices/update/'.$invoices->idinvoices, 'class' => 'form-horizontal'))}}
                <div class="form-group">
                  <label class="col-sm-2 control-label">Name</label>
                  <div class="col-sm-5">
                    <!-- {{-- name:name untuk melempar controller ke database --}} -->
                    <input type="text" class="form-control" value={{$invoices->name}} name="name" required>
                  </div>
                </div>

                <div class="form-group">
                <div class="col-sm-2 control-label">
                    <label class="">Invoice Dates</label>
                </div>
                <div class="col-sm-5">
                    <div class="input-group date">
                        <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                        </div>
                        <input type="text" class="form-control datepicker pull-right" name="invoicedates" id="date" data-date-format='yyyy-mm-dd' value="{{date('Y-m-d',strtotime($invoices->invoicedates))}}" autocomplete="off">
                    </div>
                </div>
                </div>

                <div class="form-group">
                <div class="col-sm-2 control-label">
                    <label class="">Due Dates</label>
                </div>
                <div class="col-sm-5">
                    <div class="input-group date">
                        <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                        </div>
                        <input type="text" class="form-control datepicker pull-right" name="due_date" id="date" data-date-format='yyyy-mm-dd' value="{{date('Y-m-d',strtotime($invoices->due_date))}}" autocomplete="off">
                    </div>
                </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Invoice Number</label>
                  <div class="col-sm-5">
                    <!-- {{-- name:name untuk melempar controller ke database --}} -->
                    <input type="text" class="form-control" value="{{$invoices->invoicesnumber}}" name="invoicesnumber" required>
                  </div>
                </div>
                                
                <div class="form-group">
                  <label class="col-sm-2 control-label">Invoice Status</label>
                  <div class="col-sm-5">
                    <!-- {{-- name:name untuk melempar controller ke database --}} -->
                    <input type="text" class="form-control" value="{{$invoices->invoicesstatus}}" name="invoicesstatus" required>
                  </div>
                </div>
                
                <div class="form-group">
                  <label class="col-sm-2 control-label">Billing to</label>
                  <div class="col-sm-5">
                    <!-- {{-- name:name untuk melempar controller ke database --}} -->
                    <input type="text" class="form-control" value="{{$invoices->billingto}}" name="billingto" required>
                  </div>
                </div>
                
                <div class="form-group">
                  <label class="col-sm-2 control-label">Company</label>
                  <div class="col-sm-5">
                    <!-- {{-- name:name untuk melempar controller ke database --}} -->
                    <input type="text" class="form-control" value="{{$invoices->company}}"  name="company" required>
                  </div>
                </div>
                
                <div class="form-group">
                  <label class="col-sm-2 control-label">Tittle</label>
                  <div class="col-sm-5">
                    <!-- {{-- name:name untuk melempar controller ke database --}} -->
                    <input type="text" class="form-control" value="{{$invoices->tittle}}" name="tittle" required>
                  </div>
                </div>


                <div class="form-group">
                  <label class="col-sm-2 control-label">Price</label>
                  <div class="col-sm-5">
                    <!-- {{-- name:name untuk melempar controller ke database --}} -->
                    <input type="text" class="form-control" value="{{$invoices->price}}" name="price" required>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">diskon pice</label>
                  <div class="col-sm-5">
                    <!-- {{-- name:name untuk melempar controller ke database --}} -->
                    <input type="text" class="form-control" value="{{$invoices->pricenexts}}" name="pricenexts" required>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Total</label>
                  <div class="col-sm-5">
                    <!-- {{-- name:name untuk melempar controller ke database --}} -->
                    <input type="text" class="form-control" value="{{$invoices->total}}" name="total" required>
                  </div>
                </div>


                <hr>
                <div class="form-group">
                  <label class="col-sm-2 control-label"></label>
                  <div class="col-sm-5">
                    <a href="{{url('invoices')}}" class="btn btn-warning pull-right">Back</a>
                    <input type="submit" value="Save" class="btn btn-primary">
                  </div>
                </div>
                {{ Form::close() }}
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
          
          </section>
        </section>

        <!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog">
  
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Delete Invoice</h4>
      </div>
      <div class="modal-body">
        <p>apakah anda yakin mau hapus invoice ini??</p>
      </div>
      <div class="modal-footer">
          {{Form::open(array('url' => 'invoices/delete/'.$invoices->idinvoices,'method'=>'delete','class' => 'form-horizontal'))}}
        <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
        <input type="submit" class="btn btn-danger" value="Yes">
        {{Form::close()}}
      </div>
    </div>
    
  </div>
</div>
            {{-- <script type="text/javascript">
            $(document).ready(function() {
             $('.datepicker').datepicker();
            });
          </script> --}}
          



