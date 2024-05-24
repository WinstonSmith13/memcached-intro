document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('dataForm').addEventListener('submit', function(event) {
        event.preventDefault();
        var key = document.getElementById('key').value;
        var value = document.getElementById('value').value;

        fetch('api.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded'
            },
            body: `key=${encodeURIComponent(key)}&value=${encodeURIComponent(value)}`
        })
        .then(response => response.json())
        .then(data => {
            alert(data.message);
        })
        .catch(error => console.error('Error:', error));
    });

    document.getElementById('retrieveForm').addEventListener('submit', function(event) {
        event.preventDefault();
        var key = document.getElementById('retrieveKey').value;

        fetch(`api.php?key=${encodeURIComponent(key)}`)
        .then(response => response.json())
        .then(data => {
            if (data.status === 'success') {
                document.getElementById('result').innerText = `Value: ${data.data}`;
            } else {
                document.getElementById('result').innerText = data.message;
            }
        })
        .catch(error => console.error('Error:', error));
    });
});
