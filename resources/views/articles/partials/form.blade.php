<div>
    <label for="title-input">Title</label>
    <input id="title-input" type="text" name="title" value="{{old('title', optional($article ?? null)->title)}}">
    @error('title')
    <p>{{$message}}</p>
    @enderror
</div>
<div>
    <label for="content-input">Content</label>
    <textarea id="content-input" name="content">{{old('content', optional($article ?? null)->content)}}</textarea>
    @error('content')
    <p>{{$message}}</p>
    @enderror
</div>
<div>
    <label for="speaker-input">Speaker</label>
    <textarea id="speaker-input" name="speaker">{{old('speaker', optional($article ?? null)->speaker)}}</textarea>
    @error('speaker')
    <p>{{$message}}</p>
    @enderror
</div>
<div>
    <label for="length-input">Length</label>
    <input type="number" id="length-input" name="length" value="{{ old('length', optional($article ?? null)->length) }}">
    @error('length')
    <p>{{ $message }}</p>
    @enderror
</div>
<div>
    <label for="start-time-input">Start Time</label>
    <input type="time" id="start-time-input" name="start_time"
           value="{{ old('start_time') ?? (isset($article->start_time) ? \Carbon\Carbon::parse($article->start_time)->format('H:i') : null) }}">
    @error('start_time')
    <p>{{$message}}</p>
    @enderror
</div>
<div>
    <label for="address-input">Address</label>
    <textarea id="address-input" name="address">{{ old('address', optional($article ?? null)->address) }}</textarea>
    @error('address')
    <p>{{ $message }}</p>
    @enderror
</div>
<div>
    <label for="total-tickets-input">Total Tickets</label>
    <input id="total-tickets-input" type="number" name="total_tickets" value="{{ old('total_tickets', optional($article ?? null)->total_tickets) }}">
    @error('total_tickets')
    <p>{{ $message }}</p>
    @enderror
</div>
<div>
    <label for="tickets-left-input">Tickets Left</label>
    <input id="tickets-left-input" type="number" name="tickets_left" value="{{ old('tickets_left', optional($article ?? null)->tickets_left) }}">
    @error('tickets_left')
    <p>{{ $message }}</p>
    @enderror
</div>

