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
                <h3 class="box-title">Create New</h3> 
              </div>
              <div class="box-body">
                {{ Form::open(array('url' => 'invoices/create-new', 'class' => 'form-horizontal')) }}
                <div class="form-group">
                  <label class="col-sm-2 control-label">Name</label>
                  <div class="col-sm-5">
                    <!-- {{-- name:name untuk melempar controller ke database --}} -->
                    <input type="text" class="form-control" placeholder="Name" name="name" required>
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
                        <input type="text" class="form-control datepicker pull-right" name="invoicedates" id="date" data-date-format='yyyy-mm-dd' value="{{date('Y-m-d')}}" autocomplete="off">
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
                        <input type="text" class="form-control datepicker pull-right" name="due_date" id="date" data-date-format='yyyy-mm-dd' value="{{date('Y-m-d')}}" autocomplete="off">
                    </div>
                </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Invoice Number</label>
                  <div class="col-sm-5">
                    <!-- {{-- name:name untuk melempar controller ke database --}} -->
                    <input type="text" class="form-control" placeholder="Invoice Number" name="invoicesnumber" required>
                  </div>
                </div>
                                
                <div class="form-group">
                  <label class="col-sm-2 control-label">Invoice Status</label>
                  <div class="col-sm-5">
                    <!-- {{-- name:name untuk melempar controller ke database --}} -->
                    <input type="text" class="form-control" placeholder="Invoice Status" name="invoicesstatus" required>
                  </div>
                </div>
                
                <div class="form-group">
                  <label class="col-sm-2 control-label">Billing to</label>
                  <div class="col-sm-5">
                    <!-- {{-- name:name untuk melempar controller ke database --}} -->
                    <input type="text" class="form-control" placeholder="Billing to" name="billingto" required>
                  </div>
                </div>
                
                <div class="form-group">
                  <label class="col-sm-2 control-label">Company</label>
                  <div class="col-sm-5">
                    <!-- {{-- name:name untuk melempar controller ke database --}} -->
                    <input type="text" class="form-control" placeholder="Company" name="company" required>
                  </div>
                </div>
                
                <div class="form-group">
                  <label class="col-sm-2 control-label">Tittle</label>
                  <div class="col-sm-5">
                    <!-- {{-- name:name untuk melempar controller ke database --}} -->
                    <input type="text" class="form-control" placeholder="tittle" name="tittle" required>
                  </div>
                </div>


                <div class="form-group">
                  <label class="col-sm-2 control-label">Price</label>
                  <div class="col-sm-5">
                    <!-- {{-- name:name untuk melempar controller ke database --}} -->
                    <input type="text" class="form-control" placeholder="price" name="price" required>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">diskon pice</label>
                  <div class="col-sm-5">
                    <!-- {{-- name:name untuk melempar controller ke database --}} -->
                    <input type="text" class="form-control" placeholder="price diskon" name="pricenexts" required>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Total</label>
                  <div class="col-sm-5">
                    <!-- {{-- name:name untuk melempar controller ke database --}} -->
                    <input type="text" class="form-control" placeholder="total" name="total" required>
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
            {{-- <script type="text/javascript">
            $(document).ready(function() {
             $('.datepicker').datepicker();
            });
          </script> --}}
          



