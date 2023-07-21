<!-- division_page.blade.php -->
<h2>{{ $event->name }} - Division Page</h2>

<h3>Parameters</h3>
<form action="{{ route('events.addParameter', $event->id) }}" method="post">
    @csrf
    <label for="name">Parameter Name:</label>
    <input type="text" name="name" required>
    <button type="submit">Add Parameter</button>
</form>

<ul>
    @foreach ($parameters as $parameter)
        <li>
            {{ $parameter->name }}
            <a href="{{ route('events.deleteParameter', ['event' => $event->id, 'parameter' => $parameter->id]) }}"
               onclick="return confirm('Are you sure you want to delete this parameter?')">Delete</a>
        </li>
    @endforeach
</ul>

<h3>Divisions</h3>
<form action="{{ route('events.addDivision', $event->id) }}" method="post">
    @csrf
    <label for="name">Division Name:</label>
    <input type="text" name="name" required>
    <button type="submit">Add Division</button>
</form>

<ul>
    @foreach ($divisions as $division)
        <li>
            {{ $division->name }}
            <a href="{{ route('events.deleteDivision', ['event' => $event->id, 'division' => $division->id]) }}"
               onclick="return confirm('Are you sure you want to delete this division?')">Delete</a>
        </li>
    @endforeach
</ul>
