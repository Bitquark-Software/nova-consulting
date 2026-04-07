<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <style>
        body { font-family: ui-sans-serif, system-ui, sans-serif; line-height: 1.55; color: #2C2C2C; margin: 0; background: #F2F2F2; }
        .wrap { max-width: 640px; margin: 0 auto; padding: 24px 16px; }
        .card { background: #fff; border-radius: 16px; overflow: hidden; border: 1px solid #e5e5e5; }
        .head { background: #000; color: #fff; padding: 20px 24px; }
        .head h1 { margin: 0; font-size: 1.25rem; font-weight: 700; }
        .body { padding: 24px; }
        .section { margin-bottom: 22px; padding-bottom: 18px; border-bottom: 1px solid #eee; }
        .section:last-child { border-bottom: none; margin-bottom: 0; padding-bottom: 0; }
        .label { font-size: 0.75rem; font-weight: 700; text-transform: uppercase; letter-spacing: 0.06em; color: #666; margin-bottom: 4px; }
        .value { font-size: 1rem; color: #111; }
        .pill { display: inline-block; background: #F2F2F2; padding: 4px 10px; border-radius: 999px; font-size: 0.85rem; margin: 3px 4px 3px 0; }
        .total { font-size: 1.35rem; font-weight: 800; color: #000; margin-top: 8px; }
        .muted { color: #666; font-size: 0.9rem; margin-top: 12px; }
    </style>
</head>
<body>
<div class="wrap">
    <div class="card">
        <div class="head">
            <h1>{{ __('website_quote.email_header') }}</h1>
        </div>
        <div class="body">
            <div class="section">
                <p class="label">{{ __('website_quote.email_client') }}</p>
                <p class="value"><strong>{{ $data['name'] }}</strong></p>
                <p class="value">{{ $data['email'] }}</p>
                @if(!empty($data['phone']))
                    <p class="value">{{ $data['phone'] }}</p>
                @endif
                @if(!empty($data['company']))
                    <p class="value">{{ $data['company'] }}</p>
                @endif
                <p class="label" style="margin-top:12px">{{ __('website_quote.email_nova_account') }}</p>
                <p class="value">{{ !empty($data['create_nova']) ? __('website_quote.yes') : __('website_quote.no') }}</p>
            </div>

            <div class="section">
                <p class="label">{{ __('website_quote.email_service') }}</p>
                <p class="value">
                    @if($data['quote_type'] === 'landing') {{ __('website_quote.svc_landing') }} @endif
                    @if($data['quote_type'] === 'corporate') {{ __('website_quote.svc_corporate') }} @endif
                    @if($data['quote_type'] === 'custom') {{ __('website_quote.svc_custom') }} @endif
                </p>
            </div>

            @if($data['quote_type'] === 'landing')
                <div class="section">
                    <p class="label">{{ __('website_quote.email_options') }}</p>
                    @foreach($data['landing'] as $key => $on)
                        @if($on)
                            <span class="pill">{{ __('website_quote.landing_opt_'.$key) }}</span>
                        @endif
                    @endforeach
                </div>
            @endif

            @if($data['quote_type'] === 'corporate')
                <div class="section">
                    <p class="label">{{ __('website_quote.email_options') }}</p>
                    @if(!empty($data['corporate']['domain_hosting']))
                        <span class="pill">{{ __('website_quote.corp_domain') }}</span>
                    @endif
                    <span class="pill">
                        {{ $data['corporate']['screen_tier'] === '5_7' ? __('website_quote.corp_screens_5_7') : __('website_quote.corp_screens_4') }}
                    </span>
                    @if(!empty($data['corporate']['analytics']))
                        <span class="pill">{{ __('website_quote.corp_ga') }}</span>
                    @endif
                    @if(!empty($data['corporate']['clarity']))
                        <span class="pill">{{ __('website_quote.corp_clarity') }}</span>
                    @endif
                </div>
            @endif

            @if($data['quote_type'] === 'custom')
                <div class="section">
                    <p class="label">{{ __('website_quote.custom_problem') }}</p>
                    <p class="value" style="white-space:pre-wrap">{{ $data['custom']['problem'] }}</p>
                    <p class="label" style="margin-top:14px">{{ __('website_quote.custom_users') }}</p>
                    <p class="value" style="white-space:pre-wrap">{{ $data['custom']['users'] }}</p>
                    @if(!empty($data['custom']['integrations']))
                        <p class="label" style="margin-top:14px">{{ __('website_quote.custom_integrations') }}</p>
                        <p class="value" style="white-space:pre-wrap">{{ $data['custom']['integrations'] }}</p>
                    @endif
                    @if(!empty($data['custom']['timeline']))
                        <p class="label" style="margin-top:14px">{{ __('website_quote.custom_timeline') }}</p>
                        <p class="value">{{ $data['custom']['timeline'] }}</p>
                    @endif
                </div>
            @endif

            <div class="section">
                <p class="label">{{ __('website_quote.email_estimate') }}</p>
                <p class="total">${{ number_format($totalMxn, 0, '.', ',') }} MXN</p>
                <p class="muted">{{ __('website_quote.email_estimate_note') }}</p>
            </div>
        </div>
    </div>
</div>
</body>
</html>
