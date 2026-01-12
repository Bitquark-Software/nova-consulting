<!DOCTYPE html>
<html>
<head>
    <style>
        body { font-family: sans-serif; line-height: 1.6; color: #333; }
        .container { max-width: 600px; margin: 0 auto; padding: 20px; }
        .header { background: #000; color: #fff; padding: 15px; text-align: center; border-radius: 8px 8px 0 0; }
        .section { margin-bottom: 20px; border-bottom: 1px solid #eee; padding-bottom: 20px; }
        .label { font-weight: bold; color: #555; display: block; margin-top: 10px; }
        .value { color: #000; }
        .list-item { background: #f9fafb; padding: 5px 10px; margin: 2px 0; border-radius: 4px; display: inline-block; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>{{ __('quotation.title') }}</h2>
        </div>

        <div class="section">
            <h3>{{ __('quotation.personal_info') }}</h3>
            <p><span class="label">{{ __('quotation.label_name') }}:</span> <span class="value">{{ $data['name'] }}</span></p>
            <p><span class="label">{{ __('quotation.label_company') }}:</span> <span class="value">{{ $data['company'] ?? 'N/A' }}</span></p>
            <p><span class="label">{{ __('quotation.label_email') }}:</span> <span class="value">{{ $data['email'] }}</span></p>
            <p><span class="label">{{ __('quotation.label_phone') }}:</span> <span class="value">{{ $data['phone'] ?? 'N/A' }}</span></p>
            <p><span class="label">{{ __('quotation.label_referral') }}:</span> <span class="value">{{ $data['referral'] ?? 'N/A' }}</span></p>
        </div>

        <div class="section">
            <h3>{{ __('quotation.step_service') }}</h3>
            <p class="value" style="font-size: 1.1em; font-weight: bold;">
                @if($data['service'] === 'web_dev') {{ __('quotation.service_web_dev') }} @endif
                @if($data['service'] === 'staff_aug') {{ __('quotation.service_staff_aug') }} @endif
                @if($data['service'] === 'recruitment') {{ __('quotation.service_recruitment') }} @endif
            </p>
        </div>

        <div class="section">
            <h3>{{ __('quotation.step_details') }}</h3>

            {{-- Web Dev Details --}}
            @if($data['service'] === 'web_dev')
                <span class="label">{{ __('quotation.web_features_label') }}</span>
                <div>
                    @foreach($data['web']['features'] ?? [] as $feature)
                        <span class="list-item">{{ __('quotation.feature_'.$feature) }}</span>
                    @endforeach
                </div>
                
                @if(!empty($data['web']['requirements']))
                    <span class="label">{{ __('quotation.web_extra_req') }}</span>
                    <p class="value">{{ $data['web']['requirements'] }}</p>
                @endif
            @endif

            {{-- Staff Aug Details --}}
            @if($data['service'] === 'staff_aug')
                <span class="label">{{ __('quotation.staff_roles_label') }}</span>
                <div>
                    @foreach($data['staff']['roles'] ?? [] as $role)
                        <span class="list-item">{{ __('quotation.role_'.$role) }}</span>
                    @endforeach
                </div>
            @endif

            {{-- Recruitment Details --}}
            @if($data['service'] === 'recruitment')
                <p><span class="label">{{ __('quotation.recruit_stack') }}:</span> {{ $data['recruit']['stack'] }}</p>
                <p><span class="label">{{ __('quotation.recruit_location') }}:</span> {{ strtoupper($data['recruit']['location']) }}</p>
                <p><span class="label">{{ __('quotation.recruit_budget') }}:</span> ${{ $data['recruit']['budget'] }}</p>
                <p><span class="label">{{ __('quotation.recruit_urgency') }}:</span> {{ ucfirst($data['recruit']['urgency']) }}</p>
                
                @if(!empty($data['recruit']['languages']))
                    <span class="label">{{ __('quotation.recruit_langs') }}:</span>
                    <div>
                        @foreach($data['recruit']['languages'] as $lang)
                            <span class="list-item">{{ ucfirst($lang) }}</span>
                        @endforeach
                    </div>
                @endif
            @endif
        </div>

        <div class="section">
            <p>
                <span class="label">{{ __('quotation.consent_nova') }}</span> 
                {{ $data['create_nova'] ? 'Yes' : 'No' }}
            </p>
        </div>
    </div>
</body>
</html>