
<form action="/tournament" method="POST">
    <label for="tournament_name">Tournament Name:</label>
    <input type="text" name="tournament_name" required>
    
    <label for="type_of_sports">Type of Sports:</label>
    <input type="text" name="type_of_sports" required>
    
    <label for="date_of_tournament">Date of the Tournament:</label>
    <input type="date" name="date_of_tournament" required>
    
    <label for="template">Template:</label>
    <input type="text" name="template" required>
    
    <label for="event_type">Event Type:</label>
    <input type="checkbox" name="event_type[]" value="TEST">TEST
    <input type="checkbox" name="event_type[]" value="ODI">ODI
    <input type="checkbox" name="event_type[]" value="T20">T20
    
    <button type="submit">Create Tournament</button>
</form>
