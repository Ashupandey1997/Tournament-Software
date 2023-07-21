<!-- resources/views/events/categories.blade.php -->

@foreach ($categories as $category)
    <p>{{ $category->name }}</p>
    <!-- Display other category details if necessary -->
@endforeach
