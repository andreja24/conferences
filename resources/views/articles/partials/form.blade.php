<div class="formInputDiv col-5 row">
    <label class="row form-input col-5 justify-content-center align-content-center" for="title-input">@lang('texts.title')</label>
    <input class="col-6" id="title-input" type="text" name="title" value="{{old('title', optional($article ?? null)->title)}}">
    @error('title')
    <p>{{$message}}</p>
    @enderror
</div>
<div class="formTextDiv col-5 row">
    <label class="row form-input col-5 justify-content-center align-content-center" for="content-input">@lang('texts.content')</label>
    <textarea class="col-6" id="content-input" name="content">{{old('content', optional($article ?? null)->content)}}</textarea>
    @error('content')
    <p>{{$message}}</p>
    @enderror
</div>
<div class="formTextDiv col-5 row">
    <label class="row form-input col-5 justify-content-center align-content-center" for="speaker-input">@lang('texts.speaker')</label>
    <textarea class="col-6" id="speaker-input" name="speaker">{{old('speaker', optional($article ?? null)->speaker)}}</textarea>
    @error('speaker')
    <p>{{$message}}</p>
    @enderror
</div>
<div class="formInputDiv col-5 row">
    <label class="row form-input col-5 justify-content-center align-content-center" for="start-time-input">@lang('texts.start_time')</label>
    <input class="col-6" type="time" id="start-time-input" name="start_time"
           value="{{ old('start_time') ?? (isset($article->start_time) ? \Carbon\Carbon::parse($article->start_time)->format('H:i') : null) }}">
    @error('start_time')
    <p>{{$message}}</p>
    @enderror
</div>
<div class="formTextDiv col-5 row">
    <label class="row form-input col-5 justify-content-center align-content-center" for="address-input">@lang('texts.address')</label>
    <textarea class="col-6" id="address-input" name="address">{{ old('address', optional($article ?? null)->address) }}</textarea>
    @error('address')
    <p>{{ $message }}</p>
    @enderror
</div>
<div class="formInputDiv col-5 row">
    <label class="row form-input col-5 justify-content-center align-content-center" for="total-tickets-input">@lang('texts.total_tickets')</label>
    <input class="col-6" id="total-tickets-input" type="number" name="total_tickets" value="{{ old('total_tickets', optional($article ?? null)->total_tickets) }}">
    @error('total_tickets')
    <p>{{ $message }}</p>
    @enderror
</div>
<div class="formInputDiv col-5 row">
    <label class="row form-input col-5 justify-content-center align-content-center" for="tickets-left-input">@lang('texts.tickets_left')</label>
    <input class="col-6" id="tickets-left-input" type="number" name="tickets_left" value="{{ old('tickets_left', optional($article ?? null)->tickets_left) }}">
    @error('tickets_left')
    <p>{{ $message }}</p>
    @enderror
</div>
<div class="formInputDiv col-5 row">
    <label class="row form-input col-5 justify-content-center align-content-center" for="date-input">@lang('texts.date')</label>
    <input class="col-6" id="date-input" type="date" name="date" value="{{ old('date', optional($article ?? null)->date) }}">
    @error('date')
    <p>{{ $message }}</p>
    @enderror
</div>

