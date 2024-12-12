@php
use Carbon\Carbon;
@endphp
@foreach ($matches as $sportName => $sportGroup)
@if ($sportName == 'Figure Skating')
<div class="card main-card">
    <div class="title">{{ strtoupper($sportName) }}</div>
    <div class="subtitle">{{ $sportGroup["Finals"][0]->stages }}</div>
    <div class="sub-card-container">
        @if (isset($isTypeNull))
        <div class="card sub-card">
            <div class="time">
                {{ Carbon::parse($sportGroup["Finals"][8]->start_time)->format('j F Y') }} - {{ Carbon::parse($sportGroup["Finals"][0]->start_time)->format('g:i A') }}
            </div>
            <div style='color: #2594f5; font-weight:bold;'>Men</div>
        </div>
        <div class="card sub-card">
            <div class="time">
                {{ Carbon::parse($sportGroup["Finals"][0]->start_time)->format('j F Y') }} - {{ Carbon::parse($sportGroup["Finals"][0]->start_time)->format('g:i A') }}
            </div>
            <div style='color: #db4bc6; font-weight:bold;'>Women</div>
        </div>
        @elseif ($sportGroup["Finals"][0]->type == "Women")
        <div class="card sub-card">
            <div class="time">
                {{ Carbon::parse($sportGroup["Finals"][0]->start_time)->format('j F Y') }} - {{ Carbon::parse($sportGroup["Finals"][0]->start_time)->format('g:i A') }}
            </div>
            <div style='color: #db4bc6; font-weight:bold;'>Women</div>
        @else
        <div class="card sub-card">
            <div class="time">
                {{ Carbon::parse($sportGroup["Finals"][0]->start_time)->format('j F Y') }} - {{ Carbon::parse($sportGroup["Finals"][0]->start_time)->format('g:i A') }}
            </div>
            <div style='color: #2594f5; font-weight:bold;'>Men</div>
        </div>
        @endif
        </div>
    </div>
    @php
    break;
    @endphp
    @else
    <div class="card main-card">
        <div class="title">{{ strtoupper($sportName) }}</div>
        @foreach ($sportGroup as $stageName => $stageGroup)
        <div class="subtitle">{{ $stageName }}</div>
        <div class="sub-card-container">
            @foreach ($stageGroup as $data)
            <div class="card sub-card">
                <div class="time">
                    {{ Carbon::parse($data->start_time)->format('j F Y') }} - {{ Carbon::parse($data->start_time)->format('g:i A') }}
                </div>
                <div class="teams">{{ $data->home ?: 'n/a' }} vs {{ $data->away ?: 'n/a' }}</div>
                <div style='color: {{ $data->type == 'Men' ? '#2594f5' : '#db4bc6' }};'>
                    {{ $data->type }}
                </div>
            </div>
            @endforeach
        </div>
        @endforeach
    </div>
    @endif
    @endforeach