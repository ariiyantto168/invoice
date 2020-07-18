<section class="content-header">
  <h1>Details  Invoice</h1>
</section>

<!-- Main content -->
<section class="content">

  <!-- Default box -->
  <div class="box">
    <div class="box-header with-border">
      <h3 class="box-title">Details</h3>
      <small>Index</small>
    </div>
    <!--box body-->
    <div class="box-body">

        <div class="form-group">
          <div class="col-sm-2 control-label">
            <label class="">Name</label>
          </div>
          <div class="col-sm-10">
            <label class="">: {{$invoices->name}}</label>
          </div>
        </div>

        <div class="form-group">
          <div class="col-sm-2 control-label">
            <label class="">Invoice Date</label>
          </div>
          <div class="col-sm-10">
            <label class="">: {{ date('d M Y', strtotime($invoices->invoicedates))}}</label>
          </div>
        </div>

        <div class="form-group">
          <div class="col-sm-2 control-label">
            <label class="">Due Date</label>
          </div>
          <div class="col-sm-10">
            <label class="">: {{ date('d M Y', strtotime($invoices->due_date))}}</label>
          </div>
        </div>
        
        <div class="form-group">
          <div class="col-sm-2 control-label">
            <label class="">Invoice Number</label>
          </div>
          <div class="col-sm-10">
            <label class="">: {{$invoices->invoicesnumber}}</label>
          </div>
        </div>

        <div class="form-group">
          <div class="col-sm-2 control-label">
            <label class="">Invoice Status</label>
          </div>
          <div class="col-sm-10">
            <label class="">: {{$invoices->invoicesstatus}}</label>
          </div>
        </div>

        <div class="form-group">
          <div class="col-sm-2 control-label">
            <label class="">Billing To</label>
          </div>
          <div class="col-sm-10">
            <label class="">: {{$invoices->billingto}}</label>
          </div>
        </div>

        <div class="form-group">
          <div class="col-sm-2 control-label">
            <label class="">Company</label>
          </div>
          <div class="col-sm-10">
            <label class="">: {{$invoices->company}}</label>
          </div>
        </div>

        <div class="form-group">
          <div class="col-sm-2 control-label">
            <label class="">Tittle</label>
          </div>
          <div class="col-sm-10">
            <label class="">: {{$invoices->tittle}}</label>
          </div>
        </div>

        <div class="form-group">
          <div class="col-sm-2 control-label">
            <label class="">Price</label>
          </div>
          <div class="col-sm-10">
            <label class="">: {{$invoices->price}}</label>
          </div>
        </div>

        <div class="form-group">
          <div class="col-sm-2 control-label">
            <label class="">Discount</label>
          </div>
          <div class="col-sm-10">
            <label class="">: {{$invoices->pricenexts}}</label>
          </div>
        </div>

        <div class="form-group">
          <div class="col-sm-2 control-label">
            <label class="">Total</label>
          </div>
          <div class="col-sm-10">
            <label class="">: {{$invoices->total}}</label>
          </div>
        </div>

    </div>
    <!--box body-->

  </div>
  </section>