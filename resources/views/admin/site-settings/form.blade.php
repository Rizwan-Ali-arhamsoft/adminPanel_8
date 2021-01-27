@extends('admin.layouts.app')
@section('styles')

@endsection
@section('content')
<div class="breadcrumbbar">
    <div class="row align-items-center">
        <div class="col-md-8 col-lg-8">
            <h4 class="page-title"> 
                Site settings
            </h4>
            <div class="breadcrumb-list">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"> 
                        Site settings 
                    </li>
                </ol>
            </div>
        </div>
        <div class="col-md-4 col-lg-4">
            <div class="widgetbar">

            </div>                        
        </div>
    </div>          
</div>  
<div class="contentbar">                
    <div class="row">
        <div class="col-12">
            <div class="card m-b-30">
                <div class="card-body">
                    <form class="form-validate" action="{{ route('admin.site_settings.store') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="site_name">Site name</label>
                            <input type="text" class="form-control @error('site_name') is-invalid @enderror" id="site_name" name="site_name" value="{{ $model->site_name ?? '' }}" maxlength="100" aria-describedby="site_name" required />
                            @error('site_name')
                            <div id="site_name-error" class="invalid-feedback animated fadeInDown">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="site_title">Site title</label>
                            <input type="text" class="form-control @error('site_title') is-invalid @enderror" id="site_title" name="site_title" value="{{ $model->site_title ?? '' }}" maxlength="100" aria-describedby="site_title" required />
                            @error('site_title')
                            <div id="site_title-error" class="invalid-feedback animated fadeInDown">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="site_keywords">Site keywords</label>
                            <textarea class="form-control @error('site_keywords') is-invalid @enderror" name="site_keywords" required>{{ $model->site_keywords ?? '' }}</textarea>
                            @error('site_keywords')
                            <div id="site_keywords-error" class="invalid-feedback animated fadeInDown">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="site_description">Site keywords</label>
                            <textarea class="form-control @error('site_description') is-invalid @enderror" name="site_description" required>{{ $model->site_description ?? '' }}</textarea>
                            @error('site_description')
                            <div id="site_description-error" class="invalid-feedback animated fadeInDown">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="site_email">Site email</label>
                            <input type="email" class="form-control @error('site_email') is-invalid @enderror" id="site_email" name="site_email" value="{{ $model->site_email ?? '' }}" maxlength="50" aria-describedby="site_email" required />
                            @error('site_email')
                            <div id="site_email-error" class="invalid-feedback animated fadeInDown">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="support_email">Site support email</label>
                            <input type="email" class="form-control @error('support_email') is-invalid @enderror" id="support_email" name="support_email" value="{{ $model->support_email ?? '' }}" maxlength="50" aria-describedby="support_email" required />
                            @error('support_email')
                            <div id="support_email-error" class="invalid-feedback animated fadeInDown">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="contactus_email">Site contact email <small>Receive contact query</small></label>
                            <input type="email" class="form-control @error('contactus_email') is-invalid @enderror" id="contactus_email" name="contactus_email" value="{{ $model->contactus_email ?? '' }}" maxlength="50" aria-describedby="contactus_email" required />
                            @error('contactus_email')
                            <div id="contactus_email-error" class="invalid-feedback animated fadeInDown">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="site_phone">Site phone</label>
                            <input type="tel" class="form-control @error('site_phone') is-invalid @enderror" id="site_phone" name="site_phone" value="{{ $model->site_phone ?? '' }}" maxlength="50" aria-describedby="site_phone" required />
                            @error('site_phone')
                            <div id="site_phone-error" class="invalid-feedback animated fadeInDown">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="site_mobile">Site mobile</label>
                            <input type="tel" class="form-control @error('site_mobile') is-invalid @enderror" id="site_mobile" name="site_mobile" value="{{ $model->site_mobile ?? '' }}" maxlength="50" aria-describedby="site_mobile" required />
                            @error('site_mobile')
                            <div id="site_mobile-error" class="invalid-feedback animated fadeInDown">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="site_address">Site address</label>
                            <textarea class="form-control @error('site_address') is-invalid @enderror" name="site_address" required>{{ $model->site_address ?? '' }}</textarea>
                            @error('site_address')
                            <div id="site_address-error" class="invalid-feedback animated fadeInDown">{{ $message }}</div>
                            @enderror
                        </div>
                        <hr>
                        <div class="form-group">
                            <label for="uniswap_link">Uniswap URL</label>
                            <input type="url" class="form-control @error('uniswap_link') is-invalid @enderror" id="uniswap_link" name="uniswap_link" value="{{ $model->uniswap_link ?? '' }}" maxlength="100" aria-describedby="uniswap_link" />
                            @error('uniswap_link')
                            <div id="uniswap_link-error" class="invalid-feedback animated fadeInDown">{{ $message }}</div>
                            @enderror
                        </div>
                        <hr>
                        <div class="form-group">
                            <label for="facebook_url">Facebook</label>
                            <input type="url" class="form-control @error('facebook_url') is-invalid @enderror" id="facebook_url" name="facebook_url" value="{{ $model->facebook_url ?? '' }}" maxlength="100" aria-describedby="facebook_url" />
                            @error('facebook_url')
                            <div id="facebook_url-error" class="invalid-feedback animated fadeInDown">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="twitter_url">Twitter</label>
                            <input type="url" class="form-control @error('twitter_url') is-invalid @enderror" id="twitter_url" name="twitter_url" value="{{ $model->twitter_url ?? '' }}" maxlength="100" aria-describedby="twitter_url" />
                            @error('twitter_url')
                            <div id="twitter_url-error" class="invalid-feedback animated fadeInDown">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="medium_url">Medium</label>
                            <input type="url" class="form-control @error('medium_url') is-invalid @enderror" id="medium_url" name="medium_url" value="{{ $model->medium_url ?? '' }}" maxlength="100" aria-describedby="medium_url" />
                            @error('medium_url')
                            <div id="medium_url-error" class="invalid-feedback animated fadeInDown">{{ $message }}</div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div> 
    </div>
</div>
@endsection
@section('scripts')

<script type="text/javascript">
    $(function(){
        jQuery(".form-validate").validate({
            ignore: [],
            errorClass: "invalid-feedback animated fadeInDown",
            errorElement: "div",
            errorPlacement: function(e, a) {
                jQuery(a).parents(".form-group").append(e);
            },
            highlight: function(e) {
                jQuery(e).closest(".form-group").removeClass("is-invalid").addClass("is-invalid");
                jQuery(e).closest(".form-group > .form-control").removeClass("is-invalid").addClass("is-invalid");
            },
            success: function(e) {
                jQuery(e).closest(".form-group").removeClass("is-invalid");
                jQuery(e).closest(".form-group").find('.form-control').removeClass("is-invalid");
                jQuery(e).remove();
            }});
    });
</script>
@endsection