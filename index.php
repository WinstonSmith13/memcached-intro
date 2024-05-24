<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Memcached Example</title>
    <script src="script.js" defer></script>
</head>
<body>
    <h1>Memcached Example</h1>
    <form id="dataForm">
        <label for="key">Key:</label>
        <input type="text" id="key" name="key" required>
        <label for="value">Value:</label>
        <input type="text" id="value" name="value" required>
        <button type="submit">Save to Cache</button>
    </form>

    <h2>Retrieve Data</h2>
    <form id="retrieveForm">
        <label for="retrieveKey">Key:</label>
        <input type="text" id="retrieveKey" name="retrieveKey" required>
        <button type="submit">Retrieve from Cache</button>
    </form>

    <div id="result"></div>
</body>
</html>
