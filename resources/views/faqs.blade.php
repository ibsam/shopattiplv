@extends('layouts.master')
@section('content') 

<section class="faq-page">
  <div class="container">
    <div class="row align-items-center justify-content-center">
      <div class="col-12 col-lg-12">
        <div id="accordion" class="accordion">
          <div class="card border-bottom active">
            <div class="card-header">
              <h6 class="mb-0"> 
              <a class="text-dark font-w-5" data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="true">Delivery charges for orders from the Online Shop?</a>
              </h6>
            </div>
            <div id="collapse1" class="collapse show" data-parent="#accordion">
              <div class="card-body text-muted">A placerat ac vestibulum integer vehicula suspendisse nostra aptent fermentum tempor a magna erat ligula parturient curae sem conubia vestibulum ac inceptos sodales condimentum cursus nunc mi consectetur condimentum.</div>
            </div>
          </div>
          <div class="card border-bottom">
            <div class="card-header">
              <h6 class="mb-0">
              <a class="text-dark" data-toggle="collapse" data-parent="#accordion" href="#collapse2">How long will delivery take?</a>
              </h6>
            </div>
            <div id="collapse2" class="collapse" data-parent="#accordion">
              <div class="card-body text-muted">A placerat ac vestibulum integer vehicula suspendisse nostra aptent fermentum tempor a magna erat ligula parturient curae sem conubia vestibulum ac inceptos sodales condimentum cursus nunc mi consectetur condimentum.</div>
            </div>
          </div>
          <div class="card border-bottom">
            <div class="card-header">
              <h6 class="mb-0">
              <a class="text-dark" data-toggle="collapse" data-parent="#accordion" href="#collapse3">What exactly happens after ordering?</a>
              </h6>
            </div>
            <div id="collapse3" class="collapse" data-parent="#accordion">
              <div class="card-body text-muted">A placerat ac vestibulum integer vehicula suspendisse nostra aptent fermentum tempor a magna erat ligula parturient curae sem conubia vestibulum ac inceptos sodales condimentum cursus nunc mi consectetur condimentum.</div>
            </div>
          </div>
          <div class="card border-bottom">
            <div class="card-header">
              <h6 class="mb-0">
              <a class="text-dark" data-toggle="collapse" data-parent="#accordion" href="#collapse4">When the order payment is taken of my bank account?</a>
              </h6>
            </div>
            <div id="collapse4" class="collapse" data-parent="#accordion">
              <div class="card-body text-muted">A placerat ac vestibulum integer vehicula suspendisse nostra aptent fermentum tempor a magna erat ligula parturient curae sem conubia vestibulum ac inceptos sodales condimentum cursus nunc mi consectetur condimentum.</div>
            </div>
          </div>
          <div class="card border-bottom">
            <div class="card-header">
              <h6 class="mb-0">
              <a class="text-dark" data-toggle="collapse" data-parent="#accordion" href="#collapse5">What should I do if I receive a damaged or wrong product?</a>
              </h6>
            </div>
            <div id="collapse5" class="collapse" data-parent="#accordion">
              <div class="card-body text-muted">A placerat ac vestibulum integer vehicula suspendisse nostra aptent fermentum tempor a magna erat ligula parturient curae sem conubia vestibulum ac inceptos sodales condimentum cursus nunc mi consectetur condimentum.</div>
            </div>
          </div>
          <div class="card border-0">
            <div class="card-header">
              <h6 class="mb-0">
              <a class="text-dark" data-toggle="collapse" data-parent="#accordion" href="#collapse6">Can I change or cancel my order?</a>
              </h6>
            </div>
            <div id="collapse6" class="collapse" data-parent="#accordion">
              <div class="card-body text-muted">A placerat ac vestibulum integer vehicula suspendisse nostra aptent fermentum tempor a magna erat ligula parturient curae sem conubia vestibulum ac inceptos sodales condimentum cursus nunc mi consectetur condimentum.</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection
