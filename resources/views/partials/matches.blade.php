@php
use Carbon\Carbon;
@endphp
@foreach ($matches as $sportName => $sportGroup)
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
@endforeach