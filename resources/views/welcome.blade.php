<button id="closeSessionBtn">Close Previous Session</button>
<script>
    document.getElementById('closeSessionBtn').addEventListener('click', function() {
        fetch('/close-session', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            }
        })
        .then(response => {
            if (response.ok) {
                alert('Previous session closed successfully.');
            } else {
                alert('Failed to close previous session.');
            }
        })
        .catch(error => {
            console.error('Error:', error);
        });
    });
</script>
