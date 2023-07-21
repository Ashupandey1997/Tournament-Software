<!-- resources/views/events/index.blade.php -->

@foreach ($events as $event)
    <a href="{{ route('events.show', $event->id) }}">{{ $event->name }}</a>
    <!-- Add more details about the event if necessary -->
@endforeach
